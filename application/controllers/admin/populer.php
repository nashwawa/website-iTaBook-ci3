<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class populer extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        // if($this->session->userdata('level')==NULL){
        //     redirect('auth');
        // }
    }
	public function index(){

        $this->db->from('kategori');
        $this->db->order_by('nama_kategori','ASC');
        $kategori = $this->db->get()->result_array();
        
        $this->db->from('populer a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->order_by('tanggal','DESC');
        $populer = $this->db->get()->result_array();	

        $this->db->from('detail_buku');
        $detail_buku = $this->db->get()->result_array();

        // mengganti sesuai halaman(dekat profil)
		$data = array(
			'judul_halaman' => 'Halaman populer' ,
            'kategori'      => $kategori ,
            'detail_buku' => $detail_buku,
            'populer' => $populer,
		);
		$this->template->load('admin/template','admin/populer_index',$data);
	}
        public function simpan()
        {
            $namafoto = date("YmHis") . '.jpg';

            // Konfigurasi upload
            $config['upload_path'] = FCPATH . 'assets/upload/populer/';
            $config['max_size'] = 500; // 500 KB
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = $namafoto;
            $config['overwrite'] = true;

            // Cek folder tujuan
            if (!is_dir($config['upload_path'])) {
                mkdir($config['upload_path'], 0755, true); // Membuat folder jika belum ada
            }

            $this->load->library('upload', $config);

            // Proses upload
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
                    ' . $this->upload->display_errors() . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>');
                redirect('admin/populer');
            }

            $data_upload = $this->upload->data(); // Hasil upload
            $namafoto = $data_upload['file_name'];

            // Cek apakah judul sudah ada
            $populer = $this->input->post('judul');
            $this->db->from('populer');
            $this->db->where('judul', $populer);
            $cek = $this->db->get()->result_array();

            if (!empty($cek)) {
                $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
                    Nama populer sudah digunakan SILAHKAN GANTI
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>');
                redirect('admin/populer');
            }

            // Menyimpan data populer
            $data = array(
                'judul'      => $this->input->post('judul'),
                'id_kategori'=> $this->input->post('id_kategori'),
                'keterangan' => $this->input->post('keterangan'),
                'detail'     => $this->input->post('detail'),
                'karya'      => $this->input->post('karya'),
                'nama'       => $this->input->post('nama'),
                'tanggal'    => date('Y-m-d'),
                'foto'       => $namafoto,
                'username'   => $this->session->userdata('username'),
                'slug'       =>  str_replace(' ', '-', $this->input->post('judul')),    
                'harga'      => $this->input->post('harga'), // Menambahkan harga
            );

            // Insert data ke tabel populer
            $this->db->insert('populer', $data);
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
                Populer Berhasil Ditambahkan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>');
            redirect('admin/populer');
        }

    public function update()
    {
        // Ambil nama foto lama
        $namafoto = $this->input->post('nama_foto');
    
        $config['upload_path'] = FCPATH . 'assets/upload/populer/';
        $config['max_size'] = 500; // Dalam KB
        $config['file_name'] = $namafoto; // Tetap gunakan nama lama
        $config['overwrite'] = true;
        $config['allowed_types'] = 'jpg|jpeg|png';
    
        $this->load->library('upload', $config);
    
        // Proses upload
        if (!empty($_FILES['foto']['name'])) {
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
                ' . $this->upload->display_errors() . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
                redirect('admin/populer');
            } else {
                $uploaded_foto = $this->upload->data('file_name');
            }
        } else {
            // Gunakan foto lama jika tidak ada upload baru
            $uploaded_foto = $namafoto;
        }
    
        // Data yang akan diupdate
        $data = array(
            'judul' => $this->input->post('judul'),
            'id_kategori' => $this->input->post('id_kategori'),
            'keterangan' => $this->input->post('keterangan'),
            'detail' => $this->input->post('detail'),
            'slug' => strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $this->input->post('judul'))),
            'foto' => $uploaded_foto, // Foto baru atau lama
        );
    
        // Gunakan ID untuk pembaruan
        $where = array('id_populer' => $this->input->post('id_populer'));
    
        // Update database
        if ($this->db->update('populer', $data, $where)) {
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
            populer Berhasil Diperbarui
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Gagal memperbarui populer
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        redirect('admin/populer');
    }
    

    public function delete_data($id){
        $filename=FCPATH.'/assets/upload/populer/'.$id;
            if(file_exists($filename)){
                unlink("'/assets/upload/populer/'.$id");
            }
        $where = array(
            'foto'    => $id
        );
        $this->db->delete('populer',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-warning alert-dismissible" role="alert">
            Berhasil menghapus populer.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        ');
        redirect('admin/populer');
    }  


    public function artikel($id)
	{
		// Mengambil data konfigurasi
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		// Mengambil data kategori
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('berita a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', "left");
        $this->db->order_by('tanggal', 'DESC');
        $berita = $this->db->get()->result_array(); // <-- Perbaikan di sini

		$this->db->from('populer');
        $populer = $this->db->get()->result_array();	

		// Mengambil data konten berdasarkan slug
		$this->db->from('konten');
		
		$this->db->where('slug', $id);
		$konten = $this->db->get()->row();

		// Menyiapkan data untuk dikirim ke view
		$data = [
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'berita'=> $berita,
			'populer' => $populer,
			
		];

		// Memuat view
		$this->load->view('detail_populer', $data);
	}
    

}
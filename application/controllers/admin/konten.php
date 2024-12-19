<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konten extends CI_Controller {
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
       
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();	

        $this->db->from('detail_buku');
        $detail_buku = $this->db->get()->result_array();

        // mengganti sesuai halaman(dekat profil)
		$data = array(
			'judul_halaman' => 'Halaman konten' ,
            'kategori'      => $kategori ,
            'konten'        => $konten,
            'detail_buku' => $detail_buku
		);
		$this->template->load('admin/template','admin/konten_index',$data);
	}
    public function simpan()
    {
        $namafoto = date("YmHis") . '.jpg';
        $config['upload_path']      = 'assets/upload/konten/';
        $config['max_size'] = 500 * 1024; // Maksimal ukuran file 500 KB
        $config['allowed_types'] = 'jpg|jpeg|png'; // Hanya izinkan tipe gambar
        $config['file_name']        = $namafoto;
        $this->load->library('upload', $config);
    
        // Cek ukuran file
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran File terlalu besar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/konten');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            ' . $error['error'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/konten');
        } else {
            $data_upload = $this->upload->data();
        }
    
        // Cek apakah judul sudah ada
        $konten = $this->input->post('judul');
        $this->db->from('konten');
        $this->db->where('judul', $konten);
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Nama Konten sudah digunakan SILAHKAN GANTI
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/konten');
        }

        
    
        // Menyimpan data konten
        $data = array(
            'judul'      => $this->input->post('judul'),
            'id_kategori'=> $this->input->post('id_kategori'),
            'keterangan' => $this->input->post('keterangan'),
            'detail' => $this->input->post('detail'),
            'karya' => $this->input->post('karya'),
            'tanggal'    => date('Y-m-d'),
            'foto'       => $namafoto,
            'username'   => $this->session->userdata('username'),
            'slug'       => str_replace(' ', '-', $this->input->post('judul')),
            'harga'      => $this->input->post('harga'),    // Menambahkan harga
            
        );
    
        // Insert data ke tabel konten
        $this->db->insert('konten', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Konten Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/konten');
    }

    public function update()
    {
        // Ambil nama foto lama
        $namafoto = $this->input->post('nama_foto');
    
        // Konfigurasi upload
        $config['upload_path'] = 'assets/upload/konten/';
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
                redirect('admin/konten');
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
        $where = array('id_konten' => $this->input->post('id_konten'));
    
        // Update database
        if ($this->db->update('konten', $data, $where)) {
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
            Konten Berhasil Diperbarui
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Gagal memperbarui konten
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        redirect('admin/konten');
    }
    

    public function delete_data($id){
        $filename=FCPATH.'/assets/upload/konten/'.$id;
            if(file_exists($filename)){
                unlink("'/assets/upload/konten/'.$id");
            }
        $where = array(
            'foto'    => $id
        );
        $this->db->delete('konten',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-warning alert-dismissible" role="alert">
            Berhasil menghapus konten.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        ');
        redirect('admin/konten');
    }  
    

}
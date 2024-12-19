<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        // if($this->session->userdata('level')==NULL){
        //     redirect('auth');
        // }
    }
	public function index()
    {
      
        // Ambil data berita (konten)
        $this->db->from('berita');
        $this->db->order_by('tanggal', 'DESC');
        $berita = $this->db->get()->result_array(); // <-- Perbaikan di sini

        // Mengatur data yang akan dikirim ke view
        $data = array(
            'judul_halaman' => 'Halaman Berita',
            'berita'        => $berita, // Pastikan variabel ini benar
        );

        // Load view dengan template
        $this->template->load('admin/template', 'admin/berita_index', $data);
    }

    public function simpan()
    {
        $namafoto = date("YmHis") . '.jpg';
        $config['upload_path']      = 'assets/upload/berita/';
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
            redirect('admin/berita');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            ' . $error['error'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/berita');
        } else {
            $data_upload = $this->upload->data();
        }
    
        // Cek apakah judul sudah ada
        $berita = $this->input->post('judul');
        $this->db->from('berita');
        $this->db->where('judul', $berita);
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Nama Berita sudah digunakan SILAHKAN GANTI
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/berita');
        }
    
        // Menyimpan data konten
        $data = array(
            'judul'      => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
            'tengah' => $this->input->post('tengah'),
            'akhir' => $this->input->post('akhir'),
            'tanggal'    => date('Y-m-d'),
            'foto'       => $namafoto,
            'username'   => $this->session->userdata('username'),
            'slug'       => str_replace(' ', '-', $this->input->post('judul')),
            
        );
    
        // Insert data ke tabel konten
        $this->db->insert('berita', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Berita Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/berita');
    }

    public function update()
    {
        // Ambil nama foto lama
        $namafoto = $this->input->post('nama_foto');
    
        // Konfigurasi upload
        $config['upload_path'] = 'assets/upload/berita/';
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
                redirect('admin/berita');
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
            'keterangan' => $this->input->post('keterangan'),
            'tengah' => $this->input->post('tengah'),
            'akhir' => $this->input->post('akhir'),
            'slug' => strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $this->input->post('judul'))),
            'foto' => $uploaded_foto, // Foto baru atau lama
        );
    
        // Gunakan ID untuk pembaruan
        $where = array('id_berita' => $this->input->post('id_berita'));
    
        // Update database
        if ($this->db->update('berita', $data, $where)) {
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
            Berita Berhasil Diperbarui
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Gagal memperbarui berita
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
        }
        redirect('admin/berita');
    }
    

    public function delete_data($id){
        $filename=FCPATH.'assets/upload/berita/'. $id;
            if(file_exists($filename)){
                unlink("'assets/upload/berita/'. $id");
            }
        $where = array(
            'foto'    => $id
        );
        $this->db->delete('berita',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-warning alert-dismissible" role="alert">
            Berhasil menghapus berita.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        ');
        redirect('admin/berita');
    }  
    

}
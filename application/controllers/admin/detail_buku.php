<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail_buku extends CI_Controller {
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
        $this->db->from('detail_buku');
        $detail_buku = $this->db->get()->result_array();	
        $this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();	
        // mengganti sesuai halaman(dekat profil)
		$data = array(
			'judul_halaman' => 'Halaman konten' ,
            'kategori'      => $kategori ,
            'konfig'=> $konfig,
            'konten'        => $konten,
            'detail_buku'   => $detail_buku,
		);
		$this->template->load('admin/template','admin/detail_buku',$data);
	}
    public function simpan()
    {
    
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
            redirect('admin/detail_buku');
        }
    
        // Menyimpan data konten
        $data = array(
            'penerbit'      => $this->input->post('penerbit'),
            'isbn'          => $this->input->post('isbn'),
            'bahasa'        => $this->input->post('bahasa'),
            'lebar'         => $this->input->post('lebar'),
            'tanggal'       => date('Y-m-d'),
            'halaman'       => $this->input->post('halaman'),
            'panjang'       => $this->input->post('panjang'),
            'berat'         => $this->input->post('berat'),
            
        );
    
        $this->db->insert('detail_buku', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        Konten Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/detail_buku');
    }

    public function update()
    {
        // Data yang akan diupdate
        $data = array(
            'judul' => $this->input->post('judul'),
            'id_kategori' => $this->input->post('id_kategori'),
            'keterangan' => $this->input->post('keterangan'),
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
        redirect('admin/detail_buku');
    }
    
    public function delete_data($id) {
        // Tentukan path file
        $filename = FCPATH . 'assets/upload/detail_buku/' . $id;
        
        // Memeriksa apakah file benar-benar ada
        if (file_exists($filename)) {
            // Menampilkan path file untuk debugging
            var_dump($filename);  // Tambahkan ini untuk memeriksa path
            unlink($filename);  // Menghapus file
        } else {
            // Jika file tidak ditemukan, tampilkan pesan error
            echo 'File tidak ditemukan: ' . $filename;
        }
    
        // Hapus data dari database
        $where = array('foto' => $id);
        $this->db->delete('detail_buku', $where);
    
        // Menampilkan pesan flash setelah penghapusan
        $this->session->set_flashdata('alert', '
        <div class="alert alert-warning alert-dismissible" role="alert">
            Berhasil menghapus Detail.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        ');
    
        // Redirect ke halaman detail_buku setelah penghapusan
        redirect('admin/detail_buku');
    }
    
    

}
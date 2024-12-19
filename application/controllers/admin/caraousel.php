<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class caraousel extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        // if($this->session->userdata('level')==NULL){
        //     redirect('auth');
        // }
    }
	public function index(){
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();	
        // mengganti sesuai halaman(dekat profil)
		$data = array(
			'judul_halaman' => 'Halaman Caraousel' ,
            'caraousel'      => $caraousel 
		);
		$this->template->load('admin/template','admin/caraousel_index',$data);
	}
    public function simpan(){
        $namafoto = date("YmHis") . '.jpg';
        $config['upload_path']      = 'assets/upload/caraousel/';
        $config['max_size'] = 500 * 1024;
        $config['allowed_types'] = '*';
        $config['file_name']        = $namafoto;
        $this->load->library('upload', $config);
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Ukuran File terlalu besar
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
          </div>');
            redirect('admin/caraousel');
        } elseif (! $this->upload->do_upload('foto')) {
            $error      = array('error' => $this->upload->display_errors());
        } else {
            $data = array('uppload_data' => $this->upload->data());
        }
       
        $data = array(
            'judul'      => $this->input->post('judul'),
            'keterangan'      => $this->input->post('keterangan'),
            'foto'      => $namafoto,
        );

        $this->db->insert('caraousel', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        caraousel Berhasil Ditambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>');
        redirect('admin/caraousel');

    }

    public function update()
    {
        // Ambil nama foto lama
        $namafoto = $this->input->post('nama_foto');

        // Konfigurasi upload
        $config['upload_path'] = FCPATH . 'assets/upload/caraousel/'; // Pastikan path benar
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
                redirect('admin/caraousel');
            } else {
                $uploaded_foto = $this->upload->data('file_name');
            }
        } else {
            // Gunakan foto lama jika tidak ada upload baru
            $uploaded_foto = $namafoto;
        }

        // Data yang akan diupdate
        $data = array(
            'judul' => $this->input->post('judul', TRUE),
            'keterangan' => $this->input->post('keterangan', TRUE), // Tambahkan keterangan
            'foto' => $uploaded_foto, // Foto baru atau lama
        );

        // Gunakan ID untuk pembaruan
        $where = array('id' => $this->input->post('id')); // Sesuaikan 'id' dengan nama kolom di tabel database Anda

        // Update database
        if ($this->db->update('caraousel', $data, $where)) {
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
            Carousel Berhasil Diperbarui
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            Gagal memperbarui carousel
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        }
        redirect('admin/caraousel');
    }


    public function delete_data($id){
        $filename=FCPATH.'/assets/upload/caraousel/'.$id;
            if(file_exists($filename)){
                unlink("'/assets/upload/caraousel/'.$id");
            }
        $where = array(
            'foto'    => $id
        );
        $this->db->delete('caraousel',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-warning alert-dismissible" role="alert">
            Berhasil menghapus caraousel.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        ');
        redirect('admin/caraousel');
    }  
    

}
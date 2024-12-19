<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konfigurasi extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		
    }
	public function index()
	{
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
		// mengganti sesuai halaman(dekat profil)
		$data = array(
			'judul_halaman' => 'Halaman Konfigurasi',
            'konfig'        => $konfig
		);
		$this->template->load('admin/template','admin/konfigurasi',$data);
	}

    public function update() {
        // Menyiapkan data untuk diupdate
        $where = array('id_konfigurasi' => 1);
        $data = array(
            'judul_website' => $this->input->post('judul_website'),
            'profil_website' => $this->input->post('profil_website'),
            'instagram' => $this->input->post('instagram'),
            'facebook' => $this->input->post('facebook'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'no_wa' => $this->input->post('no_wa')
        );

        $this->db->update('konfigurasi', $data, $where);

        // Notifikasi berhasil
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert">
            Berhasil mengupdate konfigurasi.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/konfigurasi');
    }
}
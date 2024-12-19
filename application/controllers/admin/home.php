<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		if($this->session->userdata('username')==NULL){
            redirect('auth');
        }
    }
	public function index()
	{
		// mengganti sesuai halaman(dekat profil)
		$data = array(
			'judul_halaman' => 'Halaman Dashboard'
		);
		$this->template->load('admin/template','admin/dashboard',$data);
	}
}
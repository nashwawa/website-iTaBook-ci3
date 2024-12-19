<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {
    public function __construct(){
        parent:: __construct();

    }
	public function index()
	{
		// mengganti sesuai halaman(dekat profil)
		$data = array(
			'judul_halaman' => 'Halaman Beranda'
		);
		$this->load->view('beranda',$data);
	}
	
}
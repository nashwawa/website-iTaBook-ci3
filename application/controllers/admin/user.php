<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('user_model');
        // if($this->session->userdata('level')<>'admin'){
        //     redirect('auth');
        // }
    }
	public function index(){
        $this->db->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();	
        // mengganti sesuai halaman(dekat profil)
		$data = array(
			'judul_halaman' => 'Data Pengguna' ,
            'user'          => $user
		);
		$this->template->load('admin/template','admin/user_index',$data);
	}
    public function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert','
        <div class="alert alert-warning alert-dismissible" role="alert">
            Username sudah ada.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        ');
            redirect('admin/user');
        }
        $this->user_model->simpan();
        $this->session->set_flashdata('alert','
        <div class="alert alert-warning alert-dismissible" role="alert">
            Berhasil menambahkan user.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        ');
        redirect('admin/user');
    }
    public function delete_data($id){
        $where = array(
            'id_user'    => $id
        );
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-warning alert-dismissible" role="alert">
             Berhasil menghapus user.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        ');
        redirect('admin/user');
    }  
    
    public function update(){
        $this->user_model->update();
        $this->session->set_flashdata('alert','
        <div class="alert alert-warning alert-dismissible" role="alert">
             Berhasil mengupdate user.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        ');
        redirect('admin/user');
    }  
}
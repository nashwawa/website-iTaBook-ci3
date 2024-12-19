<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->database(); // Pastikan database library sudah diload

        // // Pengecekan session untuk memastikan user sudah login
        // if ($this->session->userdata('level') == NULL) {
        //     redirect('auth'); // Jika level user kosong, redirect ke halaman login
        // }
    }

    public function index() {
        // Mengambil data dari tabel 'kategori' dan mengurutkannya
        $this->db->from('kategori');
        $this->db->order_by('nama_kategori', 'ASC');
        $kategori = $this->db->get()->result_array();

        // Data yang akan dikirim ke view
        $data = array(
            'judul_halaman' => 'Kategori Konten',
            'kategori' => $kategori
        );
        $this->template->load('admin/template', 'admin/kategori_index', $data);
    }

    public function simpan() {
        // Cek apakah nama kategori sudah ada di database
        $this->db->from('kategori');
        $this->db->where('nama_kategori', $this->input->post('nama_kategori'));
        $cek = $this->db->get()->row_array();

        if ($cek != NULL) {
            // Jika kategori sudah ada
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger alert-dismissible" role="alert">
               Kategori konten sudah digunakan.
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('admin/kategori');
        }

        // Jika kategori belum ada, simpan data baru
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori', $data);

        // Notifikasi berhasil
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert">
            Berhasil menambahkan kategori.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/kategori');
    }

    public function delete_data($id) {
        $where = array('id_kategori' => $id);
        $this->db->delete('kategori', $where);

        // Notifikasi berhasil
        $this->session->set_flashdata('alert', '
        <div class="alert alert-warning alert-dismissible" role="alert">
            Berhasil menghapus kategori.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/kategori');
    }

    public function update() {
        // Menyiapkan data untuk diupdate
        $where = array('id_kategori' => $this->input->post('id_kategori'));
        $data = array('nama_kategori' => $this->input->post('nama_kategori'));

        $this->db->update('kategori', $data, $where);

        // Notifikasi berhasil
        $this->session->set_flashdata('alert', '
        <div class="alert alert-success alert-dismissible" role="alert">
            Berhasil mengupdate kategori.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('admin/kategori');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Orders extends CI_Controller
{


	// public function __construct()
    // {
    //     parent::__construct();
	// 	$this->load->model('User_model');
    // }
	public function index()
	{
        $data['orders'] = $this->db->get('orders')->result_array();
        $this->template->load('admin/template','admin/orders',$data);

	}

	public function bayar() {
        $uploadPath = 'assets/upload/pembayaran/';
        $namafoto1 = date("YmHis") . '_1.jpg';
    
        // General upload configuration
        $config = [
            'upload_path'   => $uploadPath,
            'max_size'      => 50 * 1024, // Maksimum 50MB
            'allowed_types' => 'jpg|jpeg|png|gif',
            'file_name'     => $namafoto1,
        ];
    
        $this->load->library('upload');
        $this->upload->initialize($config);
    
        if (!$this->upload->do_upload('foto')) {
            echo "<script>
                    alert('Gagal Mengunggah Foto');
                    window.location = '" . base_url('admin/konten') . "';
                  </script>";
            redirect('home/orders');
            return;
        }
   
    
        // Convert 'produk' array to string
        $produk = $this->input->post('produk');
        $produkString = is_array($produk) ? implode(', ', $produk) : $produk;
    
        // Data yang akan diinsert ke tabel orders
        $data = [
           
            'alamat'        => $this->input->post('alamat'),
            'no_telp'       => $this->input->post('no_telp'),
            'nama_penerima' => $this->input->post('nama_penerima'),
            'payment'       => $this->input->post('payment'),
          
            'produk'        => $produkString,
            'status'        => $this->input->post('status'),
            'total'         => $this->input->post('total'),
            'email'         => $this->input->post('email'),
            'tanggal'       => date('Y-m-d'), // Tambahkan tanggal sekarang
            'foto'          => $namafoto1,
        ];
    
        // Insert ke database
        if ($this->db->insert('orders', $data)) {
            echo "<script>
                    alert('Pembayaran berhasil');
                    window.location = '" . base_url('home/pesanan') . "';
                  </script>";
        } else {
            echo "<script>
                    alert('Pembayaran Gagal');
                    window.location = '" . base_url('home/keranjang') . "';
                  </script>";
        }
    }
    
    
    

   public function update()
    {
        $uploadPath = 'assets/upload/pembayaran/';
        $namafoto1 = date("YmHis") . '_1.jpg';

        // General upload configuration
        $config = [
            'upload_path'   => $uploadPath,
            'max_size'      => 50 * 1024,
            'allowed_types' => 'jpg|jpeg|png|gif',
        ];

        $this->load->library('upload');


        $config['file_name'] = $namafoto1;
        $this->upload->initialize($config);
       $this->upload->do_upload('foto');

        $data = array (
            'alamat'        => $this->input->post('alamat'),
            'no_telp'        => $this->input->post('no_telp'),
            'nama_penerima'        => $this->input->post('nama_penerima'),
            'payment'  => $this->input->post('payment'),
          
            'produk'        => $this->input->post('produk'),
            'status'        => $this->input->post('status'),
            'total'        => $this->input->post('total'),
			'email'     => $this->input->post('email'),
            'tanggal'      => date('Y-m-d'),
            'foto'        => $namafoto1,
        );

        $where = [
            'id_order' => $this->input->post('id_order')
        ];

        if ($this->db->update('orders', $data,$where)) {
            echo "
           <script>
           alert('Pembayaran berhasil');
           window.location = '" . base_url('admin/orders') . "';
           </script>
           ";
        } else {
            echo "
            <script>
            alert('Pembayaran Gagal');
            window.location = '" . base_url('admin/orders') . "';
            </script>
            ";
        }
    }


}
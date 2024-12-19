<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function __construct(){
        parent:: __construct();
		$this->load->helper('form'); 
			$this->load->model('konten_model'); // Load the model
			$this->load->library('cart');
    }
	public function index()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('populer a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->order_by('tanggal','DESC');
        $populer = $this->db->get()->result_array();	

		$this->db->from('berita a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', "left");
        $this->db->order_by('tanggal', 'DESC');
        $berita = $this->db->get()->result_array(); // <-- Perbaikan di sini

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->join('user c','a.username=c.username',"left");
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();	
		$data = array(
			'judul' => "beranda | nashwa",
			'konfig'=> $konfig,
			'kategori'=> $kategori,
			'caraousel'=> $caraousel,
			'konten'=> $konten,
			'berita'=> $berita,
			'populer' => $populer,
		);                                                        
		$this->load->view('beranda', $data);
	}

	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('berita a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', "left");
        $this->db->order_by('tanggal', 'DESC');
        $berita = $this->db->get()->result_array(); // <-- Perbaikan di sini

		$this->db->from('populer a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->order_by('tanggal','DESC');
        $populer = $this->db->get()->result_array();	

		$this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->join('user c','a.username=c.username',"left");
        $this->db->where('a.id_kategori',$id);
		$konten = $this->db->get()->result_array();	

		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;
  
		$data = array(
			'judul' => 	$nama_kategori." | nashwa",
			'nama_kategori' => $nama_kategori,
			'konfig'=> $konfig,
			'kategori'=> $kategori,
			'konten'=> $konten,
			'berita'=> $berita,
			'populer' => $populer,
		);
		$this->load->view('kategori', $data);
	}

	public function artikel($id)
	{
		// Mengambil data konfigurasi
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		// Mengambil data kategori
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('berita a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', "left");
        $this->db->order_by('tanggal', 'DESC');
        $berita = $this->db->get()->result_array(); // <-- Perbaikan di sini

		$this->db->from('populer a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->order_by('tanggal','DESC');
        $populer = $this->db->get()->result_array();	

		// Mengambil data konten berdasarkan slug
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', "left");
		$this->db->join('detail_buku db', 'a.detail=db.id_detail', "left");
		$this->db->join('user c', 'a.username=c.username', "left");
		$this->db->where('slug', $id);
		$konten = $this->db->get()->row();

		// Menyiapkan data untuk dikirim ke view
		$data = [
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'berita'=> $berita,
			'populer' => $populer,
			
		];

		// Memuat view
		$this->load->view('detail', $data);
	}
	
	public function semua_produk()
	{
		// Ambil konfigurasi
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		// Ambil kategori
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('berita a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', "left");
        $this->db->order_by('tanggal', 'DESC');
        $berita = $this->db->get()->result_array(); // <-- Perbaikan di sini

		$this->db->from('populer a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->order_by('tanggal','DESC');
        $populer = $this->db->get()->result_array();	


		// Ambil semua konten
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', "left");
		$this->db->join('user c', 'a.username=c.username', "left");
		$this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();

		// Kirim data ke view
		$data = array(
			'judul' => "Semua Produk | Nashwa",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'berita'=> $berita,
			'populer' => $populer,
		);

		$this->load->view('semua_produk', $data);
	}

	public function about()
	{
		// Ambil konfigurasi
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		// Ambil kategori
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('berita a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', "left");
        $this->db->order_by('tanggal', 'DESC');
        $berita = $this->db->get()->result_array(); // <-- Perbaikan di sini

		$this->db->from('populer a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
        $this->db->order_by('tanggal','DESC');
        $populer = $this->db->get()->result_array();	

		// Ambil semua konten
		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', "left");
		$this->db->join('user c', 'a.username=c.username', "left");
		$this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();

		// Kirim data ke view
		$data = array(
			'judul' => "About Us | Nashwa",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'berita'=> $berita,
			'populer' => $populer,
		);

		$this->load->view('about', $data);
	}
	
	public function isi($id_berita)
{
    // Mengambil data konfigurasi
    $this->db->from('konfigurasi');
    $konfig = $this->db->get()->row();

   	// Ambil kategori
		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

	$this->db->from('populer a');
	$this->db->join('kategori b','a.id_kategori=b.id_kategori',"left");
	$this->db->order_by('tanggal','DESC');
	$populer = $this->db->get()->result_array();	

    // Mengambil data konten berdasarkan slug
    $this->db->from('berita a');
    
    $this->db->where('slug', $id_berita);
    $berita = $this->db->get()->row();



    // Menyiapkan data untuk dikirim ke view
    $data = [
        'konfig' => $konfig,
       'kategori' => $kategori,
        'berita' => $berita,
		'populer' => $populer,
    ];

    // Memuat view
    $this->load->view('isi', $data);
}
public function tambah_keranjang($id_konten){

	$konten = $this->konten_model->find($id_konten);

	$qty= 1;
	if($this->input->post('qty'))
	{
		$qty = $this->input->post('qty');
	}

	$data = array(
			'id'  => $konten->id_konten,
			'qty' => $qty,
			'price' => $konten->harga,
			'name' => $konten->judul
	);

	$this->cart->insert($data);
	redirect('home');
}
	
public function keranjang()
{
$this->db->from('konten a');
$konten = $this->db->get()->result_array();
$data = array(
	'konten' => $konten
);

$this->load->view('keranjang', $data);
}

public function orders()
    {
        $this->db->from('orders ');
		
        $orders = $this->db->get()->result_array();
       
        $data = array (
            'orders' => $orders,
            
        );
        $this->load->view('orders', $data);
    }
	public function pesanan()
    {
     
        $this->db->from('orders');
        $orders = $this->db->get()->result_array();
        
        
        $data = array (
           
            'orders' => $orders,
          
        );
        $this->load->view('pesanan', $data);
    }

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('home');
	}
}
	
	
	



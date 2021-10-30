<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{		
		redirect('Produk/kategori/all');
	}
	public function kategori()
	{		
		$this->load->model('Produk_model');
		$total = 6;
		$kategori = $this->uri->segment(3);
		$halaman = $this->uri->segment(4);
		
		if(empty($halaman) || $halaman < 1){
			$data['halaman'] = 1;
			$start = 0;
		}else{
			$data['halaman'] = $halaman;
			$start = ($halaman - 1) * $total;
		}
		
		if($kategori == 'all'){
			$data['max'] = $this->Produk_model->getMaxPage();
			$data['produk'] = $this->Produk_model->getData($start, $total);
		}else{
			$data['max'] = $this->Produk_model->getMaxPageKategori($kategori);
			$data['produk'] = $this->Produk_model->getDataByKategori($kategori, $start, $total);
		}
		
		$data['kategori'] = $kategori;
		$data['page'] = 'kategori';
		$this->load->view('front', $data);	
	}
	public function detail()
	{		
		$this->load->model('Produk_model');
		$data['produk'] = $this->Produk_model->getDataByID($this->uri->segment(3));
		$data['page'] = 'detail';
		$this->load->view('front', $data);	
	}
	public function cari()
	{		
		redirect('produk/search/' . $_GET['produk']);
	}
	public function search()
	{		
		$this->load->model('Produk_model');
		$total = 6;
		$produk = $this->uri->segment(3);
		$halaman = $this->uri->segment(4);
		
		if(empty($halaman) || $halaman < 1){
			$data['halaman'] = 1;
			$start = 0;
		}else{
			$data['halaman'] = $halaman;
			$start = ($halaman - 1) * $total;
		}
		
		$data['max'] = $this->Produk_model->getMaxPageCari($produk);
		$data['produk'] = $this->Produk_model->getDataByCari($produk, $start, $total);
		$data['page'] = 'cari';
		$this->load->view('front', $data);	
	}
	
}

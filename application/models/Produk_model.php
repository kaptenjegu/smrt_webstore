<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {
	
	public function getData($start, $total)
	{
		$this->db->where('aktif', 1);
		$this->db->limit($total, $start);
		$result = $this->db->get($this->db->dbprefix . 'produk')->result();
		return $result;
	}
	public function getDataByID($id)
	{
		$this->db->from($this->db->dbprefix . 'produk');
		$this->db->join($this->db->dbprefix . 'kategori', $this->db->dbprefix . 'produk.id_kategori = ' . $this->db->dbprefix . 'kategori.id_kategori');
		$this->db->where($this->db->dbprefix . 'produk.id_produk', (int)$id);
		$this->db->where($this->db->dbprefix . 'produk.aktif', 1);
		$result = $this->db->get()->result();
		return $result;
	}
	public function getDataByCari($produk, $start, $total)
	{
		$this->db->where('aktif', 1);
		$this->db->like('nama_produk', $this->db->escape_str($produk));
		$this->db->limit($total, $start);
		$result = $this->db->get($this->db->dbprefix . 'produk')->result();
		return $result;
	}
	public function getMaxPage()
	{
		$this->db->where('aktif', 1);
		$rows = $this->db->get($this->db->dbprefix . 'produk')->num_rows();
		$result = ceil($rows / 6);
		return $result;
	}
	public function getMaxPageKategori($id)
	{
		$this->db->where('aktif', 1);
		$this->db->where('id_kategori', (int)$id);
		$rows = $this->db->get($this->db->dbprefix . 'produk')->num_rows();
		$result = ceil($rows / 6);
		return $result;
	}
	public function getMaxPageCari($produk)
	{
		$this->db->where('aktif', 1);
		$this->db->like('nama_produk', $this->db->escape_str($produk));
		$rows = $this->db->get($this->db->dbprefix . 'produk')->num_rows();
		$result = ceil($rows / 6);
		return $result;
	}
	
	public function getDataByKategori($id, $start, $total)
	{
		$this->db->where('aktif', 1);
		$this->db->where('id_kategori', (int)$id);
		$this->db->limit($total, $start);
		$result = $this->db->get($this->db->dbprefix . 'produk')->result();
		return $result;
	}
}

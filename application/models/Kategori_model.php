<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {
	
	public function getData()
	{
		$this->db->where('aktif', 1);
		$result = $this->db->get($this->db->dbprefix . 'kategori')->result();
		return $result;
	}
	public function getDataByID($id)
	{
		$this->db->where('id_kategori', (int)$id);
		$result = $this->db->get($this->db->dbprefix . 'kategori')->result();
		return $result;
	}
	
	
}

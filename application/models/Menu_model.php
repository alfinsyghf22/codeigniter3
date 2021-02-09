<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Menu_model extends CI_model{
 	public function getAllMenu()
 	{
 		return $this->db->get('menu')->result_array();
 	}

 	public function tambahDataMenu()
 	{
 		$data = [
 			"makanan" => $this->input->post('makanan', true),
 			"harga" => $this->input->post('harga', true)
 		];

 		$this->db->insert('menu', $data);
 	}

 	public function hapusDataMenu($id)
 	{
 		$this->db->where('id', $id);
 		$this->db->delete('menu');
 	}

 	public function getMenuById($id)
 	{
 		return $this->db->get_where('menu', ['id' => $id])->row_array();
 	}

	public function ubahDataMenu()
 	{
 		$data = [
 			"makanan" => $this->input->post('makanan', true),
 			"harga" => $this->input->post('harga', true)
 		];

 		$this->db->where('id', $this->input->post('id') );
 		$this->db->update('menu', $data);
 	}

 	public function cariDataMenu()
 	{
 		$keyword = $this->input->post('keyword', true);
 		$this->db->like('makanan', $keyword);
 		return $this->db->get('menu')->result_array();
 	}

 }
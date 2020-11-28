<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_layanan_model extends CI_Model{
	
	// get all product
	function get_layanan(){
		$query = $this->db->get('layanan');
		return $query;
	}

	function add_detail_layanan($data)
	{
	$this->db->insert('detail_layanan', $data);
	return $this->db->insert_id();
 	}
 	
 	function delete_detail_layanan($id_terapis)
 	{
 		return $this->db->delete('detail_layanan',array('id_terapis'=>$id_terapis));
 	}
}
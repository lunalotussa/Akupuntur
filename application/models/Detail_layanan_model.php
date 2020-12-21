<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_layanan_model extends CI_Model{
	
	// get all product
	function get_layanan(){
		$query = $this->db->get('layanan');
		return $query;
	}

	function get_terapi($id_terapis)
    {
        return $this->db->get_where('terapis',array('id_terapis'=>$id_terapis))->row_array();
    }

	function get_all_terapis()
    {
        $this->db->order_by('id_terapis', 'desc');
        $this->db->where('status','1');
        return $this->db->get('terapis')->result_array();
    }

	function add_detail_layanan($data)
	{
	$this->db->insert('detail_layanan', $data);
	return $this->db->insert_id();
 	}

 	function add_detail_layanan_admin($data)
	{
	$this->db->insert('detail_layanan', $data);
	return $this->db->insert_id();
 	}
 	
 	function delete_detail_layanan($id_terapis)
 	{
 		return $this->db->delete('detail_layanan',array('id_terapis'=>$id_terapis));
 	}
}
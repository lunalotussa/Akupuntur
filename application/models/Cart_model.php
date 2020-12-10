<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cart_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        
    }
    
    /*
     * Get customer by id_customer
     */
    function get_cart($id_cart)
    {
        return $this->db->get_where('cart',array('id_chart'=>$id_cart))->row_array();
    }
        
    /*
     * Get all customer
     */
    function get_all_cart($user)
    {
        // $this->db->order_by('cart', 'desc');
        // return $this->db->get('customer')->result_array();
        $this->db->select('cart.id_chart,layanan.jenis,layanan.nama,layanan.durasi,layanan.harga');
        $this->db->from('user');
        $this->db->join('cart', 'user.id_user=cart.id_customer');
        $this->db->join('detail_layanan', 'cart.id_detail_layanan=detail_layanan.id_detailLayanan');
        $this->db->join('layanan', 'layanan.id_layanan=detail_layanan.id_layanan');
        $this->db->where('user.id_user', $user);
        return $this->db->get()->result();
    }

    function get_harga_layanan($id_cart)
    {
        // $this->db->order_by('cart', 'desc');
        // return $this->db->get('customer')->result_array();
        $this->db->select('layanan.harga');
        $this->db->from('cart');
        $this->db->join('detail_layanan', 'cart.id_detail_layanan = detail_layanan.id_detailLayanan');
        $this->db->join('layanan', 'detail_layanan.id_layanan = layanan.id_layanan');
        $this->db->where('cart.id_chart', $id_cart);
        return $this->db->get()->result();
    }
        
    /*
     * function to add new customer
     */
    function add_cart($params)
    {
        $this->db->insert('cart',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update customer
     */
    function update_cart($id_customer,$params)
    {
        $this->db->where('id_customer',$id_customer);
        return $this->db->update('customer',$params);
    }
    
    /*
     * function to delete customer
     */
    function delete_cart($id_cart)
    {
        return $this->db->delete('cart',array('id_chart'=>$id_cart));
    }

    function add_transaksi($params)
    {
        $this->db->insert('transaksi',$params);
        return $this->db->insert_id();
    }
}

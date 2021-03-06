<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Customer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get customer by id_customer
     */
    function get_customer($id_customer)
    {
        return $this->db->get_where('customer',array('id_customer'=>$id_customer))->row_array();
    }
        
    /*
     * Get all customer
     */
    function get_all_customer()
    {
        $this->db->order_by('id_customer', 'desc');
        return $this->db->get('customer')->result_array();
    }
        
    /*
     * function to add new customer
     */
    function add_customer($params)
    {
        $this->db->insert('customer',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update customer
     */
    function update_customer($id_customer,$params)
    {
        $this->db->where('id_customer',$id_customer);
        return $this->db->update('customer',$params);
    }
    
    /*
     * function to delete customer
     */
    function delete_customer($id_customer)
    {
        return $this->db->delete('customer',array('id_customer'=>$id_customer));
    }
}

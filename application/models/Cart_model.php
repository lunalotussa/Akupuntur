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

    function get_time($id_terapis,$tanggal)
    {
        $this->db->select('*');
        $this->db->from('detail_transaksi');
        $this->db->where('id_terapis', $id_terapis);
        $this->db->where('tanggal', $tanggal);
        return $this->db->get()->result();
    }

    function get_transaksi($no_transaksi)
    {
        return $this->db->get_where('transaksi',array('no_transaksi'=>$no_transaksi))->row_array();
    }
        
    /*
     * Get all customer
     */
    function get_all_cart($user)
    {
        // $this->db->order_by('cart', 'desc');
        // return $this->db->get('customer')->result_array();
        $this->db->select('cart.id_chart,layanan.jenis,layanan.nama,layanan.durasi,layanan.harga,layanan.gambar as gambar, detail_layanan.id_terapis');
        $this->db->from('user');
        $this->db->join('cart', 'user.id_user=cart.id_customer');
        $this->db->join('detail_layanan', 'cart.id_detail_layanan=detail_layanan.id_detailLayanan');
        $this->db->join('layanan', 'layanan.id_layanan=detail_layanan.id_layanan');
        $this->db->where('user.id_user', $user);
        $this->db->where('cart.status', '1');
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

    function add_cart_detail($params)
    {
        $this->db->insert('detail_transaksi',$params);
        return $this->db->insert_id();
    }


    
    /*
     * function to update customer
     */
    function update_cart($id_chart,$params)
    {
        $this->db->where('id_chart',$id_chart);
        return $this->db->update('cart',$params);
    }

    function update_cart_user($id_user,$params)
    {
        $this->db->where('id_customer',$id_user);
        return $this->db->update('cart',$params);
    }

    function update_transaksi($id_transaksi,$params)
    {
        $this->db->where('no_transaksi',$id_transaksi);
        return $this->db->update('transaksi',$params);
    }
    
    /*
     * function to delete customer
     */
    function delete_cart($id_cart)
    {   
        $this->db->delete('detail_transaksi',array('id_cart'=>$id_cart));
        return $this->db->delete('cart',array('id_chart'=>$id_cart));
    }

    function add_transaksi($params)
    {
        $this->db->insert('transaksi',$params);
        return $this->db->insert_id();
    }

    function get_bayar_detail($param)
    {
        $this->db->select('transaksi.no_transaksi,transaksi.total_harga,nama,sum(layanan.durasi) as lama ');
        $this->db->from('transaksi');
        $this->db->join('detail_transaksi', 'transaksi.no_transaksi=detail_transaksi.no_transaksi');
        $this->db->join('cart', 'detail_transaksi.id_cart=cart.id_chart');
        $this->db->join('detail_layanan', 'detail_layanan.id_detailLayanan=cart.id_detail_layanan');
        $this->db->join('layanan', 'detail_layanan.id_layanan=layanan.id_layanan');
        $this->db->where('detail_transaksi.no_transaksi', $param);
        $this->db->group_by($param);
        return $this->db->get()->result();
    }

    

    function get_all_transaksi(){
        $this->db->select('transaksi.total_harga,nama,sum(layanan.durasi) as lama ');
        $this->db->from('transaksi');
        $this->db->join('detail_transaksi', 'transaksi.no_transaksi=detail_transaksi.no_transaksi');
        $this->db->join('cart', 'detail_transaksi.id_cart=cart.id_chart');
        $this->db->join('detail_layanan', 'detail_layanan.id_detailLayanan=cart.id_detail_layanan');
        $this->db->join('layanan', 'detail_layanan.id_layanan=layanan.id_layanan');
        $this->db->where('detail_transaksi.no_transaksi', $param);
        $this->db->group_by($param);
        return $this->db->get()->result();
    }

    function update_verifikasi_pembayaran($no_transaksi,$params)
    {
        $this->db->where('no_transaksi',$no_transaksi);
        $this->db->query("UPDATE transaksi JOIN detail_transaksi ON transaksi.no_transaksi=detail_transaksi.no_transaksi JOIN cart ON detail_transaksi.id_cart=cart.id_chart SET cart.status='0' WHERE transaksi.no_transaksi=$no_transaksi");
        return $this->db->update('transaksi',$params);
    }

    function update_verifikasi_pemesanan($no_transaksi,$params)
    {
        $this->db->where('no_transaksi',$no_transaksi);
        return $this->db->update('transaksi',$params);
    }

    function checkout_detail($no_transaksi){
        // select * from transaksi a join detail_transaksi b on a.no_transaksi=b.no_transaksi join cart c on b.id_cart=c.id_chart join detail_layanan d on c.id_detail_layanan=d.id_detailLayanan join layanan e on d.id_layanan=e.id_layanan where a.no_transaksi='83';
        $this->db->select('e.durasi as durasi,e.nama as nama,e.harga as harga');
        $this->db->from('transaksi a');
        $this->db->join('detail_transaksi b', 'a.no_transaksi=b.no_transaksi');
        $this->db->join('cart c', 'b.id_cart=c.id_chart');
        $this->db->join('detail_layanan d', 'c.id_detail_layanan=d.id_detailLayanan');
        $this->db->join('layanan e', 'd.id_layanan=e.id_layanan');
        $this->db->where('b.no_transaksi', $no_transaksi);
        return $this->db->get()->result();
    }

    function get_bayar_status($no_transaksi){
        // select * from transaksi a join detail_transaksi b on a.no_transaksi=b.no_transaksi join cart c on b.id_cart=c.id_chart join detail_layanan d on c.id_detail_layanan=d.id_detailLayanan join layanan e on d.id_layanan=e.id_layanan where a.no_transaksi='83';
        $this->db->select('bukti_pembayaran');
        $this->db->from('transaksi');
        $this->db->where('no_transaksi', $no_transaksi);
        return $this->db->get()->result();
    }

    function get_id_customer($param){
        $this->db->select('id_customer');
        $this->db->from('customer');
        $this->db->where('id_user', $param);
        return $this->db->get()->result();
    }
}

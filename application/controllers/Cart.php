<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Cart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['id_user'])) {
            redirect(base_url());
        }
        $this->load->model('Cart_model');
        $this->load->library('upload');
        $this->load->model('Transaksi_model');
        date_default_timezone_set('Asia/Jakarta');
    }
    
    function index()
    {

        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        $data['belanja']    = $this->Cart_model->get_all_cart($_SESSION['id_user']);
        $data['_view'] = 'cart/index';

        $this->load->view('templates/relish/header');
        $this->load->view('cart/index',$data);
        $this->load->view('templates/relish/footer');
    }

    function add($iddetaillayanan)
    {
        // if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'id_detail_layanan' => $iddetaillayanan,
                'id_customer' => $_SESSION['id_user'],
            );

            $customer_id = $this->Cart_model->add_cart($params);
            redirect('cart/index');
        // } else {
        //     $data['_view'] = 'customer/add';
        //     $this->load->view('templates/pure/header');
        //     $this->load->view('layouts/bulma-dashboard/main', $data);
        //     $this->load->view('templates/pure/footer');
        // }
    }

    function remove($id_cart)
    {
        $item = $this->Cart_model->get_cart($id_cart);

        // check if the Customer exists before trying to delete it
        if (isset($item['id_customer'])) {
            $this->Cart_model->delete_cart($id_cart);
            redirect('cart/index');
        } else
            show_error('Error when delete data');
    }

    function pay(){
        if (isset($_POST) && count($_POST) > 0) {
            $cart =$this->input->post('selcheck');
            $tot = 0;
            foreach($cart as $item){
                $harga = $this->Cart_model->get_harga_layanan($item);
                $tot += $harga->harga;
            }
            
            $params = array(
                'status_pembayaran' => "0",
                'status_pemesanan' => "0",
                'id_costumer' => $_SESSION['id_user'],
                'tanggal' => "hari ini",
                'total_harga' => $tot,
                'bukti_pembayaran' => "0",
            );

            $transaksi_id = $this->Cart_model->add_transaksi($params);

            foreach($cart as $item){
                $parampa = array(
                    'no_transaksi' => $transaksi_id,
                    'id_cart' => $item,
                );
                $this->Cart_model->add_cart($parampa);
            }

            redirect('dashboard');
        } else {
            $data['_view'] = 'dashboard';
    
		$this->load->view('templates/pure/header');
		$this->load->view('layouts/bulma-dashboard/main', $data);
		$this->load->view('templates/pure/footer');
        }
    }
}
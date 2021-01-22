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

    function history()
    {

        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        // $data['belanja']    = $this->Cart_model->get_all_cart($_SESSION['id_user']);
        // $data['_view'] = 'cart/index';

        $data['_view'] = 'cart/history';

        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');
    }

    function detail_history($no_transaksi){
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];

        $asd = explode("-",$no_transaksi);
        $cuscus = $this->Cart_model->get_id_customer(($asd['1']/13));
        $data['transaksi']  = $this->Cart_model->get_transaksi($cuscus);
        $data['_view']      = 'cart/detail_pembayaran';

        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');

    }

    function detail_list(){
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        //$data['belanja']    = $this->Terapi_model->get_all_chart();
        $data['_view'] = 'cart/detail_list';

        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');

    }

    function list_verifikasi_pembayaran(){
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        //$data['belanja']    = $this->Terapi_model->get_all_chart();
        $data['_view'] = 'cart/list_verifikasi_pembayaran';

        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');

    }

    function list_verifikasi_pemesanan(){
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        //$data['belanja']    = $this->Terapi_model->get_all_chart();
        $data['_view'] = 'cart/list_verifikasi_pemesanan';

        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');

    }

    function detail($no_transaksi){
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        $data['transaksi']  = $this->Cart_model->get_transaksi($no_transaksi);
        $data['_view']      = 'cart/detail';

        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');

    }

    function detail_pembayaran($no_transaksi){
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        $data['transaksi']  = $this->Cart_model->get_transaksi($no_transaksi);
        $data['test'] = $this->Cart_model->get_id_customer($_SESSION['id_user']);
        $data['_view']      = 'cart/detail_pembayaran';

        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');

    }

    function add($iddetaillayanan)
    {
        // if (isset($_POST) && count($_POST) > 0) {

            $cuscus = $this->Cart_model->get_id_customer($_SESSION['id_user']);
            $params = array(
                'id_detail_layanan' => $iddetaillayanan,
                'id_customer' => $cuscus,
                'status' => '1',
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
            $cart = $this->input->post('selcheck');
            $day = $this->input->post('date');
            $tot = 0;
            foreach($cart as $item){
                $harga = $this->Cart_model->get_harga_layanan($item);
                $tot += $harga[0]->harga;
            }
            $cuscus = $this->Cart_model->get_id_customer($_SESSION['id_user']);
            $params = array(
                'status_pembayaran' => "0",
                'status_pemesanan' => "0",
                'id_customer' => $a,
                'tanggal' => date("Y-m-d, H:m:s"),
                'total_harga' => $tot,
                'bukti_pembayaran' => "0",
                'rekening_pengirim' => "0",
            );

            $transaksi_id = $this->Cart_model->add_transaksi($params);

            // $data['notrans'] = $transaksi_id;
            // $data['bayar'] = $tot;
            
            foreach($cart as $item){
                $parampa = array(
                    'no_transaksi' => $transaksi_id,
                    'id_cart' => $item,
                    'tanggal' => $day,
                );
                $this->Cart_model->add_cart_detail($parampa);

                // $parampapa = array(
                //     'status' => '0',
                // );
                // $this->Cart_model->update_cart($item,$parampapa);
            }
            // $data['bayar'] = $this->Cart_model->get_bayar_detail($transaksi_id);
            // $this->load->view('templates/relish/header');
            // $this->load->view('new_view/upload_pembayaran', $data);
            // $this->load->view('templates/relish/footer');
            $year = date('Y');
            redirect('cart/checkout/'.$year.'AK-'.($transaksi_id*13));
        } else {
            $data['_view'] = 'cart/index';

        $this->load->view('templates/relish/header');
        $this->load->view('cart/index',$data);
        $this->load->view('templates/relish/footer');
        }
    }

    function checkout($param){
            $asd = explode("-",$param);
            $data['bayar'] = $this->Cart_model->get_bayar_detail(($asd['1']/13));
            $data['status_bayar'] = $this->Cart_model->get_bayar_status(($asd['1']/13));
            $data['detail'] = $this->Cart_model->checkout_detail(($asd['1']/13));
            $this->load->view('templates/relish/header');
            $this->load->view('new_view/upload_pembayaran', $data);
            $this->load->view('templates/relish/footer');
    }

    function transaksi($id_transaksi){
        // check if the admin exists before trying to edit it
        $data['transaksi']   = $this->Cart_model->get_transaksi($id_transaksi);

        if (isset($data['transaksi']['no_transaksi'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $path = './resources/picture/bukti_pembayaran';
                // get foto
                $config['upload_path'] = './resources/picture/bukti_pembayaran';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['max_size'] = '2048';  //2MB max
                $config['max_width'] = '4480'; // pixel
                $config['max_height'] = '4480'; // pixel
                $config['file_name'] = $_FILES['bukti']['name'];

                $this->upload->initialize($config);

                if (!empty($_FILES['bukti']['name'])) {
                    if ($this->upload->do_upload('bukti')) {
                        $foto   = $this->upload->data();
                        $params = array(
                            'bukti_pembayaran' => $foto['file_name'],
                            'rekening_pengirim' => $this->input->post('rekening'),
                        );
                        // hapus foto pada direktori
                        //@unlink($path . $this->input->post('filelama'));
                        $purum = array(
                            'status' => '0',
                        );
                        $this->Cart_model->update_transaksi($id_transaksi, $params);
                        $this->Cart_model->update_cart_user($_SESSION['id_user'], $purum);
                        redirect('landing/jasa');
                    } else {
                        die("gagal update");
                    }
                }
        } else{
            show_error('The admin you are trying to edit does not exist.');
        }
    }
    }

    function verifikasi_pembayaran($no_transaksi)
    {
        // check if the terapi exists before trying to edit it
        $data['belanja']    = $this->Cart_model->get_transaksi($no_transaksi);
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];

        if (isset($data['belanja']['no_transaksi'])) {
            $params = array(
                'status_pembayaran' => '1',
            );

            $this->Cart_model->update_verifikasi_pembayaran($no_transaksi, $params);
            redirect('cart/list_verifikasi_pembayaran');
        } else
            show_error('The terapi you are trying to edit does not exist.');
    }

    function verifikasi_pemesanan($no_transaksi)
    {
        // check if the terapi exists before trying to edit it
        $data['belanja']    = $this->Cart_model->get_transaksi($no_transaksi);
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];

        if (isset($data['belanja']['no_transaksi'])) {
            $params = array(
                'status_pemesanan' => '1',
            );

            $this->Cart_model->update_verifikasi_pemesanan($no_transaksi, $params);
            redirect('cart/list_verifikasi_pemesanan');
        } else
            show_error('The terapi you are trying to edit does not exist.');
    }
}

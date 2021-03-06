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
        $this->load->library('session');
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
        $cuscus = $this->Cart_model->get_id_customer($_SESSION['id_user']);
        $data['belanja']    = $this->Cart_model->get_all_cart($cuscus[0]->id_customer);
        $data['_view'] = 'cart/index';

        $cuscus = $this->Cart_model->get_id_customer($_SESSION['id_user']);
        $id_customerr= $cuscus[0]->id_customer;

        //cari terapis dari id customer session
        $sql = "SELECT cart.id_chart,cart.id_detail_layanan,detail_layanan.id_terapis FROM cart JOIN detail_layanan ON cart.id_detail_layanan=detail_layanan.id_detailLayanan WHERE cart.id_customer=$id_customerr AND cart.status='0'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $x) {
                $id_terapiss        =$x->id_terapis;
            }}

        $data['tera_who'] = $id_terapiss;
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
        $data['transaksi']  = $this->Cart_model->get_transaksi(($asd['1']/13));
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
        $data['_view']      = 'cart/detail_pembayaran';

        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');

    }

    function add($iddetaillayanan)
    {
        $cuscus = $this->Cart_model->get_id_customer($_SESSION['id_user']);
        $id_customerr= $cuscus[0]->id_customer;
        $params = array(
            'id_detail_layanan' => $iddetaillayanan,
            'id_customer' => $id_customerr,
            'status' => '1',
        );

        $sql = "SELECT * FROM detail_layanan WHERE id_detailLayanan=$iddetaillayanan";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $a) {
                $id_terapis=$a->id_terapis;
            }}

            $sqll = "SELECT cart.id_chart,cart.id_detail_layanan,detail_layanan.id_terapis FROM cart JOIN detail_layanan ON cart.id_detail_layanan=detail_layanan.id_detailLayanan WHERE cart.id_customer=$id_customerr AND cart.status='1'";
            $queryy = $this->db->query($sqll);
            if ($queryy->num_rows() > 0) {
                foreach ($queryy->result() as $zz) {
                    $id_terapiss=$zz->id_terapis;
                }
                if ($id_terapiss==$id_terapis) {
                 $customer_id = $this->Cart_model->add_cart($params);
                 redirect('cart/index');
             }else{
                redirect('landing/jasa');
            }
        }else{
            $customer_id = $this->Cart_model->add_cart($params);
            redirect('cart/index');

        }      
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
            date_default_timezone_set('Asia/Jakarta');
            $cart = $this->input->post('selcheck');
            $day = $this->input->post('date');
            $jam_mulai = $this->input->post('jam_mulai');
            $now = strtotime($jam_mulai);

            $jam_lama = $this->input->post('jam_selesai'). " minutes";
            $temp_jam = strtotime("$jam_mulai + $jam_lama");
            $jam_selesai = date("H:i", $temp_jam);

            $tot = 0;
            foreach($cart as $item){
                $harga = $this->Cart_model->get_harga_layanan($item);
                $tot += $harga[0]->harga;
            }
            $cuscus = $this->Cart_model->get_id_customer($_SESSION['id_user']);
            $id_customerr= $cuscus[0]->id_customer;

            //cari terapis dari id customer session
            $sql = "SELECT cart.id_chart,cart.id_detail_layanan,detail_layanan.id_terapis FROM cart JOIN detail_layanan ON cart.id_detail_layanan=detail_layanan.id_detailLayanan WHERE cart.id_customer=$id_customerr AND cart.status='0'";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $x) {
                    $id_terapiss        =$x->id_terapis;
                }}

            //kondisi jika terapis masih melakukan layanan
                $bubu = "SELECT cart.id_chart,detail_transaksi.no_transaksi,cart.status,detail_transaksi.tanggal,detail_transaksi.jam_mulai,detail_transaksi.jam_selesai,detail_transaksi.id_terapis FROM cart JOIN detail_transaksi ON cart.id_chart=detail_transaksi.id_cart WHERE cart.status='0' AND detail_transaksi.id_terapis=$id_terapiss";
                $mumu = $this->db->query($bubu);
                if ($mumu->num_rows() > 0) {
                    foreach ($mumu->result() as $s) {
                       $terapiz   =$s->id_terapis;
                       $tgl       =$s->tanggal;
                       $mulai     =$s->jam_mulai;
                       $selesai   =$s->jam_selesai;
                   }}

            //kondisi jika terapis penuh
                   if ($now >= strtotime($mulai) && $now <= strtotime($selesai) && $day==$tgl && $id_terapiss==$terapiz) {
            //kasih alert "maaf jadwal terapis penuh. silahkan pilih tanggal atau jam booking lainnya"
                     redirect('cart/index');

                   } else {
                    $params = array(
                        'status_pembayaran' => "0",
                        'status_pemesanan' => "0",
                        'id_customer' => $cuscus[0]->id_customer,
                        'tanggal' => date("Y-m-d, H:m:s"),
                        'total_harga' => $tot,
                        'bukti_pembayaran' => "0",
                        'rekening_pengirim' => "0",
                    );

                    $transaksi_id = $this->Cart_model->add_transaksi($params);
                    
            // $data['notrans'] = $transaksi_id;
            // $data['bayar'] = $tot;
            // code selisih

                    foreach($cart as $item){
                        $parampa = array(
                            'no_transaksi' => $transaksi_id,
                            'id_cart' => $item,
                            'tanggal' => $day,
                            'jam_mulai' => $jam_mulai,
                            'jam_selesai' => $jam_selesai,
                            'id_terapis'=> $id_terapiss
                        );
                        $params = array(
                            'status_pembayaran' => '1',
                        );
                        $this->Cart_model->add_cart_detail($parampa);
                        $this->Cart_model->update_verifikasi_pembayaran($transaksi_id, $params);
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
                }
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

                        $cuscus = $this->Cart_model->get_id_customer($_SESSION['id_user']);
                        $this->Cart_model->update_transaksi($id_transaksi, $params);
                        $this->Cart_model->update_cart_user($cuscus[0]->id_customer, $purum);
                        redirect('landing/menunggu_konfirmasi');
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

    function getTimeAjax($id_terapis = NULL,$tanggal = NULL){
        if($id_terapis!=NULL && $tanggal!=NULL){
            $ter=$id_terapis;
            $tang=$tanggal;
        }else{
            $ter = $this->input->post('id_terapis');
            $tang = $this->input->post('tanggal');
        }
        $dato = $this->Cart_model->get_time($ter,$tang);
        $jamf = array();

        $jam = array();
        for ($i = 8;$i <= 17;$i++)
        {
            if ($i <= 9)
            {
                $vara = strtotime("0" . $i . ":00");
                $varb = strtotime("0" . $i . ":30");

                array_push($jam,$vara,$varb);        
                }
            else
            {

                $vara = strtotime($i . ":00");
                $varb = strtotime($i . ":30");

                array_push($jam,$vara,$varb);
                        if ($i == 17)
                        {
                            //skip  
                        }
                        else
                        {
                            array_push($jam,$vara,$varb);
                        }
                }
        }
        array_pop($jam);
        if($dato != NULL){
            foreach($dato as $key){
                $temp = array('mulai'=>$key->jam_mulai,'akhir'=>$key->jam_selesai);
                array_push($jamf,$temp);
            }

            foreach($jamf as $key){
                $mulai = strtotime($key['mulai']);
                $akhir = strtotime($key['akhir']);

                for($i=0;$i<count($jam);$i++){
        
                    if($mulai<= $jam[$i] && ($jam[$i]<$akhir || $jam[$i]==$akhir)){
                        if (($key = array_search($jam[$i], $jam)) !== false) {
                            $jam[$key]=null;
                        }
                    }
                }
                $newjam = array();
                for($a=0;$a<count($jam);$a++){
                    if($jam[$a]==null){
                        //skip
                    }else{
                    $todate = date("H:i", $jam[$a]);
                    array_push($newjam,$todate);   
                    }
                }
                array_pop($newjam);
                $jamfilter = array_values(array_unique($newjam));
            }
                for($s=0;$s<count($jamfilter);$s++){
                    echo "<option value=\"".$jamfilter[$s]."\">".$jamfilter[$s]."</option>";
                }
        }else{
            for($i=0;$i<count($jam);$i++){
                echo "<option value=\"".date("H:i",$jam[$i])."\">".date("H:i",$jam[$i])."</option>";
            }
        }
    }
}

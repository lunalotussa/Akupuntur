<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Transaksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
    }

    /*
     * Listing of transaksi
     */
    function index()
    {
        $data['transaksi'] = $this->Transaksi_model->get_all_transaksi();

        $data['_view'] = 'transaksi/index';
        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');
    }

    /*
     * Adding a new transaksi
     */
    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'status_pembayaran' => $this->input->post('status_pembayaran'),
                'status_pemesanan' => $this->input->post('status_pemesanan'),
                'id_costumer' => $this->input->post('id_costumer'),
                'id_terapis' => $this->input->post('id_terapis'),
                'tanggal' => $this->input->post('tanggal'),
                'total_harga' => $this->input->post('total_harga'),
                'bukti_pembayaran' => $this->input->post('bukti_pembayaran'),
            );

            $transaksi_id = $this->Transaksi_model->add_transaksi($params);
            redirect('transaksi/index');
        } else {
            $data['_view'] = 'transaksi/add';
            $this->load->view('templates/pure/header');
            $this->load->view('layouts/bulma-dashboard/main', $data);
            $this->load->view('templates/pure/footer');
        }
    }

    /*
     * Editing a transaksi
     */
    function edit($no_transaksi)
    {
        // check if the transaksi exists before trying to edit it
        $data['transaksi'] = $this->Transaksi_model->get_transaksi($no_transaksi);

        if (isset($data['transaksi']['no_transaksi'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'status_pembayaran' => $this->input->post('status_pembayaran'),
                    'status_pemesanan' => $this->input->post('status_pemesanan'),
                    'id_costumer' => $this->input->post('id_costumer'),
                    'id_terapis' => $this->input->post('id_terapis'),
                    'tanggal' => $this->input->post('tanggal'),
                    'total_harga' => $this->input->post('total_harga'),
                    'bukti_pembayaran' => $this->input->post('bukti_pembayaran'),
                );

                $this->Transaksi_model->update_transaksi($no_transaksi, $params);
                redirect('transaksi/index');
            } else {
                $data['_view'] = 'transaksi/edit';
                $this->load->view('templates/pure/header');
                $this->load->view('layouts/bulma-dashboard/main', $data);
                $this->load->view('templates/pure/footer');
            }
        } else
            show_error('The transaksi you are trying to edit does not exist.');
    }

    /*
     * Deleting transaksi
     */
    function remove($no_transaksi)
    {
        $transaksi = $this->Transaksi_model->get_transaksi($no_transaksi);

        // check if the transaksi exists before trying to delete it
        if (isset($transaksi['no_transaksi'])) {
            $this->Transaksi_model->delete_transaksi($no_transaksi);
            redirect('transaksi/index');
        } else
            show_error('The transaksi you are trying to delete does not exist.');
    }
}

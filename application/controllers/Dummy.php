<?php
/* 
 * Dummy Controller untuk ngetest view saja
 */

class Dummy extends CI_Controller
{
    function metode_pembayaran()
    {
        $this->load->view('templates/relish/header');
        $this->load->view('new_view/metode_pembayaran');
        $this->load->view('templates/relish/footer');
    }

    function upload_pembayaran()
    {
        $this->load->view('templates/relish/header');
        $this->load->view('new_view/upload_pembayaran');
        $this->load->view('templates/relish/footer');
    }

    function pembayaran_selesai()
    {
        $this->load->view('templates/relish/header');
        $this->load->view('new_view/pembayaran_selesai');
        $this->load->view('templates/relish/footer');
    }
}

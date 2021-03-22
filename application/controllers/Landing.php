<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Search_model');
    }

    public function index()
    {
        $this->load->view('templates/relish/header');
        $this->load->view('landing/index');
        $this->load->view('templates/relish/footer');
    }

    public function jasa()
    {
        $data['landing'] = $this->Search_model->get_all();
        $data['_view'] = 'landing/jasa';
        $this->load->view('templates/relish/header', $data);
        $this->load->view('landing/jasa', $data);
        $this->load->view('templates/relish/footer', $data);
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['landing'] = $this->Search_model->get_search_keyword($keyword);
        $data['_view'] = 'landing/search';
        $this->load->view('templates/relish/header', $data);
        $this->load->view('landing/search', $data);
        $this->load->view('templates/relish/footer', $data);
    }

    public function cart()
    {
        $this->load->view('templates/relish/header');
        $this->load->view('cart/index');
        $this->load->view('templates/relish/footer');
    }

    public function menunggu_konfirmasi()
    {
        $this->load->view('templates/relish/header');
        $this->load->view('new_view/menunggu_konfirmasi');
        $this->load->view('templates/relish/footer');
    }
}

/* End of file Landing.php */
/* Location: ./application/controllers/Landing.php */
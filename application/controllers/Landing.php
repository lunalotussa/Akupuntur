<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function index()
    {
        $this->load->view('templates/relish/header');
        $this->load->view('landing/main');
        $this->load->view('templates/relish/footer');
    }

}

/* End of file Landing.php */
/* Location: ./application/controllers/Landing.php */
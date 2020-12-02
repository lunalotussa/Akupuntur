<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    public function index()
    {
            // $this->load->view('templates/pure/header');
            // $this->load->view('login/login');
            // $this->load->view('templates/pure/footer');
            $this->load->view('landing/main');
    }

}

/* End of file Landing.php */
/* Location: ./application/controllers/Landing.php */
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function index()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        //-> cek login
        if (isset($_POST["login"])) {
            $email      = $this->input->post("email");
            $password   = $this->input->post("password");
            $query      = $this->db->query("SELECT * FROM `user` WHERE email = '$email' AND password='$password'");
            //start session
            if ($query->num_rows() > 0) {
                $tmp = $query->result_array();
                $_SESSION['id_user']    = $tmp[0]['id_user'];
                $_SESSION['nama']       = $tmp[0]['nama'];
                $_SESSION['email']      = $tmp[0]['email'];
                $_SESSION['hak_akses']  = $tmp[0]['hak_akses'];
            }
            //end session
        }

        //-> membuat perbedaan tingkat login
        if (isset($_SESSION['id_user'])) {

            redirect('Dashboard');
        } else {
            $this->load->view('templates/pure/header');
            $this->load->view('login/login');
            $this->load->view('templates/pure/footer');
        }
    }

    public function registerTerapis()
    {
        $this->load->view('login/register_terapis');
    }

    public function registerCust()
    {
        $this->load->view('templates/pure/header');
        $this->load->view('login/register_cust');
        $this->load->view('templates/pure/footer');
    }
}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */

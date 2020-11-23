<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
        if(!isset($_SESSION)){
            session_start();
        }
        //-> cek login
        if(isset($_POST["login"])){
            $email      = $this->input->post("email");
            $password   = $this->input->post("password");
            $query      = $this->db->query("SELECT * FROM `user` WHERE email = '$email' AND password='$password'");
            if($query->num_rows() > 0){
                $tmp = $query->result_array();
                $_SESSION['id_user']    = $tmp[0]['id_user'];
                $_SESSION['nama']       = $tmp[0]['nama'];
                $_SESSION['email']      = $tmp[0]['email'];
                $_SESSION['hak_akses']  = $tmp[0]['hak_akses'];
            }else{
            	//-> Informasi password & username tidak cocok
            	$this->session->set_flashdata('info', 'Email & Password tidak cocok!');
            }

        }

        //-> membuat perbedaan tingkat login
        if(isset($_SESSION['id_user'])){

           redirect('Dashboard');
        }

        else{
            $this->load->view('login/login');
        }

	}
    public function register()
    {
        $this->load->view('login/register');
    }

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */

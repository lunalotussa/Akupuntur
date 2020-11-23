<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		 if(!isset($_SESSION)){
            session_start();
        }
        if (!isset($_SESSION['id_user'])) {
        	redirect(base_url());
        }
	}
	public function index()
	{
		$data['nama'] 		= $_SESSION['nama'];
		$data['hak_akses']	= $_SESSION['hak_akses'];
		$data['id_user']	= $_SESSION['id_user'];
		$data['email']		= $_SESSION['email'];
		redirect(base_url('Dashboard/dash'));
	}

	public function logout(){
		session_destroy();
    	redirect(base_url());
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
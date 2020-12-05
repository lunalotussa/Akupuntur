<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION)) {
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
		$data['_view'] = 'dashboard';

		$this->load->view('templates/pure/header');
		$this->load->view('layouts/bulma-dashboard/main', $data);
		$this->load->view('templates/pure/footer');
	}

	public function logout()
	{
		session_destroy();
		redirect(base_url());
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
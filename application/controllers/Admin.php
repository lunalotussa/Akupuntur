<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
         if(!isset($_SESSION)){
            session_start();
        }
        if (!isset($_SESSION['id_user'])) {
            redirect(base_url());
        }
        $this->load->model('Admin_model');
    } 

    /*
     * Listing of admin
     */
    function index()
    {
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        $data['admin'] = $this->Admin_model->get_all_admin();
        
        $data['_view'] = 'admin/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new admin
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_user' => $this->input->post('id_user'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'bank' => $this->input->post('bank'),
				'unit_bank' => $this->input->post('unit_bank'),
				'no_rekening' => $this->input->post('no_rekening'),
				'profile' => $this->input->post('profile'),
            );
            
            $admin_id = $this->Admin_model->add_admin($params);
            redirect('admin/index');
        }
        else
        {            
            $data['_view'] = 'admin/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a admin
     */
    function edit($id_admin)
    {   
        // check if the admin exists before trying to edit it
        $data['admin'] = $this->Admin_model->get_admin($id_admin);
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        
        if(isset($data['admin']['id_admin']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_user' => $this->input->post('id_user'),
					'alamat' => $this->input->post('alamat'),
					'telepon' => $this->input->post('telepon'),
					'bank' => $this->input->post('bank'),
					'unit_bank' => $this->input->post('unit_bank'),
					'no_rekening' => $this->input->post('no_rekening'),
					'profile' => $this->input->post('profile'),
                );

                $this->Admin_model->update_admin($id_admin,$params); 
                $data['_view'] = 'dashboard';
                $this->load->view('layouts/main',$data);        
                // redirect('admin/index');
            }
            else
            {
                $data['_view'] = 'admin/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The admin you are trying to edit does not exist.');
    } 

    /*
     * Deleting admin
     */
    function remove($id_admin)
    {
        $admin = $this->Admin_model->get_admin($id_admin);

        // check if the admin exists before trying to delete it
        if(isset($admin['id_admin']))
        {
            $this->Admin_model->delete_admin($id_admin);
            redirect('admin/index');
        }
        else
            show_error('The admin you are trying to delete does not exist.');
    }
    
}

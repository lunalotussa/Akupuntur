<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Layanan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
         if(!isset($_SESSION)){
            session_start();
        }
        if (!isset($_SESSION['id_user'])) {
            redirect(base_url());
        }
        $this->load->model('Layanan_model');
    } 

    /*
     * Listing of layanan
     */
    function index()
    {
        $data['layanan'] = $this->Layanan_model->get_all_layanan();
        
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        $data['_view'] = 'layanan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new layanan
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'jenis' => $this->input->post('jenis'),
				'nama' => $this->input->post('nama'),
				'durasi' => $this->input->post('durasi'),
				'harga' => $this->input->post('harga'),
            );
            
            $layanan_id = $this->Layanan_model->add_layanan($params);
            redirect('layanan/index');
        }
        else
        {            
            $data['nama']       = $_SESSION['nama'];
            $data['hak_akses']  = $_SESSION['hak_akses'];
            $data['id_user']    = $_SESSION['id_user'];
            $data['email']      = $_SESSION['email'];
            $data['_view'] = 'layanan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a layanan
     */
    function edit($id_layanan)
    {   
        // check if the layanan exists before trying to edit it
        $data['layanan'] = $this->Layanan_model->get_layanan($id_layanan);
        
        if(isset($data['layanan']['id_layanan']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'jenis' => $this->input->post('jenis'),
					'nama' => $this->input->post('nama'),
					'durasi' => $this->input->post('durasi'),
					'harga' => $this->input->post('harga'),
                );

                $this->Layanan_model->update_layanan($id_layanan,$params);            
                redirect('layanan/index');
            }
            else
            {
                $data['nama']       = $_SESSION['nama'];
                $data['hak_akses']  = $_SESSION['hak_akses'];
                $data['id_user']    = $_SESSION['id_user'];
                $data['email']      = $_SESSION['email'];
                $data['_view'] = 'layanan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The layanan you are trying to edit does not exist.');
    } 

    /*
     * Deleting layanan
     */
    function remove($id_layanan)
    {
        $layanan = $this->Layanan_model->get_layanan($id_layanan);

        // check if the layanan exists before trying to delete it
        if(isset($layanan['id_layanan']))
        {
            $this->Layanan_model->delete_layanan($id_layanan);
            redirect('layanan/index');
        }
        else
            show_error('The layanan you are trying to delete does not exist.');
    }
    
}

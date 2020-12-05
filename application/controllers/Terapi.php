<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Terapi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['id_user'])) {
            redirect(base_url());
        }
        $this->load->model('Terapi_model');
        $this->load->library('upload');
    }

    /*
     * Listing of terapis
     */
    function index()
    {
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];
        $data['terapis'] = $this->Terapi_model->get_all_terapis();
        $data['_view'] = 'terapi/index';

        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');
    }

    /*
     * Adding a new terapi
     */
    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $params = array(
                'id_user' => $this->input->post('id_user'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon'),
                'bank' => $this->input->post('bank'),
                'unit_bank' => $this->input->post('unit_bank'),
                'no_rekening' => $this->input->post('no_rekening'),
                'ktp' => $this->input->post('ktp'),
                'selfie_ktp' => $this->input->post('selfie_ktp'),
                'profile' => $this->input->post('profile'),
                'status' => $this->input->post('status'),
            );

            $terapi_id = $this->Terapi_model->add_terapi($params);
            redirect('terapi/index');
        } else {
            $data['_view'] = 'terapi/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a terapi
     */
    function edit($id_terapis)
    {
        // check if the admin exists before trying to edit it
        $data['terapi'] = $this->Terapi_model->get_terapi($id_terapis);
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];

        if (isset($data['terapi']['id_terapis'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $path = './resources/picture/';
                // get foto
                $config['upload_path'] = './resources/picture';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['max_size'] = '2048';  //2MB max
                $config['max_width'] = '4480'; // pixel
                $config['max_height'] = '4480'; // pixel
                $config['file_name'] = $_FILES['profile']['name'];
                $config['file_name'] = $_FILES['selfie_ktp']['name'];
                $config['file_name'] = $_FILES['ktp']['name'];

                $this->upload->initialize($config);

                if (!empty($_FILES['profile']['name']) || !empty($_FILES['ktp']['name']) || !empty($_FILES['selfie_ktp']['name'])) {

                    if ($this->upload->do_upload('profile')) {

                        $foto   = $this->upload->data();
                        $params = array(
                            'id_user' => $this->input->post('id_user'),
                            'alamat' => $this->input->post('alamat'),
                            'telepon' => $this->input->post('telepon'),
                            'bank' => $this->input->post('bank'),
                            'unit_bank' => $this->input->post('unit_bank'),
                            'no_rekening' => $this->input->post('no_rekening'),
                            'ktp' => $this->input->post('ktplama'),
                            'selfie_ktp' => $this->input->post('selfielama'),
                            'profile' => $foto['file_name'],
                            'status' => $this->input->post('status'),
                        );
                        // hapus foto pada direktori
                        @unlink($path . $this->input->post('filelama'));

                        $this->Terapi_model->update_terapi($id_terapis, $params);
                        $data['_view'] = 'dashboard';
                        $this->load->view('layouts/main', $data);
                        redirect('main/index');
                    } elseif ($this->upload->do_upload('selfie_ktp')) {
                        $foto1  = $this->upload->data();
                        $params = array(
                            'id_user' => $this->input->post('id_user'),
                            'alamat' => $this->input->post('alamat'),
                            'telepon' => $this->input->post('telepon'),
                            'bank' => $this->input->post('bank'),
                            'unit_bank' => $this->input->post('unit_bank'),
                            'no_rekening' => $this->input->post('no_rekening'),
                            'ktp' => $this->input->post('ktplama'),
                            'selfie_ktp' => $foto1['file_name'],
                            'profile' => $this->input->post('filelama'),
                            'status' => $this->input->post('status'),
                        );
                        // hapus foto pada direktori
                        @unlink($path . $this->input->post('selfielama'));

                        $this->Terapi_model->update_terapi($id_terapis, $params);
                        $data['_view'] = 'dashboard';
                        $this->load->view('layouts/main', $data);
                        redirect('main/index');
                    } elseif ($this->upload->do_upload('ktp')) {
                        $foto2  = $this->upload->data();
                        $params = array(
                            'id_user' => $this->input->post('id_user'),
                            'alamat' => $this->input->post('alamat'),
                            'telepon' => $this->input->post('telepon'),
                            'bank' => $this->input->post('bank'),
                            'unit_bank' => $this->input->post('unit_bank'),
                            'no_rekening' => $this->input->post('no_rekening'),
                            'ktp' => $foto2['file_name'],
                            'selfie_ktp' => $this->input->post('selfielama'),
                            'profile' => $this->input->post('filelama'),
                            'status' => $this->input->post('status'),
                        );
                        // hapus foto pada direktori
                        @unlink($path . $this->input->post('selfielama'));

                        $this->Terapi_model->update_terapi($id_terapis, $params);
                        $data['_view'] = 'dashboard';

                        $this->load->view('templates/pure/header');
                        $this->load->view('layouts/bulma-dashboard/main', $data);
                        $this->load->view('templates/pure/footer');

                        redirect('main/index');
                    } else {
                        die("gagal update");
                    }
                } else {
                    $params = array(
                        'id_user' => $this->input->post('id_user'),
                        'alamat' => $this->input->post('alamat'),
                        'telepon' => $this->input->post('telepon'),
                        'bank' => $this->input->post('bank'),
                        'unit_bank' => $this->input->post('unit_bank'),
                        'no_rekening' => $this->input->post('no_rekening'),
                        'ktp' => $this->input->post('ktplama'),
                        'selfie_ktp' => $this->input->post('selfielama'),
                        'profile' => $this->input->post('filelama'),
                        'status' => $this->input->post('status'),
                    );

                    $this->Terapi_model->update_terapi($id_terapis, $params);
                    $data['_view'] = 'dashboard';

                    $this->load->view('templates/pure/header');
                    $this->load->view('layouts/bulma-dashboard/main', $data);
                    $this->load->view('templates/pure/footer');
                    redirect('main/index');
                }
            } else {
                $data['_view'] = 'terapi/edit';

                $this->load->view('templates/pure/header');
                $this->load->view('layouts/bulma-dashboard/main', $data);
                $this->load->view('templates/pure/footer');
            }
        } else
            show_error('The terapi you are trying to edit does not exist.');
    }


    /*
     * Deleting terapi
     */
    function remove($id_terapis)
    {
        $terapi = $this->Terapi_model->get_terapi($id_terapis);

        // check if the terapi exists before trying to delete it
        if (isset($terapi['id_terapis'])) {
            $this->Terapi_model->delete_terapi($id_terapis);
            redirect('terapi/index');
        } else
            show_error('The terapi you are trying to delete does not exist.');
    }

    function detail($id_terapis)
    {
        // check if the terapi exists before trying to edit it
        $data['terapi'] = $this->Terapi_model->get_terapi($id_terapis);
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];

        if (isset($data['terapi']['id_terapis'])) {

            $data['_view'] = 'terapi/detail';

            $this->load->view('templates/pure/header');
            $this->load->view('layouts/bulma-dashboard/main', $data);
            $this->load->view('templates/pure/footer');
        } else
            show_error('The terapi you are trying to edit does not exist.');
    }

    function verifikasi($id_terapis)
    {
        // check if the terapi exists before trying to edit it
        $data['terapi'] = $this->Terapi_model->get_terapi($id_terapis);
        $data['nama']       = $_SESSION['nama'];
        $data['hak_akses']  = $_SESSION['hak_akses'];
        $data['id_user']    = $_SESSION['id_user'];
        $data['email']      = $_SESSION['email'];

        if (isset($data['terapi']['id_terapis'])) {
            $params = array(
                'status' => '1',
            );

            $this->Terapi_model->update_verifikasi($id_terapis, $params);
            redirect('terapi/index');
        } else
            show_error('The terapi you are trying to edit does not exist.');
    }
}


    // function edit($id_terapis)
    // {   
    //     // check if the terapi exists before trying to edit it
    //     $data['terapi'] = $this->Terapi_model->get_terapi($id_terapis);
    //     $data['nama']       = $_SESSION['nama'];
    //     $data['hak_akses']  = $_SESSION['hak_akses'];
    //     $data['id_user']    = $_SESSION['id_user'];
    //     $data['email']      = $_SESSION['email'];
        
    //     if(isset($data['terapi']['id_terapis']))
    //     {
    //         if(isset($_POST) && count($_POST) > 0)     
    //         {   
    //             $params = array(
        //  'id_user' => $this->input->post('id_user'),
        //  'alamat' => $this->input->post('alamat'),
        //  'telepon' => $this->input->post('telepon'),
        //  'bank' => $this->input->post('bank'),
        //  'unit_bank' => $this->input->post('unit_bank'),
        //  'no_rekening' => $this->input->post('no_rekening'),
        //  'ktp' => $this->input->post('ktp'),
        //  'selfie_ktp' => $this->input->post('selfie_ktp'),
        //  'profile' => $this->input->post('profile'),
        //  'status' => $this->input->post('status'),
    //             );

    //             $this->Terapi_model->update_terapi($id_terapis,$params);            
    //             $data['_view'] = 'dashboard';
    //             $this->load->view('layouts/main',$data);  
    //         }
    //         else
    //         {
    //             $data['_view'] = 'terapi/edit';
    //             $this->load->view('layouts/main',$data);
    //         }
    //     }
    //     else
    //         show_error('The terapi you are trying to edit does not exist.');
    // } 

<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Layanan extends CI_Controller
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
        $this->load->model('Layanan_model');
        $this->load->library('upload');
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

        $this->load->view('templates/pure/header');
        $this->load->view('layouts/bulma-dashboard/main', $data);
        $this->load->view('templates/pure/footer');
    }

    /*
     * Adding a new layanan
     */
    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
             $path = './resources/picture/layanan';
                // get foto
                $config['upload_path'] = './resources/picture/layanan';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['max_size'] = '40960';  //2MB max
                $config['max_width'] = '60000'; // pixel
                $config['max_height'] = '80000'; // pixel
                $config['file_name'] = $_FILES['gambar']['name'];

                $this->upload->initialize($config);

                if (!empty($_FILES['gambar']['name'])) {
                    if ($this->upload->do_upload('gambar')) {
                        $foto   = $this->upload->data();
                        $params = array(
                            'jenis' => $this->input->post('jenis'),
                            'nama' => $this->input->post('nama'),
                            'durasi' => $this->input->post('durasi'),
                            'harga' => $this->input->post('harga'),
                            'gambar' => $foto['file_name'],
                            'deskripsi' => $this->input->post('deskripsi'),
                        );
                        // hapus foto pada direktori
                        //@unlink($path . $this->input->post('filelama'));

                        $layanan_id = $this->Layanan_model->add_layanan($params);
                        redirect('layanan/index');
                    } else {
                        die("gagal update");
                    }
                }
        } else {
            $data['nama']       = $_SESSION['nama'];
            $data['hak_akses']  = $_SESSION['hak_akses'];
            $data['id_user']    = $_SESSION['id_user'];
            $data['email']      = $_SESSION['email'];
            $data['_view'] = 'layanan/add';

            $this->load->view('templates/pure/header');
            $this->load->view('layouts/bulma-dashboard/main', $data);
            $this->load->view('templates/pure/footer');
        }
    }

    /*
     * Editing a layanan
     */
function edit($id_layanan)
    {
        // check if the layanan exists before trying to edit it
        $data['layanan'] = $this->Layanan_model->get_layanan($id_layanan);

        if (isset($data['layanan']['id_layanan'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $path = './resources/picture/layanan/';
                // get foto
                $config['upload_path'] = './resources/picture/layanan';
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                $config['max_size'] = '2048';  //2MB max
                $config['max_width'] = '8000'; // pixel
                $config['max_height'] = '5000'; // pixel
                $config['file_name'] = $_FILES['gambar']['name'];

                $this->upload->initialize($config);

                if (!empty($_FILES['gambar']['name'])) {
                    if ($this->upload->do_upload('gambar')) {
                        $foto   = $this->upload->data();
                        $params = array(
                            'jenis' => $this->input->post('jenis'),
                            'nama' => $this->input->post('nama'),
                            'durasi' => $this->input->post('durasi'),
                            'harga' => $this->input->post('harga'),
                            'gambar' => $foto['file_name'],
                            'deskripsi' => $this->input->post('deskripsi'),
                        );
                        // hapus foto pada direktori
                        @unlink($path . $this->input->post('filelama'));

                        $this->Layanan_model->update_layanan($id_layanan, $params);
                        redirect('layanan/index');
                    }else {
                        die("gagal update");
                    }
                }else{
                     $params = array(
                        'jenis' => $this->input->post('jenis'),
                        'nama' => $this->input->post('nama'),
                        'durasi' => $this->input->post('durasi'),
                        'harga' => $this->input->post('harga'),
                        'gambar' => $this->input->post('filelama'),
                        'deskripsi' => $this->input->post('deskripsi'),
                    );

                    $this->Layanan_model->update_layanan($id_layanan, $params);
                    $data['_view'] = 'layanan/edit';
                    $this->load->view('templates/pure/header');
                    $this->load->view('layouts/bulma-dashboard/main', $data);
                    $this->load->view('templates/pure/footer');
                    redirect('layanan/index');
                }} else {
                $data['nama']       = $_SESSION['nama'];
                $data['hak_akses']  = $_SESSION['hak_akses'];
                $data['id_user']    = $_SESSION['id_user'];
                $data['email']      = $_SESSION['email'];
                $data['_view'] = 'layanan/edit';

                $this->load->view('templates/pure/header');
                $this->load->view('layouts/bulma-dashboard/main', $data);
                $this->load->view('templates/pure/footer');
            }
        } else
            show_error('The layanan you are trying to edit does not exist.');
    }


    /*
     * Deleting layanan
     */
    function remove($id_layanan)
    {
        $layanan = $this->Layanan_model->get_layanan($id_layanan);

        // check if the layanan exists before trying to delete it
        if (isset($layanan['id_layanan'])) {
            $this->Layanan_model->delete_layanan($id_layanan);
            redirect('layanan/index');
        } else
            show_error('The layanan you are trying to delete does not exist.');
    }
}

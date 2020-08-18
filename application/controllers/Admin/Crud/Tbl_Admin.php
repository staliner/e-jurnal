<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tbl_Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Crud/M_Tbl_Admin', 'M_Tbl_Admin');
    }

    public function index()
    {
        $data['admin'] = $this->M_Tbl_Admin->get_all();
        $this->load->view('layouts/_templates/header');
        $this->load->view('layouts/_templates/navbar');
        $this->load->view('layouts/_templates/sidebar');
        $this->load->view('admin/crud/tbl_admin/index', $data);
        $this->load->view('layouts/_templates/footer');
    }
}

/* End of file Tbl_Admin.php */

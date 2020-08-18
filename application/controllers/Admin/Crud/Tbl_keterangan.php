<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tbl_keterangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Crud/M_Tbl_Keterangan', 'M_Tbl_Keterangan');
    }
    public function index()
    {
        $data['keterangan'] = $this->M_Tbl_Keterangan->get_all();
        $this->load->view('layouts/_templates/header');
        $this->load->view('layouts/_templates/navbar');
        $this->load->view('layouts/_templates/sidebar');
        $this->load->view('admin/crud/tbl_keterangan/index', $data);
        $this->load->view('layouts/_templates/footer');
    }
}

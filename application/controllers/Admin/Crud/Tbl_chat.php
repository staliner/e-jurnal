<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tbl_chat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Crud/M_Tbl_Chat', 'M_Tbl_Chat');
    }
    public function index()
    {
        $data['chat'] = $this->M_Tbl_Chat->get_all();
        $this->load->view('layouts/_templates/header');
        $this->load->view('layouts/_templates/navbar');
        $this->load->view('layouts/_templates/sidebar');
        $this->load->view('admin/crud/tbl_Chat/index', $data);
        $this->load->view('layouts/_templates/footer');
    }
    public function hapus($id)
    {
        $this->M_Tbl_Chat->hapus($id);
        $this->session->set_flashdata('message', ' <script>alert("DATA BERHASIL DIIHAPUS");</script>');
        redirect('Admin/Crud/Tbl_chat');
    }
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tbl_Absen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/Crud/M_Tbl_Absen', 'M_Tbl_Absen');
    }

    public function index()
    {
        $data['absen'] = $this->M_Tbl_Absen->get_all();
        $this->load->view('layouts/_templates/header');
        $this->load->view('layouts/_templates/navbar');
        $this->load->view('layouts/_templates/sidebar');
        $this->load->view('admin/crud/tbl_absen/index', $data);
        $this->load->view('layouts/_templates/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('siswa_id', 'SISWA_ID', 'required');
        $this->form_validation->set_rules('keterangan_id', 'KETERANGAN_ID', 'required');

        if ($this->form_validation->run() ==  FALSE) {

            $this->load->view('layouts/_templates/header');
            $this->load->view('layouts/_templates/navbar');
            $this->load->view('layouts/_templates/sidebar');
            $this->load->view('admin/crud/tbl_absen/tambah');
            $this->load->view('layouts/_templates/footer');
        } else {
            $data = [
                'siswa_id' => $this->input->post('siswa_id'),
                'keterangan_id' => $this->input->post('keterangan_id'),
            ];
            $this->db->insert('tbl_absen', $data);
            $this->session->set_flashdata('message', ' <script>alert("DATA Berhasil ditambahkan");</script>');
            redirect('Admin/Crud/Tbl_Absen');
        }
    }
    public function ubah($id)
    {
        $this->form_validation->set_rules('siswa_id', 'SISWA_ID', 'required');
        $this->form_validation->set_rules('keterangan_id', 'KETERANGAN_ID', 'required');

        if ($this->form_validation->run() ==  FALSE) {

            $this->load->view('layouts/_templates/header');
            $this->load->view('layouts/_templates/navbar');
            $this->load->view('layouts/_templates/sidebar');
            $this->load->view('admin/crud/tbl_absen/ubah');
            $this->load->view('layouts/_templates/footer');
        } else {
            $data = [
                'siswa_id' => $this->input->post('siswa_id'),
                'keterangan_id' => $this->input->post('keterangan_id'),
            ];
            $this->db->where('id_absen', $id);
            $this->db->update('tbl_absen', $data);
            $this->session->set_flashdata('message', ' <script>alert("DATA BERHASIL DIITAMBAHKAN");</script>');
            redirect('Admin/Crud/Tbl_Absen');
        }
    }
    public function hapus($id)
    {
        $this->M_Tbl_Absen->hapus($id);
        $this->session->set_flashdata('message', ' <script>alert("DATA BERHASIL DIIHAPUS");</script>');
        redirect('Admin/Crud/Tbl_Absen');
    }
}

/* End of file Tbl_Absen.php */

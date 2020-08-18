<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Tbl_Absen extends CI_Model
{

    public function get_all()
    {
        return $this->db->query("SELECT tbl_siswa.*,tbl_absen.*,tbl_keterangan.* 
                                 FROM tbl_siswa,tbl_absen,tbl_keterangan 
                                   WHERE tbl_siswa.id_siswa=tbl_absen.siswa_id AND tbl_keterangan.id_keterangan=tbl_absen.keterangan_id ")->result_array();
    }
    public function hapus($id)
    {
        $this->db->delete('tbl_absen', ['id_absen' => $id]);
    }
}

/* End of file M_Tbl_Absen.php */

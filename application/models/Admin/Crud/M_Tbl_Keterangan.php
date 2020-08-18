<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Tbl_Keterangan extends CI_Model
{
    public function get_all()
    {
        return $this->db->query("SELECT * FROM tbl_keterangan")->result_array();;
    }
}

/* End of file ModelName.php */

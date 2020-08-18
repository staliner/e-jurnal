<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Tbl_Admin extends CI_Model
{

    public function get_all()
    {
        return $this->db->query("SELECT tbl_user.*,tbl_kontak.*,tbl_admin.*
         FROM tbl_user,tbl_kontak,tbl_admin WHERE 
         tbl_user.id_user=tbl_admin.user_id AND tbl_kontak.id_kontak=tbl_admin.user_id
        ")->result_array();
    }
}

/* End of file M_Tbl_Admin.php */

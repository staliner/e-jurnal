<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Tbl_Access_Menu extends CI_Model
{

    public function get_all()
    {
        return $this->db->query("SELECT tbl_role.*,tbl_menu.*,tbl_access_menu.* 
        FROM tbl_role,tbl_menu,tbl_access_menu WHERE 
        tbl_role.id_role=tbl_access_menu.role_id 
        AND tbl_menu.id_menu=tbl_access_menu.menu_id
        
        ")->result_array();
    }
}

/* End of file M_Tbl_Access_Menu.php */

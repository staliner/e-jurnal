<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Tbl_Chat extends CI_Model
{

    public function get_all()
    {
        return $this->db->query("SELECT tbl_chat.*,tbl_user.username FROM tbl_chat JOIN tbl_user
         ON tbl_chat.user_id=tbl_user.id_user ORDER BY tbl_chat.created_at DESC")->result_array();
    }
    public function hapus($id)
    {
        $this->db->delete('tbl_chat', ['id_chat' => $id]);
    }
}

/* End of file ModelName.php */

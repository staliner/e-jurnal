<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Forgot_Password extends CI_Model {
     
     public function doForgotPassword(){
     	$email = $this->input->post('email');
     }
	

}

/* End of file M_Forgot_Password.php */
/* Location: ./application/models/Auth/M_Forgot_Password.php */

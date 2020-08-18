<?php 

if (!function_exists()) {
	function sendEmail($message='')
	{
		$CI=get_instance();
		$email = 'nurhayy.46@gmail.com';
		$tomail = $CI->input->post('email');
		$config  = array('protocol' => 'smtp', 
						 'smtp_host' => 'ssl://smtp.googlemail.com',
						 'smtp_port' => 465,
						 'smtp_user' => $email,
						 'smtp_pass' => 'imas123',
						 'charset' => 'utf-8',
						 'newline' => "\r\n",
						);
		$CI->load->library('email',$config);
		$CI->email->set_mailtype('html');
		$CI->email->from($email,'E-jurnal');
		$CI->email->to($tomail);
		$CI->email->subject('Test Kirim Email E-Jurnal');
		$CI->email->message('Test Forgot Password Via Gmail E-Jurnal');	
		if ($CI->email->send()) {
			return TRUE;
		}else{
			$CI->email->print_debugger();
		}
	}
}
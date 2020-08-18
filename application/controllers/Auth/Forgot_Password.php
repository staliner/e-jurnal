<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot_Password extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('email');
	}

	public function index()
	{
		if ($this->form_validation->run($this->_forgotPasswordValidate()) == FALSE) {
			$data['judul'] = 'Forgot_Password';
			$this->load->view('auth/forgot-password');
		} else {
			sendEmail();
		}
	}

	private function _forgotPasswordValidate()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
			'valid_email' => 'Email tidak valid',
			'required'  => 'Email tidak boleh kosong'
		]);
	}
}

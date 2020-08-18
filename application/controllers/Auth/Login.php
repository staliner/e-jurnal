<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{

		$data['judul'] = "Login";
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|required|valid_email',
			[
				'valid_email' => 'Email Tidak Valid',
				'required' => 'Email Harus diisi..!'
			]
		);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/template_login/header', $data);
			$this->load->view('auth/login', $data);
			$this->load->view('auth/template_login/footer', $data);
		} else {
			$this->prosesLogin();
		}
	}
	protected function prosesLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
		if ($user) {
			if (password_verify($password, $user['password'])) {
				$authorize = $this->db->get_where('tbl_role', ['id_role' => $user['role_id']])->row_array();
				if ($authorize['id_role'] == $user['role_id']) {
					redirect($authorize['redirect']);
				} else {
					redirect('login');
				}
			} else {
				redirect('login');
			}
		} else {
			redirect('login');
		}
	}
}

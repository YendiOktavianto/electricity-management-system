<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi_login extends CI_Controller {

	public function index()
	{
		$username 	= $this->input->post('username');
		$pass	  	= $this->input->post('password');
		$password 	= md5($pass);

		$this->form_validation->set_rules('username','Username','required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('password','Password','required|min_length[4]|max_length[40]');

		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error','Username / Password Salah!');
			redirect(base_url('login'));
		} 
		else {
			$data = $this->mymodel->Cek_Login($username,$password);
			if($data > 0) {
				$sessionData = 'username';
				switch ($username) {
						case 'ADMIN ETS':
						case 'USER ETS':
						case 'ADMIN OPM WISE OFFICE':
						case 'OPM WISE OFFICE':
								$this->session->set_userdata($sessionData, $username);
								break;
				}
				redirect(base_url('home'));
			} else {
				$this->session->set_flashdata('error','Username / Password Salah!');
				redirect(base_url('login'));
			}
		}

	}

	public function admin()
	{
		$pass	  	= $this->input->post('password');
		$repass	  	= $this->input->post('re_password');
		$password 	= md5($pass);

		$this->form_validation->set_rules('password','Password','required|min_length[4]|max_length[40]');
		$this->form_validation->set_rules('re_password','Re_Password','required|min_length[4]|max_length[40]');

		if($pass!==$repass) {
			$this->session->set_flashdata('notif','Password Tidak Sesuai!');
			redirect(base_url('home/setting'));
		} else {
			if($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('notif','Password Gagal Terupdate!');
				redirect(base_url('home/setting'));
			} else {
				$isi = array ('pass' 	=> $password,
							  'repass' 	=> $repass);
				$data = $this->mymodel->UpdateDB('tb_login',$isi,array('id' => 'ADMIN ETS'));
				if($data > 0) {
					$this->session->set_flashdata('notif','Password Berhasil Terupdate!');
					redirect(base_url('home/setting'));
				} else {
					$this->session->set_flashdata('notif','Password Gagal Terupdate!');
					redirect(base_url('home/setting'));
				}
			}
		}

	}

	public function user()
	{
		$pass	  	= $this->input->post('password');
		$repass	  	= $this->input->post('re_password');
		$password 	= md5($pass);

		$this->form_validation->set_rules('password','Password','required|min_length[4]|max_length[40]');
		$this->form_validation->set_rules('re_password','Re_Password','required|min_length[4]|max_length[40]');

		if($pass!==$repass) {
			$this->session->set_flashdata('notif2','Password Tidak Sesuai!');
			redirect(base_url('home/setting'));
		} else {
			if($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('notif2','Password Gagal Terupdate!');
				redirect(base_url('home/setting'));
			} else {
				$isi = array ('pass' 	=> $password,
							  'repass' 	=> $repass);
				$data = $this->mymodel->UpdateDB('tb_login',$isi,array('id' => 'USER ETS'));
				if($data > 0) {
					$this->session->set_flashdata('notif2','Password Berhasil Terupdate!');
					redirect(base_url('home/setting'));
				} else {
					$this->session->set_flashdata('notif2','Password Gagal Terupdate!');
					redirect(base_url('home/setting'));
				}
			}
		}

	}

	public function email()
	{
		$email = $this->input->post('email');
		$isi = array ('email' 	=> $email);
		$data = $this->mymodel->UpdateDB('tb_email',$isi,array('id' => 'email'));
		if($data) {
			$this->session->set_flashdata('notif3','Email Berhasil Diperbarui!');
			redirect(base_url('home/setting'));
		} else {
			$this->session->set_flashdata('notif3','Email Gagal Diperbarui!');
			redirect(base_url('home/setting'));
		}
	}
}

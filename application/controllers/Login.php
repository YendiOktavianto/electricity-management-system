<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('username') == "Admin") {
			redirect('home');
		}
	}

	public function index()
	{
		$this->load->view('login');
	}
}

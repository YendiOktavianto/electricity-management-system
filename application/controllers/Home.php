<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('username')) {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function setting()
	{
        $all_users = $this->mymodel->getAllUsersFromLogin(); // Anda perlu membuat fungsi ini di model Anda

        // Jika username saat ini tidak ada di dalam daftar user yang valid, redirect ke halaman login
        if (!in_array($this->session->userdata('username'), $all_users)) {
            redirect('login');
        } else {
            $data = $this->mymodel->WhereDB1('tb_email','id','email');
            $data1 = array('email' => $data[0]['email']);
            $this->load->view('menu_setting', $data1);
        }
	}

	public function control()
	{
		$this->load->view('menu_control');
	}

	public function voltage()
	{
		$this->load->view('menu_voltage');
	}

	public function current()
	{
		$this->load->view('menu_current');
	}

	public function ground()
	{
		$this->load->view('menu_ground');
	}

	public function frequency()
	{
		$this->load->view('menu_frequency');
	}

	public function temperature()
	{
		$this->load->view('menu_temperature');
	}

	public function energy()
	{
		$this->load->view('menu_energy');
	}

	public function cosphi()
	{
		$this->load->view('menu_cosphi');
	}

	public function thdv()
	{
		$this->load->view('menu_thdv');
	}

	public function thdi()
	{
		$this->load->view('menu_thdi');
	}

	public function alarm_logger()
	{
		$this->load->view('alarm_logger');
	}

	public function database_logger()
	{
		$this->load->view('database_logger');
	}

	public function sd_card_logger()
	{
		$this->load->view('sd_card_logger');
	}

}

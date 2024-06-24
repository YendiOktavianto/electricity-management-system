<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cleardata extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('username') != "Admin") {
			redirect('login');
		}
	}

	public function table_alarm()
	{
		$hasil=$this->db->truncate("tb_logger_alarm");
		redirect('home/alarm_logger');
	}

	public function table_gnd_input()
	{
		$hasil=$this->db->truncate("tb_logger_gnd_input");
		redirect('home/database_logger');
	}

	public function table_gnd_output()
	{
		$hasil=$this->db->truncate("tb_logger_gnd_output");
		redirect('home/database_logger');
	}

	public function table_pm_input()
	{
		$hasil=$this->db->truncate("tb_logger_pm_input");
		redirect('home/database_logger');
	}

	public function table_pm_output()
	{
		$hasil=$this->db->truncate("tb_logger_pm_output");
		redirect('home/database_logger');
	}

	public function table_temperature()
	{
		$hasil=$this->db->truncate("tb_logger_suhu");
		redirect('home/database_logger');
	}

}

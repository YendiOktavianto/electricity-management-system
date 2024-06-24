<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logger extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function alarm()
	{
		$hasil=$this->db->query("SELECT * FROM tb_logger_alarm order by date_time desc limit 10");
        $data = $hasil->result_array();
        //echo json_encode($data);
        $results = array(
		"sEcho" => 1,
		"iTotalRecords" => count($data),
		"iTotalDisplayRecords" => count($data),
		"aaData" => $data
		);
		echo json_encode($results);	
	}

	public function logger_alarm_voltage()
	{
		$hasil=$this->db->query("SELECT * FROM tb_logger_alarm WHERE name = 'Voltage' order by date_time desc");
        $data = $hasil->result_array();
        //echo json_encode($data);
        $results = array(
		"sEcho" => 1,
		"iTotalRecords" => count($data),
		"iTotalDisplayRecords" => count($data),
		"aaData" => $data
		);
		echo json_encode($results);
	}

	public function logger_alarm_temperature()
	{
		$hasil=$this->db->query("SELECT * FROM tb_logger_alarm WHERE name = 'Temperature' order by date_time desc");
        $data = $hasil->result_array();
        //echo json_encode($data);
        $results = array(
		"sEcho" => 1,
		"iTotalRecords" => count($data),
		"iTotalDisplayRecords" => count($data),
		"aaData" => $data
		);
		echo json_encode($results);
	}

	public function logger_pm_input()
	{
    $draw = $this->input->get('draw');
    $start = $this->input->get('start', TRUE);
    $length = $this->input->get('length', TRUE);
    $last_id_pm_in = $this->input->get('last_id_pm_in', TRUE);

    $query = "SELECT * FROM tb_logger_pm_input WHERE id > ? ORDER BY id DESC LIMIT ?, ?";
    $data = $this->db->query($query, array($last_id_pm_in, intval($start), intval($length)))->result_array();

		$recordsTotal = $this->db->count_all('tb_logger_pm_input');

		$results = array(
			"draw" => intval($draw),
			"recordsTotal" => intval($recordsTotal),
			"recordsFiltered" => intval($recordsTotal),
			"data" => $data
		);

    echo json_encode($results);
	}

	public function logger_pm_output() {
    $draw = $this->input->get('draw');
    $start = $this->input->get('start', TRUE);
    $length = $this->input->get('length', TRUE);
    $last_id_pm_out = $this->input->get('last_id_pm_out', TRUE);

    $query = "SELECT * FROM tb_logger_pm_output WHERE id > ? ORDER BY id DESC LIMIT ?, ?";
    $data = $this->db->query($query, array($last_id_pm_out, intval($start), intval($length)))->result_array();

		$recordsTotal = $this->db->count_all('tb_logger_pm_output');

		$results = array(
			"draw" => intval($draw),
			"recordsTotal" => intval($recordsTotal),
			"recordsFiltered" => intval($recordsTotal),
			"data" => $data
		);

    echo json_encode($results);
	}


	public function logger_gnd_input()
	{
    $draw = $this->input->get('draw');
    $start = $this->input->get('start', TRUE);
    $length = $this->input->get('length', TRUE);
    $last_id_gnd_in = $this->input->get('last_id_gnd_in', TRUE);

    $query = "SELECT * FROM tb_logger_gnd_input WHERE id > ? ORDER BY id DESC LIMIT ?, ?";
    $data = $this->db->query($query, array($last_id_gnd_in, intval($start), intval($length)))->result_array();

		$recordsTotal = $this->db->count_all('tb_logger_gnd_input');

		$results = array(
			"draw" => intval($draw),
			"recordsTotal" => intval($recordsTotal),
			"recordsFiltered" => intval($recordsTotal),
			"data" => $data
		);

    echo json_encode($results);
	}

	public function logger_gnd_output()
	{
    $draw = $this->input->get('draw');
    $start = $this->input->get('start', TRUE);
    $length = $this->input->get('length', TRUE);
    $last_id_gnd_out = $this->input->get('last_id_gnd_out', TRUE);

    $query = "SELECT * FROM tb_logger_gnd_output WHERE id > ? ORDER BY id DESC LIMIT ?, ?";
    $data = $this->db->query($query, array($last_id_gnd_out, intval($start), intval($length)))->result_array();

		$recordsTotal = $this->db->count_all('tb_logger_gnd_output');

		$results = array(
			"draw" => intval($draw),
			"recordsTotal" => intval($recordsTotal),
			"recordsFiltered" => intval($recordsTotal),
			"data" => $data
		);

    echo json_encode($results);
	}

	public function logger_suhu()
	{
    $draw = $this->input->get('draw');
    $start = $this->input->get('start', TRUE);
    $length = $this->input->get('length', TRUE);
    $last_id_temp = $this->input->get('last_id_temp', TRUE);

    $query = "SELECT * FROM tb_logger_suhu WHERE id > ? ORDER BY id DESC LIMIT ?, ?";
    $data = $this->db->query($query, array($last_id_temp, intval($start), intval($length)))->result_array();

		$recordsTotal = $this->db->count_all('tb_logger_suhu');

		$results = array(
			"draw" => intval($draw),
			"recordsTotal" => intval($recordsTotal),
			"recordsFiltered" => intval($recordsTotal),
			"data" => $data
		);

    echo json_encode($results);
	}
}

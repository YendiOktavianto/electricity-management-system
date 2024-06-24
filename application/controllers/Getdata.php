<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getdata extends CI_Controller {

	public function output()
	{
		$data1 = $this->mymodel->WhereDB2('tb_control','id','output');
		$value1 = $data1[0]['output1'];
		$value2 = $data1[0]['output2'];
		$value3 = $data1[0]['output3'];
		$value4 = $data1[0]['output4'];
		echo $value1."A".$value2."B".$value3."C".$value4."D";
	}

	public function outputPowerMute()
	{
		$data1 = $this->mymodel->WhereDB2('tb_control','id','output');
		$value1 = $data1[0]['power'];
		$value2 = $data1[0]['mute'];
		echo $value1."A".$value2."B";
	}

	public function output_json()
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime = date('Y-m-d').' '.date('H:i:s');
		$data2 = $this->mymodel->UpdateDB('tb_status',array('date_time' => $datetime),array('device' => 'control'));

		$data1 = $this->mymodel->WhereDB2('tb_control','id','output');
		$value1 = $data1[0]['output1'];
		$value2 = $data1[0]['output2'];
		$value3 = $data1[0]['output3'];
		$value4 = $data1[0]['output4'];
		$arr = array('out1'	=>	$value1,
					 'out2'	=>	$value2,
					 'out3'	=>	$value3,
					 'out4'	=>	$value4);
		echo json_encode($arr);
	}
	
	public function device_status()
	{
		$data1 = $this->mymodel->WhereDB1('tb_status','device','control');
		$data2 = $this->mymodel->WhereDB1('tb_status','device','gnd_input');
		$data3 = $this->mymodel->WhereDB1('tb_status','device','gnd_output');
		$data4 = $this->mymodel->WhereDB1('tb_status','device','pm_input');
		$data5 = $this->mymodel->WhereDB1('tb_status','device','pm_output');
		$data6 = $this->mymodel->WhereDB1('tb_status','device','temperature');
		$value1 = $data1[0]['date_time'];
		$value2 = $data2[0]['date_time'];
		$value3 = $data3[0]['date_time'];
		$value4 = $data4[0]['date_time'];
		$value5 = $data5[0]['date_time'];
		$value6 = $data6[0]['date_time'];
		echo $value1."A".$value2."B".$value3."C".$value4."D".$value5."E".$value6."F";
	}

	public function energy2()
	{
		$data1 = $this->mymodel->WhereDB2('tb_power_meter','id','input');
		$value1 = $data1[0]['kwh_r'];
		$value2 = $data1[0]['kwh_s'];
		$value3 = $data1[0]['kwh_t'];
		$value4 = $data1[0]['kwh_total'];
		$value5 = $data1[0]['kvarh_r'];
		$value6 = $data1[0]['kvarh_s'];
		$value7 = $data1[0]['kvarh_t'];
		$value8 = $data1[0]['kvarh_total'];
		$data2 = $this->mymodel->WhereDB2('tb_power_meter','id','output');
		$value9 = $data2[0]['kwh_r'];
		$value10 = $data2[0]['kwh_s'];
		$value11 = $data2[0]['kwh_t'];
		$value12 = $data2[0]['kwh_total'];
		$value13 = $data2[0]['kvarh_r'];
		$value14 = $data2[0]['kvarh_s'];
		$value15 = $data2[0]['kvarh_t'];
		$value16 = $data2[0]['kvarh_total'];
		echo $value1."A".$value2."B".$value3."C".$value4."D".$value5."E".$value6."F".$value7."G".$value8."H".$value9."I".$value10."J".$value11."K".$value12."L".$value13."M".$value14."N".$value15."O".$value16."P";
	}

	public function voltage()
	{
		$data1 	= $this->mymodel->WhereDB2('tb_power_meter','id','input');
		$value1 = $data1[0]['v_rs'];
		$value2 = $data1[0]['v_st'];
		$value3 = $data1[0]['v_rt'];
		$value4 = $data1[0]['v_rn'];
		$value5 = $data1[0]['v_sn'];
		$value6 = $data1[0]['v_tn'];
		$data2 	= $this->mymodel->WhereDB2('tb_power_meter','id','output');
		$value7 = $data2[0]['v_rs'];
		$value8 = $data2[0]['v_st'];
		$value9 = $data2[0]['v_rt'];
		$value10 = $data2[0]['v_rn'];
		$value11 = $data2[0]['v_sn'];
		$value12 = $data2[0]['v_tn'];
		echo $value1."A".$value2."B".$value3."C".$value4."D".$value5."E".$value6."F".$value7."G".$value8."H".$value9."I".$value10."J".$value11."K".$value12."L";
	}

	public function current()
	{
		$data1 	= $this->mymodel->WhereDB2('tb_power_meter','id','input');
		$value1 = $data1[0]['i_r'];
		$value2 = $data1[0]['i_s'];
		$value3 = $data1[0]['i_t'];
		$data2 	= $this->mymodel->WhereDB2('tb_power_meter','id','output');
		$value4 = $data2[0]['i_r'];
		$value5 = $data2[0]['i_s'];
		$value6 = $data2[0]['i_t'];
		echo $value1."A".$value2."B".$value3."C".$value4."D".$value5."E".$value6."F";
	}

	public function ground()
	{
		$data1 	= $this->mymodel->WhereDB2('tb_gnd_meter','id','input');
		$value1 = $data1[0]['voltage'];
		$data2 	= $this->mymodel->WhereDB2('tb_gnd_meter','id','output');
		$value2 = $data2[0]['voltage'];
		echo $value1."A".$value2."B";
	}

	public function frequency()
	{
		$data1 	= $this->mymodel->WhereDB2('tb_power_meter','id','input');
		$value1 = $data1[0]['freq'];
		$data2 	= $this->mymodel->WhereDB2('tb_power_meter','id','output');
		$value2 = $data2[0]['freq'];
		echo $value1."A".$value2."B";
	}

	public function temperature()
	{
		$data1 	= $this->mymodel->WhereDB2('tb_suhu','id','pt100');
		$value1 = $data1[0]['temp1'];
		$value2 = $data1[0]['temp2'];
		$value3 = $data1[0]['temp3'];
		echo $value1."A".$value2."B".$value3."C";
	}

	public function cosphi()
	{
		$data1 	= $this->mymodel->WhereDB2('tb_power_meter','id','input');
		$value1 = $data1[0]['cosphi'];
		$data2 	= $this->mymodel->WhereDB2('tb_power_meter','id','output');
		$value2 = $data2[0]['cosphi'];
		echo $value1."A".$value2."B";
	}

	public function thdv()
	{
		$data1 	= $this->mymodel->WhereDB2('tb_power_meter','id','input');
		$value1 = $data1[0]['thdv_rs'];
		$value2 = $data1[0]['thdv_st'];
		$value3 = $data1[0]['thdv_rt'];
		$value4 = $data1[0]['thdv_rn'];
		$value5 = $data1[0]['thdv_sn'];
		$value6 = $data1[0]['thdv_tn'];
		$data2 	= $this->mymodel->WhereDB2('tb_power_meter','id','output');
		$value7 = $data2[0]['thdv_rs'];
		$value8 = $data2[0]['thdv_st'];
		$value9 = $data2[0]['thdv_rt'];
		$value10 = $data2[0]['thdv_rn'];
		$value11 = $data2[0]['thdv_sn'];
		$value12 = $data2[0]['thdv_tn'];
		echo $value1."A".$value2."B".$value3."C".$value4."D".$value5."E".$value6."F".$value7."G".$value8."H".$value9."I".$value10."J".$value11."K".$value12."L";
	}

	public function thdi()
	{
		$data1 	= $this->mymodel->WhereDB2('tb_power_meter','id','input');
		$value1 = $data1[0]['thdi_r'];
		$value2 = $data1[0]['thdi_s'];
		$value3 = $data1[0]['thdi_t'];
		$data2 	= $this->mymodel->WhereDB2('tb_power_meter','id','output');
		$value4 = $data2[0]['thdi_r'];
		$value5 = $data2[0]['thdi_s'];
		$value6 = $data2[0]['thdi_t'];
		echo $value1."A".$value2."B".$value3."C".$value4."D".$value5."E".$value6."F";
	}
}

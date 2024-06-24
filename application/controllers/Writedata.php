<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Writedata extends CI_Controller {

	public function output($id,$value) 
	{
		$isi1 = array($id => $value);
		$data1 = $this->mymodel->UpdateDB('tb_control',$isi1,array('id' => 'output'));
		if($data1==1) {
			echo "OK";
		} else {
			echo "ERROR";
		}
	}

	public function ip($id,$value) 
	{
		$isi1 = array($id => $value);
		$data1 = $this->mymodel->UpdateDB('tb_ip',$isi1,array('id' => '1'));
		if($data1==1) {
			echo "OK";
		} else {
			echo "ERROR";
		}
	}

	public function output_all($v1,$v2,$v3,$v4) 
	{
		$isi1 = array('output1' => $v1,
					  'output2' => $v2,
					  'output3' => $v3,
					  'output4' => $v4);
		$data1 = $this->mymodel->UpdateDB('tb_control',$isi1,array('id' => 'output'));
		if($data1==1) {
			echo "OK";
		} else {
			echo "ERROR";
		}
	}

	public function suhu($suhu1,$suhu2,$suhu3,$logger) 
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime = date('Y-m-d').' '.date('H:i:s');
		$data3 = $this->mymodel->UpdateDB('tb_status',array('date_time' => $datetime),array('device' => 'temperature'));
		if($logger==1) {
			$isi1 = array('temp1' => $suhu1,
						  'temp2' => $suhu2,
						  'temp3' => $suhu3);
			$isi2 = array('date_time' => $datetime,
						  'temp1' => $suhu1,
						  'temp2' => $suhu2,
						  'temp3' => $suhu3);
			$data1 = $this->mymodel->UpdateDB('tb_suhu',$isi1,array('id' => 'pt100'));
			$data2 = $this->mymodel->InsertDB('tb_logger_suhu',$isi2);
			if($data1==1 && $data2==1) {
				echo "OK";
			} else {
				echo "ERROR";
			}
		} else {
			$isi1 = array('temp1' => $suhu1,
						  'temp2' => $suhu2,
						  'temp3' => $suhu3);
			$data1 = $this->mymodel->UpdateDB('tb_suhu',$isi1,array('id' => 'pt100'));
			if($data1==1) {
				echo "OK";
			} else {
				echo "ERROR";
			}
		}
			
	}

	public function check_last_data_suhu(){
		date_default_timezone_set('Asia/Jakarta');
		$lastData = $this->mymodel->WhereDB1('tb_status','device','temperature');
		$lastDateTimeValue = $lastData[0]['date_time'];
		$lastDateTime = strtotime($lastDateTimeValue);
		$currentDateTime = time();

		if($currentDateTime - $lastDateTime > 30){
			echo "OFFLINE";
		} else if($currentDateTime - $lastDateTime > 10){
			echo "TRANSMIT";
		} else {
			echo "ONLINE";
		}
	}

	public function pm_in($ir,$is,$it,$vrs,$vst,$vrt,$vrn,$vsn,$vtn,$pf,$hz,$thdi_r,$thdi_s,$thdi_t,$thdv_rs,$thdv_st,$thdv_rt,$thdv_rn,$thdv_sn,$thdv_tn,$kwh_r,$kwh_s,$kwh_t,$kwh_total,$kvarh_r,$kvarh_s,$kvarh_t,$kvarh_total,$logger) 
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime = date('Y-m-d').' '.date('H:i:s');
		$data3 = $this->mymodel->UpdateDB('tb_status',array('date_time' => $datetime),array('device' => 'pm_input'));
		if($logger==1) {
			$isi1 = array('i_r' 		=> $ir,
						  'i_s' 		=> $is,
						  'i_t' 		=> $it,
						  'v_rs' 		=> $vrs,
						  'v_st' 		=> $vst,
						  'v_rt' 		=> $vrt,
						  'v_rn' 		=> $vrn,
						  'v_sn' 		=> $vsn,
						  'v_tn' 		=> $vtn,
						  'cosphi' 		=> $pf,
						  'freq' 		=> $hz,
						  'thdi_r' 		=> $thdi_r,
						  'thdi_s' 		=> $thdi_s,
						  'thdi_t' 		=> $thdi_t,
						  'thdv_rs' 	=> $thdv_rs,
						  'thdv_st' 	=> $thdv_st,
						  'thdv_rt' 	=> $thdv_rt,
						  'thdv_rn' 	=> $thdv_rn,
						  'thdv_sn' 	=> $thdv_sn,
						  'thdv_tn' 	=> $thdv_tn,
						  'kwh_r' 		=> $kwh_r,
						  'kwh_s' 		=> $kwh_s,
						  'kwh_t' 		=> $kwh_t,
						  'kwh_total' 	=> $kwh_total,
						  'kvarh_r' 	=> $kvarh_r,
						  'kvarh_s' 	=> $kvarh_s,
						  'kvarh_t' 	=> $kvarh_t,
						  'kvarh_total' => $kvarh_total);
			$isi2 = array('date_time' 	=> $datetime,
						  'i_r' 		=> $ir,
						  'i_s' 		=> $is,
						  'i_t' 		=> $it,
						  'v_rs' 		=> $vrs,
						  'v_st' 		=> $vst,
						  'v_rt' 		=> $vrt,
						  'v_rn' 		=> $vrn,
						  'v_sn' 		=> $vsn,
						  'v_tn' 		=> $vtn,
						  'cosphi' 		=> $pf,
						  'freq' 		=> $hz,
						  'thdi_r' 		=> $thdi_r,
						  'thdi_s' 		=> $thdi_s,
						  'thdi_t' 		=> $thdi_t,
						  'thdv_rs' 	=> $thdv_rs,
						  'thdv_st' 	=> $thdv_st,
						  'thdv_rt' 	=> $thdv_rt,
						  'thdv_rn' 	=> $thdv_rn,
						  'thdv_sn' 	=> $thdv_sn,
						  'thdv_tn' 	=> $thdv_tn,
						  'kwh_r' 		=> $kwh_r,
						  'kwh_s' 		=> $kwh_s,
						  'kwh_t' 		=> $kwh_t,
						  'kwh_total' 	=> $kwh_total,
						  'kvarh_r' 	=> $kvarh_r,
						  'kvarh_s' 	=> $kvarh_s,
						  'kvarh_t' 	=> $kvarh_t,
						  'kvarh_total' => $kvarh_total,
						  'status' => "ONLINE");
			$data1 = $this->mymodel->UpdateDB('tb_power_meter',$isi1,array('id' => 'input'));
			$data2 = $this->mymodel->InsertDB('tb_logger_pm_input',$isi2);
			if($data1==1 && $data2==1) {
				echo "OK";
			} else {
				echo "ERROR";
			}
		} else {
			$isi1 = array('i_r' 		=> $ir,
						  'i_s' 		=> $is,
						  'i_t' 		=> $it,
						  'v_rs' 		=> $vrs,
						  'v_st' 		=> $vst,
						  'v_rt' 		=> $vrt,
						  'v_rn' 		=> $vrn,
						  'v_sn' 		=> $vsn,
						  'v_tn' 		=> $vtn,
						  'cosphi' 		=> $pf,
						  'freq' 		=> $hz,
						  'thdi_r' 		=> $thdi_r,
						  'thdi_s' 		=> $thdi_s,
						  'thdi_t' 		=> $thdi_t,
						  'thdv_rs' 	=> $thdv_rs,
						  'thdv_st' 	=> $thdv_st,
						  'thdv_rt' 	=> $thdv_rt,
						  'thdv_rn' 	=> $thdv_rn,
						  'thdv_sn' 	=> $thdv_sn,
						  'thdv_tn' 	=> $thdv_tn,
						  'kwh_r' 		=> $kwh_r,
						  'kwh_s' 		=> $kwh_s,
						  'kwh_t' 		=> $kwh_t,
						  'kwh_total' 	=> $kwh_total,
						  'kvarh_r' 	=> $kvarh_r,
						  'kvarh_s' 	=> $kvarh_s,
						  'kvarh_t' 	=> $kvarh_t,
						  'kvarh_total' => $kvarh_total);
			$data1 = $this->mymodel->UpdateDB('tb_power_meter',$isi1,array('id' => 'input'));
			if($data1==1) {
				echo "OK";
			} else {
				echo "ERROR";
			}
		}
			
	}

	public function check_last_data_pm_in(){
		date_default_timezone_set('Asia/Jakarta');
		$datetime = date('Y-m-d').' '.date('H:i:s');
		$lastData = $this->mymodel->WhereDB1('tb_status','device','pm_input');
		$lastDateTimeValue = $lastData[0]['date_time'];
		$lastDateTime = strtotime($lastDateTimeValue);
		$currentDateTime = time();

		if($currentDateTime - $lastDateTime > 30){
			echo "OFFLINE";

			$lastestData = $this->mymodel->GetDataById('tb_power_meter', 'input');
			$lastLoggedData = $this->mymodel->GetLatestData('tb_logger_pm_input');

			if(!$lastLoggedData || $lastLoggedData->status != "OFFLINE"){
				$isi2 = array('date_time' 	=> $datetime,
						  'i_r' 		=> $lastestData->i_r,
						  'i_s' 		=> $lastestData->i_s,
						  'i_t' 		=> $lastestData->i_t,
						  'v_rs' 		=> $lastestData->v_rs,
						  'v_st' 		=> $lastestData->v_st,
						  'v_rt' 		=> $lastestData->v_rt,
						  'v_rn' 		=> $lastestData->v_rn,
						  'v_sn' 		=> $lastestData->v_sn,
						  'v_tn' 		=> $lastestData->v_tn,
						  'cosphi' 		=> $lastestData->cosphi,
						  'freq' 		=> $lastestData->freq,
						  'thdi_r' 		=> $lastestData->thdi_r,
						  'thdi_s' 		=> $lastestData->thdi_s,
						  'thdi_t' 		=> $lastestData->thdi_t,
						  'thdv_rs' 	=> $lastestData->thdv_rs,
						  'thdv_st' 	=> $lastestData->thdv_st,
						  'thdv_rt' 	=> $lastestData->thdv_rt,
						  'thdv_rn' 	=> $lastestData->thdv_rn,
						  'thdv_sn' 	=> $lastestData->thdv_sn,
						  'thdv_tn' 	=> $lastestData->thdv_tn,
						  'kwh_r' 		=> $lastestData->kwh_r,
						  'kwh_s' 		=> $lastestData->kwh_s,
						  'kwh_t' 		=> $lastestData->kwh_t,
						  'kwh_total' 	=> $lastestData->kwh_total,
						  'kvarh_r' 	=> $lastestData->kvarh_r,
						  'kvarh_s' 	=> $lastestData->kvarh_s,
						  'kvarh_t' 	=> $lastestData->kvarh_t,
						  'kvarh_total' => $lastestData->kvarh_total,
						  'status' => "OFFLINE");
				$data2 = $this->mymodel->InsertDB('tb_logger_pm_input',$isi2);
			}
			
		} else if($currentDateTime - $lastDateTime > 10){
			echo "TRANSMIT";
		} else {
			echo "ONLINE";
		}
	}

	public function pm_out($ir,$is,$it,$vrs,$vst,$vrt,$vrn,$vsn,$vtn,$pf,$hz,$thdi_r,$thdi_s,$thdi_t,$thdv_rs,$thdv_st,$thdv_rt,$thdv_rn,$thdv_sn,$thdv_tn,$kwh_r,$kwh_s,$kwh_t,$kwh_total,$kvarh_r,$kvarh_s,$kvarh_t,$kvarh_total,$logger) 
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime = date('Y-m-d').' '.date('H:i:s');
		$data3 = $this->mymodel->UpdateDB('tb_status',array('date_time' => $datetime),array('device' => 'pm_output'));
		if($logger==1) {
			$isi1 = array('i_r' 		=> $ir,
						  'i_s' 		=> $is,
						  'i_t' 		=> $it,
						  'v_rs' 		=> $vrs,
						  'v_st' 		=> $vst,
						  'v_rt' 		=> $vrt,
						  'v_rn' 		=> $vrn,
						  'v_sn' 		=> $vsn,
						  'v_tn' 		=> $vtn,
						  'cosphi' 		=> $pf,
						  'freq' 		=> $hz,
						  'thdi_r' 		=> $thdi_r,
						  'thdi_s' 		=> $thdi_s,
						  'thdi_t' 		=> $thdi_t,
						  'thdv_rs' 	=> $thdv_rs,
						  'thdv_st' 	=> $thdv_st,
						  'thdv_rt' 	=> $thdv_rt,
						  'thdv_rn' 	=> $thdv_rn,
						  'thdv_sn' 	=> $thdv_sn,
						  'thdv_tn' 	=> $thdv_tn,
						  'kwh_r' 		=> $kwh_r,
						  'kwh_s' 		=> $kwh_s,
						  'kwh_t' 		=> $kwh_t,
						  'kwh_total' 	=> $kwh_total,
						  'kvarh_r' 	=> $kvarh_r,
						  'kvarh_s' 	=> $kvarh_s,
						  'kvarh_t' 	=> $kvarh_t,
						  'kvarh_total' => $kvarh_total);
			$isi2 = array('date_time' 	=> $datetime,
						  'i_r' 		=> $ir,
						  'i_s' 		=> $is,
						  'i_t' 		=> $it,
						  'v_rs' 		=> $vrs,
						  'v_st' 		=> $vst,
						  'v_rt' 		=> $vrt,
						  'v_rn' 		=> $vrn,
						  'v_sn' 		=> $vsn,
						  'v_tn' 		=> $vtn,
						  'cosphi' 		=> $pf,
						  'freq' 		=> $hz,
						  'thdi_r' 		=> $thdi_r,
						  'thdi_s' 		=> $thdi_s,
						  'thdi_t' 		=> $thdi_t,
						  'thdv_rs' 	=> $thdv_rs,
						  'thdv_st' 	=> $thdv_st,
						  'thdv_rt' 	=> $thdv_rt,
						  'thdv_rn' 	=> $thdv_rn,
						  'thdv_sn' 	=> $thdv_sn,
						  'thdv_tn' 	=> $thdv_tn,
						  'kwh_r' 		=> $kwh_r,
						  'kwh_s' 		=> $kwh_s,
						  'kwh_t' 		=> $kwh_t,
						  'kwh_total' 	=> $kwh_total,
						  'kvarh_r' 	=> $kvarh_r,
						  'kvarh_s' 	=> $kvarh_s,
						  'kvarh_t' 	=> $kvarh_t,
						  'kvarh_total' => $kvarh_total);
			$data1 = $this->mymodel->UpdateDB('tb_power_meter',$isi1,array('id' => 'output'));
			$data2 = $this->mymodel->InsertDB('tb_logger_pm_output',$isi2);
			if($data1==1 && $data2==1) {
				echo "OK";
			} else {
				echo "ERROR";
			}
		} else {
			$isi1 = array('i_r' 		=> $ir,
						  'i_s' 		=> $is,
						  'i_t' 		=> $it,
						  'v_rs' 		=> $vrs,
						  'v_st' 		=> $vst,
						  'v_rt' 		=> $vrt,
						  'v_rn' 		=> $vrn,
						  'v_sn' 		=> $vsn,
						  'v_tn' 		=> $vtn,
						  'cosphi' 		=> $pf,
						  'freq' 		=> $hz,
						  'thdi_r' 		=> $thdi_r,
						  'thdi_s' 		=> $thdi_s,
						  'thdi_t' 		=> $thdi_t,
						  'thdv_rs' 	=> $thdv_rs,
						  'thdv_st' 	=> $thdv_st,
						  'thdv_rt' 	=> $thdv_rt,
						  'thdv_rn' 	=> $thdv_rn,
						  'thdv_sn' 	=> $thdv_sn,
						  'thdv_tn' 	=> $thdv_tn,
						  'kwh_r' 		=> $kwh_r,
						  'kwh_s' 		=> $kwh_s,
						  'kwh_t' 		=> $kwh_t,
						  'kwh_total' 	=> $kwh_total,
						  'kvarh_r' 	=> $kvarh_r,
						  'kvarh_s' 	=> $kvarh_s,
						  'kvarh_t' 	=> $kvarh_t,
						  'kvarh_total' => $kvarh_total);
			$data1 = $this->mymodel->UpdateDB('tb_power_meter',$isi1,array('id' => 'output'));
			if($data1==1) {
				echo "OK";
			} else {
				echo "ERROR";
			}
		}
	}

	public function check_last_data_pm_out(){
		date_default_timezone_set('Asia/Jakarta');
		$lastData = $this->mymodel->WhereDB1('tb_status','device','pm_output');
		$lastDateTimeValue = $lastData[0]['date_time'];
		$lastDateTime = strtotime($lastDateTimeValue);
		$currentDateTime = time();

		if($currentDateTime - $lastDateTime > 30){
			echo "OFFLINE";

			$lastestData = $this->mymodel->GetDataById('tb_power_meter', 'input');
			$lastLoggedData = $this->mymodel->GetLatestData('tb_logger_pm_input');

			if(!$lastLoggedData || $lastLoggedData->status != "OFFLINE"){
				$isi2 = array('date_time' 	=> $datetime,
						  'i_r' 		=> $lastestData->i_r,
						  'i_s' 		=> $lastestData->i_s,
						  'i_t' 		=> $lastestData->i_t,
						  'v_rs' 		=> $lastestData->v_rs,
						  'v_st' 		=> $lastestData->v_st,
						  'v_rt' 		=> $lastestData->v_rt,
						  'v_rn' 		=> $lastestData->v_rn,
						  'v_sn' 		=> $lastestData->v_sn,
						  'v_tn' 		=> $lastestData->v_tn,
						  'cosphi' 		=> $lastestData->cosphi,
						  'freq' 		=> $lastestData->freq,
						  'thdi_r' 		=> $lastestData->thdi_r,
						  'thdi_s' 		=> $lastestData->thdi_s,
						  'thdi_t' 		=> $lastestData->thdi_t,
						  'thdv_rs' 	=> $lastestData->thdv_rs,
						  'thdv_st' 	=> $lastestData->thdv_st,
						  'thdv_rt' 	=> $lastestData->thdv_rt,
						  'thdv_rn' 	=> $lastestData->thdv_rn,
						  'thdv_sn' 	=> $lastestData->thdv_sn,
						  'thdv_tn' 	=> $lastestData->thdv_tn,
						  'kwh_r' 		=> $lastestData->kwh_r,
						  'kwh_s' 		=> $lastestData->kwh_s,
						  'kwh_t' 		=> $lastestData->kwh_t,
						  'kwh_total' 	=> $lastestData->kwh_total,
						  'kvarh_r' 	=> $lastestData->kvarh_r,
						  'kvarh_s' 	=> $lastestData->kvarh_s,
						  'kvarh_t' 	=> $lastestData->kvarh_t,
						  'kvarh_total' => $lastestData->kvarh_total,
						  'status' => "OFFLINE");
				$data2 = $this->mymodel->InsertDB('tb_logger_pm_output',$isi2);
			}
			
		} else if($currentDateTime - $lastDateTime > 10){
			echo "TRANSMIT";
		}	else {
			echo "ONLINE";
		}
	}

	public function gnd_in($voltage,$logger) 
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime = date('Y-m-d').' '.date('H:i:s');
		$data3 = $this->mymodel->UpdateDB('tb_status',array('date_time' => $datetime),array('device' => 'gnd_input'));
		if($logger==1) {
			$isi1 = array('voltage' 	=> $voltage);
			$isi2 = array('date_time' 	=> $datetime,
						  'voltage' 	=> $voltage);
			$data1 = $this->mymodel->UpdateDB('tb_gnd_meter',$isi1,array('id' => 'input'));
			$data2 = $this->mymodel->InsertDB('tb_logger_gnd_input',$isi2);
			if($data1==1 && $data2==1) {
				echo "OK";
			} else {
				echo "ERROR";
			}
		} else {
			$isi1 = array('voltage' 	=> $voltage);
			$isi2 = array('date_time' 	=> $datetime,
						  'voltage' 	=> $voltage);
			$data1 = $this->mymodel->UpdateDB('tb_gnd_meter',$isi1,array('id' => 'input'));
			if($data1==1) {
				echo "OK";
			} else {
				echo "ERROR";
			}
		}
	}

	public function check_last_data_gnd_in(){
		date_default_timezone_set('Asia/Jakarta');
		$lastData = $this->mymodel->WhereDB1('tb_status','device','gnd_input');
		$lastDateTimeValue = $lastData[0]['date_time'];
		$lastDateTime = strtotime($lastDateTimeValue);
		$currentDateTime = time();

		if($currentDateTime - $lastDateTime > 30){
			echo "OFFLINE";
		} else if($currentDateTime - $lastDateTime > 10){
			echo "TRANSMIT";
		} else {
			echo "ONLINE";
		}
	}

	public function gnd_out($voltage,$logger) 
	{
		date_default_timezone_set('Asia/Jakarta');
		$datetime = date('Y-m-d').' '.date('H:i:s');
		$data3 = $this->mymodel->UpdateDB('tb_status',array('date_time' => $datetime),array('device' => 'gnd_output'));
		if($logger==1) {
			$isi1 = array('voltage' 	=> $voltage);
			$isi2 = array('date_time' 	=> $datetime,
						  'voltage' 	=> $voltage);
			$data1 = $this->mymodel->UpdateDB('tb_gnd_meter',$isi1,array('id' => 'output'));
			$data2 = $this->mymodel->InsertDB('tb_logger_gnd_output',$isi2);
			if($data1==1 && $data2==1) {
				echo "OK";
			} else {
				echo "ERROR";
			}
		} else {
			$isi1 = array('voltage' 	=> $voltage);
			$isi2 = array('date_time' 	=> $datetime,
						  'voltage' 	=> $voltage);
			$data1 = $this->mymodel->UpdateDB('tb_gnd_meter',$isi1,array('id' => 'output'));
			if($data1==1) {
				echo "OK";
			} else {
				echo "ERROR";
			}
		}
	}

	public function check_last_data_gnd_out(){	
		date_default_timezone_set('Asia/Jakarta');
		$lastData = $this->mymodel->WhereDB1('tb_status','device','gnd_output');
		$lastDateTimeValue = $lastData[0]['date_time'];
		$lastDateTime = strtotime($lastDateTimeValue);
		$currentDateTime = time();

		if($currentDateTime - $lastDateTime > 30){
			echo "OFFLINE";
		} else if($currentDateTime - $lastDateTime > 10){
			echo "TRANSMIT";
		} else {
			echo "ONLINE";
		}
	}
}

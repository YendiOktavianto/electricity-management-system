<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function Cek_Login($username,$password) {
		$data = $this->db->where('user', $username)
						 ->where('pass', $password)
						 ->limit(1)
						 ->get('tb_login');
		return $data->num_rows();
	}
	
	public function getAllUsersFromLogin() {
        $this->db->select('user');
        $result = $this->db->get('tb_login')->result_array();
        return array_column($result, 'user');
    }

	public function CekDB($nama_tabel='',$lokasi='',$where='')
	{
		$data = $this->db->where($lokasi,$where)
						 ->limit(1)
						 ->get($nama_tabel);
		return $data->num_rows();
	}

	public function GetDB($nama_tabel = '') {
		$data = $this->db->query('select * from '.$nama_tabel);
		return $data->result_array();
	}

	public function WhereDB1($nama_tabel='',$lokasi='',$where='') {
		$data = $this->db->select('*')
						 ->from($nama_tabel)
						 ->where($lokasi,$where)
						 ->get();
		return $data->result_array();				 
	}

	public function WhereDB2($nama_tabel,$lokasi,$id) {
		$data = $this->db->where($lokasi, $id)
						 ->get($nama_tabel);
		return $data->result_array();
	}

	public function InsertDB($nama_tabel,$isi) {
		$data = $this->db->insert($nama_tabel,$isi);
		return $data;
	}

	public function UpdateDB($nama_tabel,$isi,$where) {
		$data = $this->db->update($nama_tabel,$isi,$where);
		return $data;
	}

	public function DeleteDB($nama_tabel,$where) {
		$data = $this->db->delete($nama_tabel,$where);
		return $data;
	}

	public function GetDataById($tableName, $id) {
    $this->db->where('id', $id);
    $query = $this->db->get($tableName);

    return $query->row();
	}

	public function GetLatestData($table) {
		$this->db->order_by('date_time', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get($table);
		return $query->row();
	}

}

<?php


class Request extends CI_Controller {

    private function getArduinoIP() {
        $query = $this->db->get_where('tb_ip', array('id' => 1));
        $row = $query->row();
        return $row->ip;
    }

    public function SendDataToArduino() {
        $data = $this->input->post('data');
        // echo $data;

        $arduino_ip = $this->getArduinoIP();
        echo $arduino_ip;
        $arduino_port = 80; 

        $url = "http://{$arduino_ip}/?data={$data}";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $output = curl_exec($ch);
        curl_close($ch);

        // echo $output;
    }

    public function OnlyControl() {
        $data = $this->input->post('data');
        echo $data;

        $arduino_ip = $this->getArduinoIP(); 
        $arduino_port = 80;

        $url = "http://{$arduino_ip}/?data={$data}";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $output = curl_exec($ch);
        curl_close($ch);

        // echo $output;
    }
}

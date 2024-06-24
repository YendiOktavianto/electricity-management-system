<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sd_logger extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function request_to_arduino() {
        $signalType = $this->input->post('signalType');

        switch($signalType) {
            case "EXCEL-PM-INPUT":
                $this->sendToArduino("EXCEL");
                echo "EXCEL-PM-INPUT";
                break;
            case "PDF-PM-INPUT":
                $this->sendToArduino("PDF");
                echo "PDF-PM-INPUT";
                break;
            default:
                break;
        }
    }

    private function sendToArduino($signal) {
        $arduino_ip = "192.168.8.105";  
        $arduino_port = 80;  
        $fp = fsockopen($arduino_ip, $arduino_port, $errno, $errstr, 30); 
        if (!$fp) {
            echo "$errstr ($errno)<br />\n";
        } else {
            $out = "GET /$signal HTTP/1.1\r\n";  // Membuat request
            $out .= "Host: $arduino_ip\r\n";
            $out .= "Connection: Close\r\n\r\n";
            fwrite($fp, $out);  // Mengirimkan request ke Arduino
            fclose($fp);  // Menutup koneksi
        }
    }
}

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
defined('BASEPATH') OR exit('No direct script access allowed');

class Writealarm extends CI_Controller {

	public function email_temp($judul,$lane,$value) 
	{
	    include($_SERVER['DOCUMENT_ROOT'].'/assets/phpmailer/src/Exception.php');
	    include($_SERVER['DOCUMENT_ROOT'].'/assets/phpmailer/src/PHPMailer.php');
	    include($_SERVER['DOCUMENT_ROOT'].'/assets/phpmailer/src/SMTP.php');
	    
      $judul = str_replace('%20', ' ', $judul);
	    
	    $data = $this->mymodel->WhereDB1('tb_email','id','email');
			$email_sender = $data[0]['email'];

		date_default_timezone_set('Asia/Jakarta');
		$datetime = date('Y-m-d').' '.date('H:i:s');
		$isi = array('date_time' => $datetime,
					 'name' => 'Temperature',
					 'lane' => $lane,
					 'value' => $value,
					 'status' => $judul);
		$data2 = $this->mymodel->InsertDB('tb_logger_alarm',$isi);

	    //Create an instance; passing `true` enables exceptions
	    $mail = new PHPMailer(true);
	    
	    try {
	        //Server settings
	        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	        $mail->SMTPDebug = 0; // Aktifkan untuk melakukan debugging
	        $mail->isSMTP();                                            //Send using SMTP
	        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
	        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	        $mail->Username   = 'device@electricity-management-system.com';                     //SMTP username
	        $mail->Password   = 'Difin@123';                               //SMTP password
	        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	        $mail->SMTPSecure = "tls";
	        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	    
	        //Recipients
	        $mail->setFrom($mail->Username, 'EMS');
	        $mail->addAddress($email_sender, 'User');     //Add a recipient
	        $mail->addReplyTo($mail->Username, 'Alarm Report');
	    
	        //Attachments
	        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	        //$mail->addAttachment('file/file-reports1.pdf', 'reports.pdf');    //Optional name
	    
	        //Content
	        $mail->isHTML(true);                                  //Set email format to HTML
	        $mail->Subject = $judul;
	        $mail->Body    = $lane." : ".$value;
	    
	        $mail->send();
	        echo 'Message has been sent';
	    } catch (Exception $e) {
	        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	    }
	}

	public function email_voltage($judul,$lane,$value) 
	{
	    include($_SERVER['DOCUMENT_ROOT'].'/assets/phpmailer/src/Exception.php');
	    include($_SERVER['DOCUMENT_ROOT'].'/assets/phpmailer/src/PHPMailer.php');
	    include($_SERVER['DOCUMENT_ROOT'].'/assets/phpmailer/src/SMTP.php');

        $judul = str_replace('%20', ' ', $judul);
	    
	    $data = $this->mymodel->WhereDB1('tb_email','id','email');
		$email_sender = $data[0]['email'];

		date_default_timezone_set('Asia/Jakarta');
		$datetime = date('Y-m-d').' '.date('H:i:s');
		$isi = array('date_time' => $datetime,
					 'name' => 'Voltage',
					 'lane' => $lane,
					 'value' => $value,
					 'status' => $judul);
		$data2 = $this->mymodel->InsertDB('tb_logger_alarm',$isi);

	    //Create an instance; passing `true` enables exceptions
	    $mail = new PHPMailer(true);
	    
	    try {
	        //Server settings
	        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	        $mail->SMTPDebug = 0; // Aktifkan untuk melakukan debugging
	        $mail->isSMTP();                                            //Send using SMTP
	        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
	        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	        $mail->Username   = 'device@electricity-management-system.com';                     //SMTP username
	        $mail->Password   = 'Difin@123';                               //SMTP password
	        //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	        $mail->SMTPSecure = "tls";
	        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
	    
	        //Recipients
	        $mail->setFrom($mail->Username, 'EMS');
	        $mail->addAddress($email_sender, 'User');     //Add a recipient
	        $mail->addReplyTo($mail->Username, 'Alarm Report');
	    
	        //Attachments
	        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	        //$mail->addAttachment('file/file-reports1.pdf', 'reports.pdf');    //Optional name
	    
	        //Content
	        $mail->isHTML(true);                                  //Set email format to HTML
	        $mail->Subject = $judul;
	        $mail->Body    = $lane." : ".$value;
	    
	        $mail->send();
	        echo 'Message has been sent';
	    } catch (Exception $e) {
	        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	    }
	}

}

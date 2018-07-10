<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

class planb_controller extends CI_Controller {



	public function __construct(){
		parent::__construct();
	}	

	public function index()
	{
		$header_data['title']="Plan B";
		$this->load->view('include/header',$header_data);
		$this->load->view('include/main');
	}

	public function send_message()
	{	
		ini_set('mail.add_x_header', 0);
		require 'vendor/autoload.php';
		$mail = new PHPMailer;
		$mail->setFrom('geisherbernabe@gmail.com', 'Gei');
		$mail->addAddress('noellewaje@gmail.com', 'My Friend');
		$mail->Subject  = 'First PHPMailer Message';
		$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
		if(!$mail->send()) {
		  echo phpversion();
		  echo 'Message was not sent.';
		  echo 'Mailer error: ' . $mail->ErrorInfo;
		} else {
		  return redirect('planb_controller/index');
		}

		// $message = $this->input->post('message');
		// $message = wordwrap($message, 70, "\r\n");
		// $to = 'geisherbernabe@gmail.com';
  //     	$subject = 'Contact Form Submit';
  //     	$headers =  'MIME-Version: 1.0' . "\r\n"; 
		// $headers .= 'From: Auds <noellewaje@gmail.com>' . "\r\n";
		// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

  //     	if(mail('geisherbernabe@gmail.com', 'My Subject', $message, $headers)){
  //     		return redirect('planb_controller/index');
  //     	}
  //     	else
  //     		echo "puta";
      	

	}
}

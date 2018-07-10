<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
		$from = "Auds <noellewaje@gmail.com>";
		$to = "Gei geisherbernabe@gmail.com";
		$subject = "Hi!";
		$body = "Hi,\n\nHow are you?";
		$host = "mail.example.com";
		$username = "smtp_username";
		$password = "smtp_password";
		$headers = array ('From' => $from,
		  'To' => $to,
		  'Subject' => $subject);
		$smtp = Mail::factory('smtp',
		  array ('host' => $host,
		    'auth' => true,
		    'username' => $username,
		    'password' => $password));
		$mail = $smtp->send($to, $headers, $body);
		if (PEAR::isError($mail)) {
		  echo("<p>" . $mail->getMessage() . "</p>");
		 } else {
		  echo("<p>Message successfully sent!</p>");
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

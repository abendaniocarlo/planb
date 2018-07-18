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
		$this->load->view('include/footer');
	}

	public function send_message(){
		$this->form_validation->set_rules('name', 'Name', 'required');
	 	$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'required');

		if ($this->form_validation->run()){
			if ($this->php_mail($_POST['email'],$_POST['name'],$_POST['message'])){
				$this->session->set_flashdata('response', 'Message sent!');
				return redirect('planb_controller');
			}
			// $this->php_mail();
		}
		else{
			$header_data['title']="Plan B";
			$this->load->view('include/header',$header_data);
			$this->load->view('include/main');
			$this->session->set_flashdata('responsed', 'Failed to save!(Please input necessary details)');
		}
	}

	public function php_mail($email, $name, $message)
	{	
			require 'vendor/autoload.php';

			$mail = new PHPMailer;

			$mail->isSMTP();
			$mail->SMTPDebug = 2;
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPSecure = 'tls';
			$mail->SMTPAuth = true;
			$mail->Username = "email@example.com";
			$mail->Password = "samplepassword";

			// $from = $_POST['email'];

			// $name = $_POST['name'];
			
			$mail->setFrom($email, $name);

			$mail->addReplyTo($email, $name);

			$mail->addAddress('noellewaje@gmail.com', 'Audrey Noelle');

			$mail->Subject = 'PHPMailer GMail SMTP test';

			$mail->Body = $message;

			//$mail->AltBody = 'This is a plain-text message body';

			if (!$mail->send()) {
			    echo "Mailer Error: " . $mail->ErrorInfo;
			} else {
			    return true;
			}

		function save_mail($mail)
			{
			    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

			    $imapStream = imap_open($path, $mail->Username, $mail->Password);

			    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
			    imap_close($imapStream);

			    return $result;
			}
		      	

		}
}


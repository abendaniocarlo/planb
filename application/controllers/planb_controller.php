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
		$this->load->view('main');
		$this->load->view('include/footer');
	}

	public function products(){
		$header_data['title']="Products";
		$this->load->view('include/header');
		$this->load->view('products',$header_data);
		$this->load->view('include/footer_products');
	}
	public function bosskit(){
		$header_data['title']="Package Boss Kit";
		$this->load->view('include/header');
		$this->load->view('bosskit',$header_data);
		$this->load->view('include/footer_products');
	}

	public function indikit(){
		$header_data['title']="Individual Kit";
		$this->load->view('include/header');
		$this->load->view('indikit',$header_data);
		$this->load->view('include/footer_products');
	}

	public function mobile(){
		$header_data['title']="Mobile App Kit";
		$this->load->view('include/header');
		$this->load->view('mobile',$header_data);
		$this->load->view('include/footer_products');
	}

	public function ecom(){
		$header_data['title']="E-Commerce";
		$this->load->view('include/header');
		$this->load->view('ecom',$header_data);
		$this->load->view('include/footer_products');
	}

	public function custom(){
		$header_data['title']="Package Boss Kit";
		$this->load->view('include/header');
		$this->load->view('custom',$header_data);
		$this->load->view('include/footer_products');
	}

	public function webhost(){
		$header_data['title']="Web Hosting";
		$this->load->view('include/header');
		$this->load->view('webhost',$header_data);
		$this->load->view('include/footer_products');
	}

	public function hardware(){
		$header_data['title']="Hardware";
		$this->load->view('include/header');
		$this->load->view('hardware',$header_data);
		$this->load->view('include/footer_products');
	}

	public function infra(){
		$header_data['title']="Infrastructure";
		$this->load->view('include/header');
		$this->load->view('infra',$header_data);
		$this->load->view('include/footer_products');
	}

	public function other(){
		$header_data['title']="Other Products";
		$this->load->view('include/header');
		$this->load->view('other',$header_data);
		$this->load->view('include/footer_products');
	}

	public function all(){
		$header_data['title']="All Products";
		$this->load->view('include/header');
		$this->load->view('all',$header_data);
		$this->load->view('include/footer_products');
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


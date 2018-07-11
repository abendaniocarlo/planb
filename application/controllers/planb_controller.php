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

	public function send_message()
	{	
			
		/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

require 'vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "geisherbernabe@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "geishergonzalo";

//Set who the message is to be sent from
$mail->setFrom('geisherbernabe@gmail.com', 'First Last');

//Set an alternative reply-to address
$mail->addReplyTo('geisherbernabe@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('noellewaje@gmail.com', 'John Doe');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents(getcwd()."\application\controllers\contents.html"), __DIR__);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
// $mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo phpversion();
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.
function save_mail($mail)
{
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}


		// ini_set('mail.add_x_header', 0);
		// require 'vendor/autoload.php';
		// $mail = new PHPMailer;
		// $mail->setFrom('geisherbernabe@gmail.com', 'Gei');
		// $mail->addAddress('noellewaje@gmail.com', 'My Friend');
		// $mail->Subject  = 'First PHPMailer Message';
		// $mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
		// if(!$mail->send()) {
		//   echo phpversion();
		//   echo 'Message was not sent.';
		//   echo 'Mailer error: ' . $mail->ErrorInfo;
		// } else {
		//   return redirect('planb_controller');
		// }

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


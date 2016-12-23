<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SEmail {

	public function __construct() {
	 	require_once APPPATH.'third_party/swift_mailer/swift_required.php';
		//require_once 'application/swiftmailer/swift_required.php'; 
	}


	function send_mail( $param = array( 'to' => '', 'subject' => '', 'from' => '' , 'body' => '' ) ) {		
		$to = $param['to'];
		$subject = $param['subject'];
		$from = $param['from'];
		//$headers = "From: ".$param['from'] . "\r\n" ;
		$body = $param['body'];


		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= "From: ".$param['from'] . "\r\n" ;
		//$headers .= 'Cc: jrhodes@kmjcoffee.com' . "\r\n";

		// //Create the Transport 		
	 // 	$transport = Swift_SmtpTransport::newInstance ('smtp.gmail.com', 465, 'ssl') 
	 // 									->setUsername('shibbi.arora@gmail.com')
	 // 									->setPassword('Leicester@195');
		// //Create the message
	 //    $message = Swift_Message::newInstance();

	 //    //Give the message a subject
	 //    $message->setSubject($subject)
	 //                ->setFrom($from)
	 //                ->setTo($to)
	 //                ->setBody($body)
	 //                ->addPart('<q>'.$body.'</q>', 'text/html');

		// //Create the Mailer using your created Transport
	 //    $mailer = Swift_Mailer::newInstance($transport);

	

		mail($to,$subject,$body,$headers);
		return true;
		// echo("<p>Message successfully sent again!</p>");
		// exit();


		// echo "<pre>";
		// print_r($mailer->send($message));
		// exit();
  //       //Send the message
  //       return $mailer->send($message); 
    }
}
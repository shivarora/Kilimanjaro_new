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

		mail($to,$subject,$body,$headers);
        //Send the message
        //return $mailer->send($message); 
        return true;
    }
}
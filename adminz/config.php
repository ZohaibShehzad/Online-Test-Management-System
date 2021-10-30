<?php
ob_start();
if (!isset($_SESSION)) {
  session_start();
}
$base_url  = "http://".$_SERVER['HTTP_HOST']."/adminz/";
if($_SERVER['HTTP_HOST']!="localhost"){
   $base_url  = "http://".$_SERVER['HTTP_HOST']."/adminz/";
}

function send_email($to,$message,$subject){
		
    $from		 = "care@sts.com";
    $headers 	 = 'MIME-Version: 1.0' . "\r\n";
    $headers 	.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers 	.= 'To: <'.$to.'>' . "\r\n";
    $headers 	.= 'From: STS<'.$from.'>' . "\r\n";
    if($_SERVER['HTTP_HOST']!="localhost")
        mail($to, $subject, $message, $headers);
    return true;
}

?>
<?php

if(isset($_POST["submit"])){
	$from = $_POST["name"];
	$subject = "Website Inquiry"
	$message = $_POST["message"];
	$headers = 'From: ' $from;

	mail('eric@jiang.pics', $subject, $message, $headers)
}

?>
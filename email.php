<!DOCTYPE HTML>
<?php

// the message
if (isset($_POST['index'])){
	$msg = $_POST["message"];
	$subject = $_POST["inquiry-type"];
	$from_name = $_POST["name"];
	$from_email = $_POST["email"];

// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

// send email
	mail("eric@jiang.pics",$subject" inquiry",$msg "NAME: " $from_name,"From: "$from_email);
}

echo '<head><meta http-equiv="refresh" content="0; url=index.html"></head>';
?>
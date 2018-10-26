<?php
	$name = $_POST['username'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$interested = $_POST['interested'];
 	$to = "adam@reversedout.com";
	$subject = "Contact Request from CovWorx LLC";
	$message = "Below are details of User : \n";
	$message .= "Name : $name \n";
	$message .= "Email : $email \n";
	$message .= "Phone : $phone \n";
	$message .= "Interested : $interested \n";
	$from = "adam@reversedout.com";
	$headers = "From:" . $from;
	mail($to,$subject,$message);
	header('Location: index.html');
	exit;
?>
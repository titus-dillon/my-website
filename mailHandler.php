<?php

/*
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
*/

$recipient = "tidillon28@gmail.com";

$sender = $_POST['uname'];
$uemail = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

/*echo "[$sender]\n";
echo "[$uemail]\n";
echo "[$subject]\n";
echo "[$msg]";*/

$msg .= "\n\n";
$msg .= $sender;

$headers = "From: $uemail" . '\n' .
			"Reply-To: $uemail" . '\n' .
			"X-Mailer: PHP/" . phpversion();
			
			
$maily = mail($recipient, $subject, $msg, $headers);
if ($maily) {
	echo "Mail Sent";
}
else {
	echo "Mail Not Sent";
}
?>
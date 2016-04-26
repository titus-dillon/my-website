<?php

$recipient = "tidillon28@gmail.com";

$sender = $_POST['uname'];
$uemail = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];

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

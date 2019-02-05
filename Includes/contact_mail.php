<?php

$msg = "www.oblique.edu.np<br>";

$msg .= "Sender's E-Mail:".$_POST['email']."<br><br>";

$msg .= $_POST['f_name']." ".$_POST['l_name']."<br>".$_POST['mob']."<br><br>".$_POST['msg']."<br>"
		;

$to = "contact@oblique.edu.np";

$subject = "Website Feedback";

$mailheaders = "From: My Web Site <oblique.edu.np><br>";


$mailheaders .= "Reply-To: ".$_POST['email']."<br>";

echo $msg;

$send = mail($to, $subject, $msg, $mailheaders);

if(!$send){
	echo "Error!!!!";
	exit;
}
else{
	header("location: ../contact.php");
}

?>

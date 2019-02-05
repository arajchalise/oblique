<?php

$msg = "www.oblique.edu.np<br>";

$msg .= "Sender's E-Mail:".$_POST['email']."<br><br>";
$msg .= "Basic Details:<br>";
$msg .= $_POST['name']."<br>".$_POST['student-phone']."<br>".$_POST['passport']."<br>".$_POST['guardian']."<br>"
		.$_POST['guardian-phone']."<br>".$_POST['course']."<br>";


$msg .= "Educational Background:<br>";
$msg .= "Level: SLC/SEE<br>".$_POST['schoolname']." ".$_POST['schoolpercentage']." ".$_POST['schoolcompletion']."<br>";
$msg .= "Level: Intermediate<br>".$_POST['plus2name']." ".$_POST['plus2percentage']." ".$_POST['plus2completion']."<br>";
$msg .= "Level: Bachelors<br>".$_POST['collegename']." ".$_POST['collegepercentage']." ".$_POST['collegecompletion']."<br>";

$to = "contact@oblique.edu.np";

$subject = "Front Page Enquiry Form";

$mailheaders = "From: My Web Site <oblique.edu.np><br>";


$mailheaders .= "Reply-To: ".$_POST['email']."<br>";

//echo $msg;

$send = mail($to, $subject, $msg, $mailheaders);

if(!$send){
	echo "Error!!!!";
	exit;
}
else{
	header("location: ../home.php");
}

?>

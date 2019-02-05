<?php
session_start();
include 'connection.inc';

$username = $_POST['username'];
$password = $_POST['password'];
if($username =='' || $password == ''){
	$error = "Username or Password cant' be empty......";
	header("location: ../admin.php");
}
else{
$data = mysql_query("select * from tbl_admin where username='$username' && password='$password'", $con);
$num = mysql_num_rows($data);
if($num==1){
	$row = mysql_fetch_array($data);
	$_SESSION['name'] = $row['name'];
	$_SESSION['id'] = $row['id'];
	$_SESSION['user'] = $row['username'];
	header ("location: ../dashboard.php");
	exit;
}
else{
	$_SESSION['user'] = $username;
	$error= "Either Username or Password wrong!!!";
	header("location: ../admin.php");
}
}
$_SESSION['error'] = $error;

 ?>
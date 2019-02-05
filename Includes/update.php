<?php 
include 'connection.inc';
$topic = $_GET['topic'];




if($topic==1){
	$id = $_POST['iid'];
	$top_ic = "Company Profile";
	$detail = $_POST['profile'];

	$inst = mysql_query("UPDATE tbl_about SET Topic='$top_ic', Data='$detail' WHERE id='$id'". $con);
	if(!$inst){
		echo "Error";
	}
	else{
		header("location: ../dashboard.php");
	}
}


else if($topic==2){
	$id = $_POST['iid'];
	$top_ic = "Message From MD";
	$detail = $_POST['message'];

	$inst = mysql_query("UPDATE tbl_about SET Topic='$top_ic', Data='$detail' WHERE id='$id'". $con);
	if(!$inst){
		echo "Error";
	}
	else{
		header("location: ../dashboard.php");
	}
}


else if($topic == 3){
	$id = $_POST['iid'];
	$name = $_POST['name'];
	$position = $_POST['position'];
	$message = $_POST['message'];

	$image = $_POST['pic'];

	$inst = mysql_query("UPDATE tbl_team SET Name='$name', Position='$position', Message='$message', Image='$image' WHERE id='$id'", $con);

	if(!$inst){
		echo "Error";
	}
	else{
		header("location: ../dashboard.php");
	}


}



else if($topic==4){
	$id = $_POST['iid'];
	$name = $_POST['name'];
	$college = $_POST['college'];
	$country = $_POST['country'];
	$message = $_POST['message'];
	$image = $_POST['pic'];

	$inst = mysql_query("UPDATE tbl_testimonials SET StudentName='$name', University='$college', Country='$country', Message='$message', Image='$image' WHERE id='$id'", $con);

	if(!$inst){
		echo "Error";
	}
	else{
		header("location: ../dashboard.php");
	}
}


else if($topic==5){
$id = $_POST['iid'];
$name = $_POST['name'];
$country = $_POST['country'];
$detail =$_POST['detail'];
$logo = $_POST['logo'];
$image = $_POST['pic'];
$fee = $_POST['fee'];
$seats = $_POST['seats'];
$faculty = $_POST['course'];

$inst = mysql_query("UPDATE tbl_college SET CollegeName='$name', CollegeLogo='$logo', CollegeDetail='$detail', AvailableSeats='$seats', FeeStructure='$fee', Image='$image', cname='$country', fname='$faculty' WHERE ID='$id'", $con);

if(!$inst){
		echo "Error";
	}
	else{
		header("location: ../dashboard.php");
	}


}


else if($topic==7){
$id=$_POST['iid'];
$top_ic = $_POST['top_ic'];
$news = $_POST['detail'];

$inst = mysql_query("UPDATE tbl_news SET Topic='$top_ic', News='$news' WHERE id='$id'", $con);


if(!$inst){
		echo "Error";
	}
	else{
		header("location: ../dashboard.php");
	}


}
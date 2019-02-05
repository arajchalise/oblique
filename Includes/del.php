<?php 
include 'connection.inc';

$topic = $_GET['topic'];



if($topic== 6){
$image = $_GET['image'];
$qry = mysql_query("select * from tbl_gallery where id='$image'", $con);
$images = mysql_fetch_array($qry);
$target = "../Images/";
$target1 = $target.$images['FileName'];
$del = mysql_query("delete from tbl_gallery where id='$image'", $con);
if(!$del){
	echo "Error";
	exit(0);
}
else{
	unlink($target1);
	header("location:../dashboard.php");
}


}

else if ($topic==4) {
	$testimonials = $_GET['testimonials'];
	$qry = mysql_query("select * from tbl_testimonials where id='$testimonials'", $con);
	$images = mysql_fetch_array($qry);
	$target = "../Images/";
	$target1 = $target. $images['Image'];
	$del = mysql_query("delete from tbl_testimonials where id='$testimonials'");
	if (!$del) {
		echo "Error";
		exit(0);
	}
	else{
		unlink($target1);
	header("location:../dashboard.php");
}
}

else if ($topic ==3) {
	$team = $_GET['team'];
	$qry = mysql_query("select * from tbl_team where id='$team'", $con);
	$images = mysql_fetch_array($qry);
	$target = "../Images/";
	$target1 = $target. $images['Image'];
	$del = mysql_query("delete from tbl_team where id='$team'");
	if(!$del){
		echo "Error";
		exit(0);
	}
	else{
		unlink($target1);
	header("location:../dashboard.php");
}
}


else if ($topic == 2) {
	$message = $_GET['message'];

	$del = mysql_query("delete from tbl_about where id='$message'");
	if(!$del){
		echo "Error";
		exit(0);

}
else{
	header("location:../dashboard.php");
}
}

else if ($topic == 1) {
	$profile = $_GET['profile'];

	$del = mysql_query("delete from tbl_about where id='$profile'");
	if(!$del){
		echo "Error";
		exit(0);

}
else{
	header("location:../dashboard.php");
}
}


else if ($topic == 5) {
	$college = $_GET['college'];
	$qry = mysql_query("select * from tbl_college where ID='$college'", $con);
	$images = mysql_fetch_array($qry);
	$target = "../Images/";
	$target1 = $target. $images['CollegeLogo'];
	$target2 = $target. $images['Image'];
	$del = mysql_query("delete from tbl_college where ID='$college'");
	if(!$del){
		echo "Error";
		exit(0);

}
else{
	unlink($target1);
	unlink($target2);
	header("location:../dashboard.php");
}

}

else if ($topic==7) {
	$news = $_GET['news'];
	$del = mysql_query("delete from tbl_news where id='$news'");
	if(!$del){
		echo "Error";
		exit(0);

}
else{
	header("location:../dashboard.php");
}
}

?>
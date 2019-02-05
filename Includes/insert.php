<?php 
include 'connection.inc';


$topic = $_GET['topic'];

if($topic==1){
	$profile = $_POST['profile'];
	$inst = mysql_query("INSERT into tbl_about(Topic, Data) values('Company Profile', '$profile')", $con);
	if(!$inst){
		echo "Failure";
	}
	else{
		header("location: ../dashboard.php");
	}

}

else if($topic==2){
	$message = $_POST['message'];
	$inst = mysql_query("INSERT into tbl_about(Topic, Data) values('Message From MD', '$message')", $con);
	if(!$inst){
		echo "Failure";
	}
	else{
		header("location: ../dashboard.php");
	}

}

else if($topic==3){
	$name = $_POST['name'];
	$position = $_POST['position'];
	$message = $_POST['message'];
	$target = "../Images/";
	$filename = $_FILES['pic']['name'];
	$target1 = $target.$filename;

if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){

	if($_FILES['pic']['error']>0)
		{echo "Error...".$_FILES['pic']['error'];}

	else
	{
		if(file_exists($target1))
			{
				echo "File Exits"; 
				exit;
			}

		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){
			$qry = "INSERT INTO tbl_team(Name, Position, Message, Image)  VALUES ('$name', '$position', '$message', '$filename')";
			$inst = mysql_query($qry, $con);
			if(!$inst){
				echo "Error in Query.";
				exit();
			}
			else{
				header("location:../dashboard.php");
			}
		}



}
}
else{
	echo "Invalid File Format";
}
}



else if($topic == 4){

		$name = $_POST['name'];
		$college = $_POST['college'];
		$country = $_POST['country'];
		$message = $_POST['message'];
		$filename = $_FILES['pic']['name'];
		$target = "../Images/";
		$target1 = $target.$filename;

		if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){

			if($_FILES['pic']['error']>0)
				{
					echo "Error...".$_FILES['pic']['error'];
				}

	else
	{
		if(file_exists($target1))
			{
				echo "File Exits"; 
				exit;
			}

		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){
			$qry = "INSERT INTO tbl_testimonials(StudentName, University, Country, Message, Image)  VALUES ('$name', '$college', '$country', '$message', '$filename')";
			$inst = mysql_query($qry, $con);
			if(!$inst){
				echo "Error in Query.";
				exit();
			}
			else{
				header("location:../dashboard.php");
			}
		}



}

		}
		else{
			echo "Invalid File Format";
		}




}




else if ($topic == 5) {
	$name = $_POST['college'];
	$country = $_POST['country'];
	$faculty = $_POST['course'];
	$detail = $_POST['detail'];
	$availableSeats = $_POST['seats'];
	$fee = $_POST['fee'];
	$logo = $_FILES['logo']['name'];
	$pic = $_FILES['pic']['name'];
	$target = "../Images/";
	$target1 = $target.$logo;
	$target2 = $target.$pic;

			if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' ||$_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){

				if( $_FILES['logo']['type'] == 'image/jpeg' || $_FILES['logo']['type'] == 'image/pjpeg' ||$_FILES['logo']['type'] == 'image/png' || $_FILES['logo']['type'] == 'image/ppng' && $_FILES['logo']['size']>300000){

					if($_FILES['pic']['error']>0 || $_FILES['logo']['error']>0)
				{
					echo "Error...".$_FILES['pic']['error'];
				}

				else
				{
		if(file_exists($target1) && file_exists($target2))
			{
				echo " One of the File Exits, review once"; 
				exit;
			}

		else if(move_uploaded_file($_FILES['logo']['tmp_name'], $target1)){
			if(move_uploaded_file($_FILES['pic']['tmp_name'], $target2)){

			$qry = "INSERT INTO tbl_college(CollegeName, CollegeLogo, CollegeDetail, AvailableSeats, FeeStructure, Image, cname, fname)  VALUES ('$name', '$logo', '$detail', '$availableSeats', '$fee', '$pic', '$country', '$faculty')";
			$inst = mysql_query($qry, $con);
			if(!$inst){
				echo "Error in Query.";
				exit();
			}
			else{
				header("location:../dashboard.php");
			}
		}

		else{
			echo "Error";
		}
	}

	else{
		echo "Error";
	}
		}
	
	}



else{
	echo "Invalid File Format";
}

}



else{
	echo "Invalid File Format";
}


}


else if ($topic == 6) {
	$caption = $_POST['caption'];
	$filename = $_FILES['pic']['name'];
	$target = "../Images/";
	$target1 = $target.$filename;

	if($_FILES['pic']['type'] == 'image/jpeg' || $_FILES['pic']['type'] == 'image/pjpeg' || $_FILES['pic']['type'] == 'image/jpg' || $_FILES['pic']['type'] == 'image/pjpg' || $_FILES['pic']['type'] == 'image/png' || $_FILES['pic']['type'] == 'image/ppng' && $_FILES['pic']['size']>600000){
			if($_FILES['pic']['error']>0)
				{
					echo "Error...".$_FILES['pic']['error'];
				}
				else
				{
		if(file_exists($target1))
			{
				echo " File Exits, review once"; 
				exit;
			}

		else if(move_uploaded_file($_FILES['pic']['tmp_name'], $target1)){
			$qry = "INSERT INTO tbl_gallery(Type, FileName, Caption)  VALUES ('Photos', '$filename', '$caption')";
			$inst = mysql_query($qry, $con);
			if(!$inst){
				echo "Error in Query.";
				exit();
			}
			else{
				header("location:../dashboard.php");
			}
		}

		else{
			echo "Error";
		}
	}


		}

	
	else{
		echo "Invalid File Format";
	}
}


else if ($topic == 7) {
	$topic = $_POST['topic'];
	$detail = $_POST['detail'];
	$date = date("y/m/d");

	$qry = "INSERT INTO tbl_news(Topic, News, DateandTime) VALUES('$topic', '$detail', '$date')";
	$inst  = mysql_query($qry, $con);
	if(!$inst){
		echo "Error";
	}
	else{
		header("location: ../dashboard.php");
	}
}



?>
<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <?php include 'Includes/link.inc';
	include 'Includes/connection.inc';
	 ?>
</head>
<body>

<div class="container-fluid">
 <div id="sub-container" style="min-height: 620px;">
  <?php include 'Includes/header.inc'; ?>
  
<div style="width: 100%; height: 100px;"></div>
  <?php $topic = $_GET['topic'];

  if($topic == "testimonials"){ 
  	$qry = "select * from tbl_testimonials";
  	$testimonials = mysql_query($qry, $con);
  	?>

<div class="row" style="width: 80%; margin-left: auto; margin-right: auto; text-align: left;">
	<center><h1>Students' Testimonials</h1></center>
	<?php while($testimonials_data = mysql_fetch_array($testimonials)){
		?>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="ttestimonials_thumbnail" style=" margin-bottom: 10px; margin-left: 10px; width: 49%;">
			<div id="image" style="float: left; margin-left: -5px; margin-top: 20px;"><img src="Images/<?php echo $testimonials_data['Image'] ?>"></div>
			<div id="text" style="margin-left: 10px; float: right; width: 75%; clear: both; margin-top: -120px;">
			<p style="text-align: left;"><?php echo $testimonials_data['Message'] ?></p>
			<h4><?php echo $testimonials_data['StudentName'] ?>, <?php echo $testimonials_data['Country'] ?></h4>
			</div>
		</div>
		<?php
	}

?>
</div>


  	<?php
  }

else if($topic =="our_team"){

	$qry = "select * from tbl_team";
	$team = mysql_query($qry, $con);
	?>
	<div class="row" style="width: 80%; margin-left: auto; margin-right: auto;">
		<center><h1>Our Team</h1></center>
		<?php 
		while($team_data = mysql_fetch_array($team)){ ?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="height: 400px;  padding-top: 10px; margin-left: 0px;  margin-top: 10px; margin-bottom: 10px; width: 32%; margin-left: 10px;">
			<div style="width: 100%; height: 150px;"><center><img src="Images/<?php echo $team_data['Image'] ?>" style="width: 100px; height: 100px; border-radius: 100%;"><br> <h4><?php echo $team_data['Name'] ?><br> <?php echo $team_data['Position']; ?></h4></center></div><br>
			<div style="width: 100%; height: 250px;"><p style="text-align: left;"><?php echo $team_data['Message']; ?></p></div>
		</div>

<?php 
		}


		?>


	</div>
<?php }
else if ($topic == "company_profile") {
	$qry = "select * from tbl_about where Topic='Company Profile'";
	$company_profile = mysql_query($qry, $con);
	?>
	<div class="row" style="width: 80%; margin-left: auto; margin-right: auto;">
		<center><h1>Company Profile</h1></center>
		<?php while ($company_profile_data = mysql_fetch_array($company_profile)) { ?>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p><?php echo $company_profile_data['Data'] ?></p>
		</div>
			
		<?php } ?>
	</div>
	<?php
}
else if ($topic == "message_from_md") {
	$qry = "select * from tbl_about where Topic='Message From MD'";
	$message_from_md = mysql_query($qry, $con);
	?>
	<div class="row" style="width: 80%; margin-left: auto; margin-right: auto; text-align: left;">
		<center><h1>Message From M.D</h1><br>

			<img src="Images/md.jpg" style="width: 150px; height: 150px; border-radius: 100%;"/>
			<br><h4>Name of The Director</h4>
		</center>
		<?php while ($message_from_md_data = mysql_fetch_array($message_from_md)) {
			?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p><?php echo $message_from_md_data['Data']; ?></p>
			</div>
			<?php
		} 
?>
	</div>
	<?php
}

    ?>





</div>
<div class="footer">&copy; Oblique Education Foundation Pvt. Ltd., Koteshwor</div>
</div>
<script type="text/javascript" src="Scripts/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/bootsrap.min.js"></script>
</body>
</html>
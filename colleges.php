<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Oblique</title>
	<?php include 'Includes/link.inc';
	include 'Includes/connection.inc';
	$topic = $_GET['country'];
	 ?>


</head>
<body>
	<div class="container-fluid">
		<div id="sub-container" style="min-height: 620px;">
			<?php include 'Includes/header.inc'; ?>
			<div style="width: 100%; height: 100px;"></div>
			<?php if($topic == 'all'){ 

				$qry = "select * from tbl_college";


				?>
			<center><h1>Colleges We Represent</h1></center>



		<?php }

		else {
			$course = $_GET['course'];
			if($course == 'all'){
				$qry = "select * from tbl_college where cname='$topic'";
			}
				else{$qry = "select * from tbl_college where cname='$topic' and fname='$course'";}
				
			}
		

		?>
			
			<div class="row" style="width: 80%; margin-right: auto; margin-left: auto;">
				<?php 
				$college = mysql_query($qry, $con);

				while ($college_data = mysql_fetch_array($college)) {
					?>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 300px; margin-left: 10px;
					width: 48%; margin-bottom: 10px;" >
						<center><h3><?php echo $college_data['CollegeName'] ?>, <?php echo $college_data['cname'] ?></h3></center>
						<div id="image" style="width: 40%; float: left; margin-left: -10px;"><img src="Images/<?php echo $college_data['Image'] ?>" style="width: 100%; height: 100%;"/> </div>
						<div id="detail" style="width: 60%; float: right; text-align: left;"><p style="text-align: left;"><?php echo $college_data['CollegeDetail'] ?><br>
							<span style="font-weight: bold;">Available Seats: <?php echo $college_data['AvailableSeats'] ?><br>
							Fee Structure: $<?php echo $college_data['FeeStructure'] ?>/Year</span>
						</p>
						</div>

					</div>
					<?php
				}
				 ?>

			</div>
		</div>


<div class="footer">&copy; Oblique Education Foundation Pvt. Ltd.</div>
	</div>

<script type="text/javascript" src="Scripts/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/bootsrap.min.js"></script>
</body>
</html>
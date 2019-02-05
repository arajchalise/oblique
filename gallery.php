<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Oblique-Gallery</title>
	<?php include 'Includes/link.inc';
	include 'Includes/connection.inc';
	$topic = $_GET['topic'];
	 ?>

</head>
<body>
	<div class="container-fluid">
		<div id="sub-container" style="min-height: 620px;">
			<?php include 'Includes/header.inc'; ?>
		<div style="width: 100%; height: 100px;"></div>
				<div class="row" style="width: 80%; margin-right: auto; margin-left: auto;">
					<?php 
					if ($topic=== "videos") {
						echo "Sorry, We are working on It";
						exit;
					}

					else{
							$qry = "select * from tbl_gallery where Type='Photos'";
							$gallery = mysql_query($qry, $con);
						?>
						<center><h1>Photo Gallery</h1></center>
						<?php while ($gallery_data = mysql_fetch_array($gallery)) { ?>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 300px; margin-bottom: 20px;">
							<div class="thumbnail" style="height: 270px;">
								<img src="Images/<?php echo $gallery_data['FileName'] ?>" style="height: 90%; width: 100%;">
								<div class="caption" style="height: 30px;">
									<h3><?php echo $gallery_data['Caption'] ?></h3>
								</div>
							</div>

						</div>
						<?php }
						
						

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
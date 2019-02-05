<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Oblique-News and Events</title>
	<?php include 'Includes/link.inc';
	include 'Includes/connection.inc';
	 ?>

</head>
<body>
	<div class="container-fluid">
		<div id="sub-container" style="min-height: 620px;">
			<?php include 'Includes/header.inc'; ?>
			<div style="width: 100%; height: 120px;"></div>
			<div class="row" style="width: 80%; margin-left: auto; margin-right: auto;">
				<?php $qry = "select * from tbl_news order by id DESC";
				$news = mysql_query($qry, $con);
				while($news_data = mysql_fetch_array($news)){ ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3><?php echo $news_data['Topic'] ?></h3>
					<p style="text-align: left;"><?php echo $news_data['News'] ?><br>
						<span style="font-weight: bold;">Published on <?php echo $news_data['DateandTime'] ?></span></p>
				</div>
				
				<?php } ?>
			</div>
		</div>


<div class="footer">&copy; Oblique Education Foundation Pvt. Ltd.</div>
	</div>

<script type="text/javascript" src="Scripts/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/bootsrap.min.js"></script>
</body>
</html>
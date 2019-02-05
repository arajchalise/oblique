<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<?php include 'Includes/link.inc';
	include 'Includes/connection.inc';
	 ?>

</head>
<body>
	<div class="container-fluid">
		<div id="sub-container" style="min-height: 620px;">
			<?php include 'Includes/header.inc'; ?>
			<div style="width: 100%; height: 120px;"></div>
			<center><h1>Contact Us</h1></center>
			<div id="contact_form" style="width: 100%; margin-right: auto; margin-left: auto;">

<center><form method="post" action="Includes/contact_mail.php">
<table>
<tr><td>First Name:</td><td><input type="text" name="f_name" placeholder="Enter your first name..."/></td><td>Last Name:</td><td><input type="text" name="l_name" placeholder="Enter your last name..."/></td></tr>
<tr><td>Email Address:</td><td><input type="text" name="email" placeholder="Enter valid email address..."/></td><td>Mobile Number:</td><td><input type="text"  name="mob" placeholder="Enter your Mobile number..."/></td></tr>
<tr><td>Message:</td><td colspan="3"><textarea name="msg" placeholder="Write your message/feedback here ..."></textarea></td></tr>
<tr><td></td><td><input type="submit" value="Send" id="submit"/></td></tr>
</table>
</form>
</center>

			</div>
		</div>


<div class="footer">&copy; Oblique Education Foundation Pvt. Ltd.</div>
	</div>

<script type="text/javascript" src="Scripts/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/bootsrap.min.js"></script>
</body>
</html>
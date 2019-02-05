<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Oblique</title>
	<?php include 'Includes/link.inc'; ?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript" src="Scripts/validation.min.js"></script>
<script type="text/javascript" src="Scripts/ajax.js"></script>
	<script type="text/javascript">
		


	</script>
	<style type="text/css">
	body{
		background-image: url(Images/1.jpg);
		background-repeat: no-repeat;
	}
	#en-form .form-data .input-group-addon{ width: 200px; }
	#en-form .form-data .form-control{
		width: 300px;
	}
		
	</style>
	
	
	
	
</head>
<body>
<div class="container-fluid">
	<div class="sub-container" >
		<div id="header"><div id="logo"><img src="Images/logo.png" alt="Oblique"  /><span id="company-name"><a href="home.php">OBLIQUE EDUCATION<br> FOUNDATION PVT. LTD.</a></span><br><p id="slogan">"Where there is will there is way"</p>
			</div></div><div style="width: 100%; height: 120px;"></div>
		<div id="en-form" style="background: none;">
			<div class="form-data" style="width: 500px; float: right; margin-right: 200px;">
				<h3>Please Kindly Fill the Form</h3>
				<p style="font-size: 12px;">Basic Information; All Fields are necessary</p>
				<form method="post" action="Includes/mail.php">
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Full Name</span>
						<input type="text" name="name" class="form-control" placeholder="Enter your Full Name..." id="name" required />
						
					</div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Email</span>
						<input type="email" name="email" class="form-control" placeholder="Enter your valid Email..." id="email" required="">
						
					</div>

					<div class="input-group input-group-lg">
						<span class="input-group-addon">Contact No.</span>
						<input type="text" name="student-phone" class="form-control" placeholder="Enter your Contact Number..." id="sphone" required="">
						
					</div>
					

					<div class="input-group input-group-lg">
						<span class="input-group-addon">Passport Number</span>
						<input type="text" name="passport" class="form-control" placeholder="Enter your valid Passport Number..." id="pass" required />
						
					</div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Local Guardian</span>
						<input type="text" name="guardian" class="form-control" placeholder="Enter Local Guardian Name..." id="guardian" required="">
						
					</div>

					<div class="input-group input-group-lg">
						<span class="input-group-addon">Guardian's Contact No.</span>
						<input type="text" name="guardian-phone" class="form-control" placeholder="Enter Local Guardian Contact Number..." id="phone" required="">
						
					</div>

					

					<div class="input-group input-group-lg">
						<span class="input-group-addon">Desire Course</span>
						<select class="form-control" name="course" id="course" required>
							<option value="0">Select Course</option>
							<option value="MBBS">MBBS</option>
							<option value="BDS">BDS</option>
							<option value="BE">BE-Agriculture and Veterinary</option>
							<option value="BTech">BTech</option>
							<option value="Nursing">Nursing</option>

						</select>
						
					</div><br>

					<p style="font-size: 12px;">Educational Background; Fill the appropriate field; + fields are optional</p>
					
					<div class="input-group input-group-lg">
						<span class="input-group-addon">SEE/SLC School Name</span>
						<input type="text" name="schoolname" class="form-control" placeholder="Enter School Name..." id="schoolname" required />
						
					</div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Percentage</span>
						<input type="text" name="schoolpercentage" class="form-control" placeholder="Enter total Percentage you score..." id="schoolpercentage" required />
						
					</div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Completion Year</span>
						<input type="text" name="schoolcompletion" class="form-control" placeholder="Enter the year of your school Completion..." id="schoolcompletion" required />
						
					</div>


					<div class="input-group input-group-lg">
						<span class="input-group-addon">+2 College Name</span>
						<input type="text" name="plus2name" class="form-control" placeholder="Enter Intermediate School Name..." id="plus2name" required />
						
					</div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Percentage</span>
						<input type="text" name="plus2percentage" class="form-control" placeholder="Enter total Percentage you score..." id="plus2percentage" required />
						
					</div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Completion Year</span>
						<input type="text" name="plus2completion" class="form-control" placeholder="Enter the year of your school Completion..." id="plus2completion" required />
						
					</div>



					<div class="input-group input-group-lg">
						<span class="input-group-addon">Bachelors College Name+</span>
						<input type="text" name="collegename" class="form-control" placeholder="Enter College Name..." id="collegename"  style="width: 305px;" />
						
					</div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Percentage+</span>
						<input type="text" name="collegepercentage" class="form-control" placeholder="Enter total Percentage you score..." id="collegepercentage"  />
						
					</div>
					<div class="input-group input-group-lg">
						<span class="input-group-addon">Completion Year+</span>
						<input type="text" name="collegecompletion" class="form-control" placeholder="Enter the year of your college Completion..." id="collegecompletion"  />
						
					</div>
					<center><button class="btn btn-primary btn-lg" type="submit" style="width: 120px; margin-top: 10px;">Submit</button></center>



				</form>

			</div>
		</div>
		<div id="converter" style="position: fixed; margin-top: 100px; ">
			<?php include 'converter.php'; ?>
		</div>
		<div style="width: 100%; height: 30px; clear: both;"></div>
	</div>
	
<div class="footer"> &copy; Oblique Education Foundation Pvt. Ltd.</div>
</div>
</body>
</html>
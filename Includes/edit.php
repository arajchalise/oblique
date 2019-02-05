<style type="text/css">
	body{
		width: 80%;
		margin-right: auto;
		margin-left: auto;
	}

	textarea{
		width: 300px;
		height: 200px;
	}




</style>



<?php 
include 'connection.inc';
$topic = $_GET['topic'];

if($topic==1){
	$id = $_GET['profile'];
	
	$row = mysql_query("select * from tbl_about where id='$id'", $con);
	$row_data = mysql_fetch_array($row);
	?>
	<form action="update.php?topic=1" method="post">
		<input type="" name="iid" value="<?php echo $row_data['id'] ?>" hidden>
		<table><tr><td>Company Profile:</td><td> <textarea name="profile"><?php echo $row_data['Data'] ?></textarea></td><td><input type="submit" name="" value="Update"></td></tr></table>

	</form>
	<?php 

}

else if($topic==2){
	$id = $_GET['message'];
	$row = mysql_query("select * from tbl_about where id='$id'", $con);
	$row_data = mysql_fetch_array($row);
	?>
	<form action="update.php?topic=2" method="post">
		<input type="" name="iid" value="<?php echo $row_data['id'] ?>" hidden>
		<table><tr><td>Message:</td><td> <textarea name="message"><?php echo $row_data['Data'] ?></textarea></td><td><input type="submit" name="" value="Update"></td></tr></table>

	</form>
	<?php 
}


else if($topic == 3){
	$id = $_GET['team'];
	$row = mysql_query("select * from tbl_team where id='$id'");
	$row_data = mysql_fetch_array($row);
	$img = $row_data['Image'];
	?>
	<form action="update.php?topic=3" method="post">
		<input type="" name="iid" value="<?php echo $row_data['id'] ?>" hidden>
		<table>
			<tr>
				<td>Name:</td><td><input type="text" name="name" value="<?php echo $row_data['Name'] ?>"></td>

			</tr>
			<tr>
				<td>Position:</td><td><input type="text" name="position" value="<?php echo $row_data['Position'] ?>"></td>

			</tr>
			<tr>
				<td>Message:</td><td><textarea name="message"><?php echo $row_data['Message'] ?></textarea></td>

			</tr>
			<tr><td></td><td><input type="text" name="pic" value="<?php echo $row_data['Image'] ?>" hidden></td></tr>
			<tr><td colspan="2"><input type="submit" name="" value="Update"></td></tr>
		</table>


	</form>
	<?php
}

else if($topic==4){
	$id = $_GET['testimonials'];
	$row = mysql_query("select * from tbl_testimonials where id='$id'");
	$row_data = mysql_fetch_array($row);
	$img = $row_data['Image'];
?>
	<form action="update.php?topic=4" method="post">
		<input type="" name="iid" value="<?php echo $row_data['id'] ?>" hidden>
		<table>
			<tr>
				<td>Name:</td><td><input type="text" name="name" value="<?php echo $row_data['StudentName'] ?>"></td>

			</tr>
			<tr>
				<td>University:</td><td><input type="text" name="colleges" value="<?php echo $row_data['University'] ?>"></td>

			</tr>
			<tr>
				<td>Country:</td><td><input type="text" name="country" value="<?php echo $row_data['Country'] ?>"></td>

			</tr>
			<tr>
				<td>Message:</td><td><textarea name="message"><?php echo $row_data['Message'] ?>"</textarea></td>

			</tr>
			<tr><td></td><td><input type="text" name="pic" value="<?php echo $row_data['Image'] ?>" hidden></td></tr>
			<tr><td colspan="2"><input type="submit" name="" value="Update"></td></tr>
		</table>


	</form>
<?php
}

else if($topic==5){
	$id = $_GET['college'];
	$row = mysql_query("select * from tbl_college where id='$id'");
	$row_data = mysql_fetch_array($row);
	$img = $row_data['Image'];
	
?>
	<form action="update.php?topic=5" method="post">
		<input type="" name="iid" value="<?php echo $row_data['ID'] ?>" hidden>
		<table>
			<tr>
				<td>Name:</td><td><input type="text" name="name" value="<?php echo $row_data['CollegeName'] ?>"></td>

			</tr>
			
			<tr>
				<td>Country:</td><td><input type="text" name="country" value="<?php echo $row_data['cname'] ?>"></td>

			</tr>
			<tr>
				<td>Faculty:</td><td><input type="text" name="course" value="<?php echo $row_data['fname'] ?>"></td>

			</tr>
			<tr>
				<td>Detail:</td><td><textarea name="detail"><?php echo $row_data['CollegeDetail'] ?>"</textarea></td>

			</tr>
			<tr>
				<td>Available Seats:</td><td><input type="text" name="seats" value="<?php echo $row_data['AvailableSeats'] ?>"/></td>

			</tr>
			<tr>
				<td>Fee Structure:</td><td><input type="text" name="fee" value="<?php echo $row_data['FeeStructure'] ?>" /></td>

			</tr>
			<tr><td></td><td><input type="text" name="logo" value="<?php echo $row_data['CollegeLogo'] ?>" hidden></td></tr>
			<tr><td></td><td><input type="text" name="pic" value="<?php echo $row_data['Image'] ?>" hidden></td></tr>
			<tr><td colspan="2"><input type="submit" name="" value="Update"></td></tr>
		</table>


	</form>
	<?php
}

else if($topic== 7){
	$id = $_GET['news'];

	$row = mysql_query("SELECT * FROM tbl_news WHERE id='$id'", $con);
	$row_data = mysql_fetch_array($row);
	?>
	<form action="update.php?topic=7" method="post">
		<input type="" name="iid" value="<?php echo $row_data['id']?>" hidden>
		<table>
			<tr>
				<td>Topic</td><td><input type="text" name="top_ic" value="<?php echo $row_data['Topic'] ?>"></td>

			</tr>
			<tr><td>News</td><td><textarea name="detail"><?php echo $row_data['News'] ?></textarea></td></tr>
			<tr>
				<td colspan="2"><input type="submit" name="" value="Update"></td>
			</tr>
		</table>
	</form>
	<?php 
}


?>
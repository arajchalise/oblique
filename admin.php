<?php session_start();
include 'Includes/connection.inc';
if(isset($_SESSION['error'])) $error = $_SESSION['error'];

else{
  $error = "";
}
if(isset($_SESSION['user'])) $user = $_SESSION['user'];
else{
  $user = "";
}

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php include 'Includes/link.inc'; ?>
  <link rel="stylesheet" type="text/css" href="Style/admin.css">
  <style type="text/css">
    .sub-container{
      min-height: 600px;
      background: ;
    }
  </style>

</head>
<body>
<div class="container-fluid">
  <div class="sub-container">

  <div id="header"><div id="logo"><img src="Images/logo.png" alt="Oblique"  /><span id="company-name"><a href="home.php">OBLIQUE EDUCATION<br> FOUNDATION PVT. LTD.</a></span><br><p id="slogan">"Where there is will there is way"</p>
      </div></div><div style="width: 100%; height: 120px;"></div>
<div id="login">
  <br><h4>Please, Make urself known to us</h4>
  <form action="Includes/login.php" method="post">
    <div id="warning"><p><?php echo $error; ?></p></div>
    <span id="form-txt">Username</span><br><input type="text" name="username" value="<?php echo $user ?>">
    <br><span id="form-txt">Password</span><br><input type="Password" name="password">
    <br>
    <br><input type="submit" value="Log In" class="btn btn-primary btn-lg" style="width: 120px;">
  </form>

</div>
</div>

<div class="footer">&copy; Oblique Education Foundation Pvt. Ltd.</div>
</div>
</body>
</html>


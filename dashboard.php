
<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['user'] == ""){
  header ("location: admin.php");
  exit;
}
  else{
    $name = $_SESSION['name'];
    
    
  }
  ?>
<?php 
include 'Includes/connection.inc';
$name = $_SESSION['name'];

?>


<!DOCTYPE html>
<html>
<head>
  <title>Welcome to Oblique-Admin Dashboard</title>
  <?php include 'Includes/link.inc'; ?>
  <link rel="stylesheet" type="text/css" href="admin.css">
  <script type="text/javascript" src="scripts/admin.js"></script>
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

  <?php include 'Includes/admin-header.inc'; ?><div style="width: 100%; height: 120px;"></div>
      <div ></div>

      <div class="main-page" style="width: 80%; margin-left: auto; margin-right: auto;">
        <div id="company_profile"><br>
          <center><h1>Company Profile</h1></center>
          <form action="Includes/insert.php?topic=1" method="post">
            <table>
              <tr><td>Company Detail:</td><td style="width: 85%;"><textarea name="profile" style="width: 100%;"></textarea></td>
              <td><input type="submit" name="" value="Insert"></td></tr>
            </table>
          </form>
          <?php $qry = "select * from tbl_about where Topic='Company Profile'";
                      $company_profile = mysql_query($qry, $con);
                      while ($company_profile_data = mysql_fetch_array($company_profile)) { ?>
                      <table><tr><td><p><?php echo $company_profile_data['Data']; ?></p></td><td>
                        <a href="Includes/del.php?topic=1 && profile=<?php echo $company_profile_data['id'] ?>">Del</a>
                        <a href="Includes/edit.php?topic=1 && profile=<?php echo $company_profile_data['id'] ?>">Edit</a>
                      </td></tr></table>
                        
                        <?php
                      }
           ?>



        </div>

        <div id="message_from_md" style="display: none;"><br>
          <center><h1>Message From MD</h1></center>
          <form action="Includes/insert.php?topic=2" method="post">
            <table>
              <tr><td>Message:</td><td style="width: 90%"><textarea name="message" style="width: 100%;"></textarea></td>
              <td><input type="submit" name="" value="Insert"></td></tr>
            </table>
          </form>
          <?php $qry = "select * from tbl_about where Topic='Message From MD'";
                      $message_from_md = mysql_query($qry, $con);
                      while ($message_from_md_data = mysql_fetch_array($message_from_md)) { ?>
                      <table><tr><td><p><?php echo $message_from_md_data['Data']; ?></p></td><td>
                        <a href="Includes/del.php?topic=2 && message=<?php echo $message_from_md_data['id'] ?>">Del</a>
                        <a href="Includes/edit.php?topic=2 && message=<?php echo $message_from_md_data['id'] ?>">Edit</a>
                      </td></tr></table>
                        
                        <?php
                      }
           ?>



        </div>

        <div id="our_team" style="display: none;">
          <?php 
          $qry = "select * from tbl_team";
  $team = mysql_query($qry, $con);
  ?>
  <div class="row" style="width: 100%; margin-left: auto; margin-right: auto;"><br>
    <center><h1>Our Team</h1></center>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="height: 400px;  padding-top: 10px; margin-left: 0px;  margin-top: 10px; margin-bottom: 10px; width: 32%; margin-left: 10px;">
      <form action="Includes/insert.php?topic=3" method="post" enctype="multipart/form-data">
      <table>
        <tr><td>
        Name: </td><td><input type="text" name="name"></td></tr>
       <tr><td>Position:</td><td> <input type="text" name="position"></td></tr>
       <tr><td>Message:</td><td> <textarea name="message"></textarea></td></tr>
       <tr><td>Photo:</td><td> <input type="file" name="pic"/></td></tr>
       <tr><td colspan="2"><input type="submit" name="" value="Insert" /></td></tr>

       </table>

     </form>
    </div>
    <?php 
    while($team_data = mysql_fetch_array($team)){ ?>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="height: 400px;  padding-top: 10px; margin-left: 0px;  margin-top: 10px; margin-bottom: 10px; width: 32%; margin-left: 10px;">
      <a href="Includes/del.php?topic=3 && team=<?php echo $team_data['id'] ?>" style="position: absolute; margin-left: 90%; margin-top: 10px; margin-right: 10px;">Del</a>
      <a href="Includes/edit.php?topic=3 && team=<?php echo $team_data['id'] ?>" style="position: absolute; margin-left: 90%; margin-top: 25px; margin-right: 10px;">Edit</a>

     <div style="width: 100%; height: 150px;"><center><img src="Images/<?php echo $team_data['Image'] ?>" style="width: 100px; height: 100px; border-radius: 100%;"><br> <h4><?php echo $team_data['Name'] ?><br> <?php echo $team_data['Position']; ?></h4></center></div><br>
      <div style="width: 100%; height: 250px;"><p style="text-align: left;"><?php echo $team_data['Message']; ?></p></div>
    </div>

<?php 
    } ?>


        </div>


      </div>

<div id="testimonials" style="display: none;">
  <?php
$qry = "select * from tbl_testimonials";
    $testimonials = mysql_query($qry, $con);
    ?>

<div class="row" style="width: 100%; margin-left: auto; margin-right: auto; text-align: left;"><br>
  <center><h1>Students Testimonials</h1></center>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="ttestimonials_thumbnail" style=" margin-bottom: 10px; margin-left: 10px; width: 49%;">
     <form action="Includes/insert.php?topic=4" method="post" enctype="multipart/form-data">
      <table>
        <tr><td>
       Student Name: </td><td><input type="text" name="name"></td></tr>
       <tr><td>University/College:</td><td> <input type="text" name="college"></td></tr>
       <tr><td>Country: </td><td><input type="text" name="country"></td></tr>
       <tr><td>Message:</td><td> <textarea name="message"></textarea></td></tr>
       <tr><td>Photo:</td><td> <input type="file" name="pic"/></td></tr>
       <tr><td colspan="2"><input type="submit" name="" value="Insert" /></td></tr>

       </table>

     </form>
    </div>
  <?php while($testimonials_data = mysql_fetch_array($testimonials)){
    ?>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="ttestimonials_thumbnail" style=" margin-bottom: 10px; margin-left: 10px; width: 49%;">
      <a href="Includes/del.php?topic=4 && testimonials=<?php echo $testimonials_data['id'] ?>" style="position: absolute; margin-left: 70%; margin-top: 10px; margin-right: 10px;">Del</a>
      <a href="Includes/edit.php?topic=4 && testimonials=<?php echo $testimonials_data['id'] ?>" style="position: absolute; margin-left: 70%; margin-top: 25px; margin-right: 10px;">Edit</a>
      <div id="image" style="float: left; margin-left: -5px; margin-top: 20px;"><img src="Images/<?php echo $testimonials_data['Image'] ?>"></div>
      <div id="text" style="margin-left: 10px; float: right; width: 75%; clear: both; margin-top: -120px;">
      <p style="text-align: left;"><?php echo $testimonials_data['Message'] ?></p>
      <h4><?php echo $testimonials_data['StudentName'] ?><br><?php echo $testimonials_data['University'] ?>, <?php echo $testimonials_data['Country'] ?></h4>
      </div>
    </div>
    <?php
  }

?>
</div>  



</div>

<div id="colleges" style="display: none;">
<?php
        $qry = "select * from tbl_college";
    ?>
      
      <div class="row" style="width: 100%; margin-right: auto; margin-left: auto;"><br>
        <center><h1>Colleges We Represent</h1></center>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 300px; margin-left: 10px;
          width: 49%; margin-bottom: 10px;" >
           <form method="post" action="Includes/insert.php?topic=5" enctype="multipart/form-data">
             <table style="overflow: hidden;">
               <tr><td>College: </td><td><input type="text" name="college"></td>
               <td>Country: </td><td><input type="text" name="country"></td></tr>
               <tr><td>Course: </td><td>
                <select name="course">
                 <option value="MBBS">MBBS</option>
                 <option  value="BDS">BDS</option>
                 <option value="btech">B Tech</option>
                 <option value="nursing">Nursing</option>
                 <option value="BE">BE- Agriculture and Veterinary</option>
               </select></td></tr>
               <tr><td>College Detail</td><td colspan="3"><textarea name="detail" style="width: 80%;"></textarea ></td></tr>
               <tr><td>Available Seats</td><td><input type="text" name="seats"></td><td>Fee Structure</td><td><input type="text" name="fee"></td></tr>
               <tr><td>Logo</td><td><input type="file" name="logo"></td><td>Image</td><td><input type="file" name="pic"></td></tr>
               <tr><td colspan="4"><input type="submit" name="" value="Insert"></td></tr>
             </table>
           </form>

          </div>
        <?php 
        $college = mysql_query($qry, $con);

        while ($college_data = mysql_fetch_array($college)) {
          ?>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 300px; margin-left: 10px;
          width: 49%; margin-bottom: 10px;" >
          <a href="Includes/del.php?topic=5 && college=<?php echo $college_data['ID'] ?>" style="position: absolute; margin-left: 90%; margin-top: 10px; margin-right: 10px;">Del</a>
          <a href="Includes/edit.php?topic=5 && college=<?php echo $college_data['ID'] ?>" style="position: absolute; margin-left: 90%; margin-top: 25px; margin-right: 10px;">Edit</a>
            <center><h3><?php echo $college_data['CollegeName'] ?>, <?php echo $college_data['cname'] ?></h3></center>
            <div id="image" style="width: 40%; float: left; margin-left: -10px;"><img src="Images/<?php echo $college_data['Image'] ?>" style="width: 100%;"/> </div>
            <div id="detail" style="width: 60%; float: right; text-align: left;"><p style="text-align: left;"><?php echo $college_data['CollegeDetail'] ?></p>
              <p>Available Seats: <?php echo $college_data['AvailableSeats'] ?>
                <br>Fee Structure: <?php echo $college_data['FeeStructure'] ?></p>
            </div>

          </div>
          <?php
        }
         ?>

      </div>  
</div>


<div id="news" style="display: none;">
<div class="row">
  <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height: 300px;">
      <form method="post" action="Includes/insert.php?topic=7">
        <table>
          <tr><td>News Topic</td><td><input type="text" name="topic"></td></tr>
          <tr><td>Detail</td><td><textarea name="detail"></textarea></td></tr>
          
          <tr><td><input type="submit" name="" value="Insert"></td></tr>
        </table>
      </form>
  </div>

  <?php $qry = "select * from tbl_news order by id DESC";
        $news = mysql_query($qry, $con);
        while($news_data = mysql_fetch_array($news)){ ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <table><tr><td><h3><?php echo $news_data['Topic'] ?></h3>
          <p><?php echo $news_data['News'] ?></p></td><td>
            <a href="Includes/del.php?topic=7 && news=<?php echo $news_data['id'] ?>">Del</a>
            <a href="Includes/edit.php?topic=7 && news=<?php echo $news_data['id'] ?>">Edit</a>
          </td></table>
        </div>
        
        <?php } ?>
</div>  




</div>


<div id="gallery" style="display: none;">

  <?php $qry = "select * from tbl_gallery where Type='Photos'";
              $gallery = mysql_query($qry, $con);
            ?>
            <div class="row">
            <br><center><h1>Gallery</h1></center>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 300px; margin-bottom: 20px;">
              <div class="thumbnail" style="height: 270px;">
                <center>
               <form action="Includes/insert.php?topic=6 && type=photo" method="post" enctype="multipart/form-data" style="margin-top: 50px;">
                <input type="file" name="pic" />
                 Caption: <input type="text" name="caption" /><br>
                 <input type="submit" name="" value="Insert" />
               </form>
               </center>
              </div>

            </div>
            <?php while ($gallery_data = mysql_fetch_array($gallery)) { ?>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="height: 300px; margin-bottom: 20px;">
                <a href="Includes/del.php?topic=6 && image=<?php echo $gallery_data['id'] ?>" style="position: absolute; margin-left: 80%; margin-top: 10px; margin-right: 20px;">Del</a>
              <div class="thumbnail" style="height: 270px;">
                <img src="Images/<?php echo $gallery_data['FileName'] ?>" style="height: 90%; width: 100%;">
                <div class="caption" style="height: 30px;">
                  <h3><?php echo $gallery_data['Caption'] ?></h3>
                </div>
              </div>

            </div>
            <?php }
?>




</div>
</div>




    </div>


</div>

<div class="footer">&copy; Oblique Education Foundation Pvt. Ltd.</div>
</div>
</body>
</html>



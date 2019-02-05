<!DOCTYPE html>
<html>
<head>
  <title>Welcome To Oblique</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="keywords" content="oblique, education consultancy">

<style>

</style>
  <?php include 'Includes/link.inc';
  include 'Includes/connection.inc';
   ?>
  
  <script type="text/javascript">

    (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


  </script>
</head>
<body>

<div class="container-fluid">
 <div id="sub-container">
  <?php include 'Includes/header.inc'; ?>
<div style="width: 100%; height: 00px; clear: both;"></div>
<div class="video-container">
  <video class="video" autoplay loop ><source src="2.mp4" type="video/mp4"></video>
</div>
<!--<div id="theCarousel">
    <div class="carousel" data-flickity='{ "autoPlay": true }'>
        <div class="carousel-cell" style="background: url(Images/1.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
          <h1 style="margin-left: 50%; margin-top: 250px; color: #000; font-weight: bold;">Wants to become a Doctor??<br>Visit Us We Will Guide You</h1>
          <a class="btn btn-primary btn-lg" role="button" href="contact.php" style="margin-left: 60%;">Contact Us</a>
          
        </div>
        <div class="carousel-cell" style="background: url(Images/2.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">

        </div>
        
      </div> 

</div> -->
</div>
<div id="whyus">
  <div class="whyus" style="color: #fff;">
    <center><h1 style="padding-top: 10px;">Why Us?</h1></center>
    <p style="text-align: center;">We are official representatice of the different Universities. We are working with varieties of country such as Bangladesh, India, Japan, China, Austria, Poland etc. We are giving exclusive free service before visa like Assistance on Admission processes, helping on Documentation and we give carrer counseling to our student. Pre visa counseling  helps student to get visa and pre departure orientation helps student to get settle in the new environment.</p>
    <center><a class="btn btn-lg btn-primary" role="button" href="about.php?topic=company_profile">Read More</a></center>
  </div>
</div>

<div id="what-we-offer">
    <div class="what-we-offer">
      <h1>What We Offer?</h1>
      <p>We Offer variety of services for our student through out their processing for the free. We charge no cost until they got their visa. Some of the services are;</p>
      <div class="row" style="color: #fff;">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" id="box"><h3>Admission</h3>
        <hr size="10px;" style="width: 100%;">
        <li>Help to choose right University and Course</li>
        <li>Information on Courses and College</li>
        <li>Application Processing reference and SOP</li>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" id="box"><h3>Counseling</h3>
        <hr size="10px;" style="width: 100%;">
        <li>Pre Visa Counseling</li>
        <li>Pre Departure Orientation</li>
        <li>Free Career Counseling</li>
        <li>Counseling about Quality Higher Education</li>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" id="box"><h3>Documentation</h3>
        <hr size="10px;" style="width: 100%;">
        <li>Pre Visa Documentation</li>
        <li>Bank Loan Assistance</li>
        <li>Assistance on Other Documentation</li>
      </div>
      
        </div>
    </div>

</div>

<div class="associate">
  <center><h1>Colleges We Represent</h1>
    <p>We are the official representative of the different colleges of different countries. We represent the college from different Country so our student can choose best among them and persue their higher study in their dream University</p></center><br><br>
  <center>
    <?php 
    $qry = "select CollegeLogo from tbl_college";
    $row = mysql_query($qry);
    while($row1 = mysql_fetch_array($row)){
    if(!$row1){
      ?>
      <p>Contents are being uploaded</p>
    <?php }
    else{
      ?>
      <img src="Images/<?php echo $row1['CollegeLogo'] ?>" style="width: 100px; height: 100px; margin-left: 10px;"/>
      <?php
    }
  }
    ?>
    
  </center>


</div>
  <div id="student-testimonials">
    <center><h1>Students' Testimonials</h1></center><br><br>
    <div class="carousel" data-flickity='{ "autoPlay": true }'>
        <?php 
        $qry_test = "SELECT *
                     FROM `tbl_testimonials`
                     ORDER BY id DESC
                     LIMIT 0 , 5";
        $row_test = mysql_query($qry_test, $con);
        while($row_data_test = mysql_fetch_array($row_test)){

          ?>
          <div class="carousel-cell" style="text-align: center;">
            <div id="msg"><p><?php echo $row_data_test['Message'] ?></p></div>
            <div id="img"><img src="Images/<?php echo $row_data_test['Image'] ?>"><br>
              <b><p><?php echo $row_data_test['StudentName']; ?><br>
              <?php echo $row_data_test['University'] ?>, <?php echo $row_data_test['Country']; ?></p></b>
            </div>
          </div>
          <?php
        }
        ?>
        
      </div>

  </div>

<div class="country-we-serve" style="margin-bottom: 10px;">
  <center><h1>Countries We Serve</h1></center>
  <center>
    <p>We are sending our students for higher studies in different Countries according to their choice, their academic level and the course they want to do in future.</p>
    <img src="Images/india_logo.png" style="width: 100px; height: 100px; margin-left: 15px;" alt="India" />
    <img src="Images/bangladesh_logo.png" style="width: 100px; height: 100px; margin-left: 15px;" alt="Bangladesh" />
    <img src="Images/poland_logo.png" style="width: 100px; height: 100px; margin-left: 15px;" alt="Poland" />
    <img src="Images/philippines_logo.png" style="width: 100px; height: 100px; margin-left: 15px;" alt="Phillipines" />
     
  </center>


</div>
<div id="quick_links">
  <div class="quick_links">
    <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><h3>Our Contacts</h3><br>
      <p>Oblique Education Foundation Pvt. Ltd.<br>Koteshwor-35, <br>Kathmandu, Nepal<br>Near Overhead Bridge<br><br>01-4601262<br>9851102779,9851102780<br> info@oblique.edu.np</p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
      <h3>Quick Links</h3><br>
      
        <p><a href="about.php?topic=company_profile">Company Profile</a><br>
          <a href="about.php?topic=our_tem">Our Team</a><br>
          <a href="about.php?topic=message_from_md">Message From MD</a><br>
          <a href="colleges.php?country=bangladesh && course=all">Study in Bangladesh</a><br>
          <a href="colleges.php?country=india && course=all">Study in India</a><br>
          <a href="colleges.php?country=china && course=all">Study in China</a><br>
          <a href="colleges.php?country=japan && course=all">Study in Japan</a><br>
          <a href="news.php">News and Events</a><br>
        </p>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" id="news">
      <h3>News & Upedates</h3>
      <marquee direction="up" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" width="100%"
height="" style="margin-bottom: -10px;">
<? 
$news = mysql_query("select * from tbl_news order by id desc limit 0, 5", $con);
while($row1 = mysql_fetch_array($news)){
  ?><br>
  <a href="news.php" style="color: #fff;"><h4><? echo $row1['Topic'] ?></h4>
  <p><? echo $row1['News']?></p></a>
  <?
}
?>
</marquee>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><h3>Like Us on Facebook</h3>
      <div id="fb-root"></div>
      <div class="fb-page" data-href="https://www.facebook.com/oblique.edu.np/" data-tabs="timeline" data-width="350px" data-height="200px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/oblique.edu.np/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/oblique.edu.np/">Oblique Education Foundation Pvt. Ltd</a></blockquote></div>
    </div>
    </div>

  </div>
</div>
<div style="height: 30px; background: #2E2F30;"></div>
<div class="footer">&copy; Oblique Education Foundation Pvt. Ltd.</div>
</div>
<script type="text/javascript" src="Scripts/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/bootsrap.min.js"></script>
</body>
</html>
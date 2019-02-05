<?php include 'Includes/connection.inc'; ?>

<div id="header">
    <div id="logo">
      <img src="Images/logo.png" alt="Olique" />
      <span id="company-name"><a href="home.php">OBLIQUE EDUCATION<br> FOUNDATION PVT. LTD.</a></span><br><p id="slogan">"Where there is will there is way"</p>
    </div>
    <div id="nav">
        <ul class="nav navbar-nav sm">
                
                  <li>
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">About Us
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#company_profile" id="company_profile_menu">Company Profile</a></li>
                            <li role="separator" class="divider"></li>
              <li><a href="#message_from_md" id="message_from_md_menu">Message From MD</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#our_team" id="our_team_menu">Our Team</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#testimonials" id="testimonials_menu">Testimonials</a></li>
            </ul>
          </li>


          <li><a href="#colleges" id="colleges_menu">Colleges</a></li>

        <li><a href="#news" id="news_menu">News and Events</a></li>
        <li><a href="#gallery" id="gallery_menu">Gallery</a></li>      
    </ul>
        <div id="name" style="float: right; width: 20%; height: 100%; ">
  <p>Welcome <?php echo $name ?></p>
  <a href="Includes/logout.php" style="margin-left: 30px;">Log Out</a>
</div>      
</div>

</div>
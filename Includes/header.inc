<?php include 'Includes/connection.inc'; ?>

<div id="header">
    <div id="logo">
      <img src="Images/logo.png" alt="Olique" />
      <span id="company-name"><a href="home.php">OBLIQUE EDUCATION<br> FOUNDATION PVT. LTD.</a></span><br><p id="slogan">"Where there is will there is way"</p>
    </div>
    <div id="nav">
        <ul class="nav navbar-nav sm">
          <li><a href="home.php">Home</a></li>
                
                  <li>
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">About Us
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="about.php?topic=company_profile">Company Profile</a></li>
                            <li role="separator" class="divider"></li>
              <li><a href="about.php?topic=message_from_md" >Message From MD</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="about.php?topic=our_team">Our Team</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="about.php?topic=testimonials">Testimonials</a></li>
            </ul>
          </li>


          <li>
          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Abroad Study
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <!--<?php 
                  $qry = "select CountryName from tbl_country";
                  $menu = mysql_query($qry, $con);
                  while($menu_data = mysql_fetch_array($menu)){
                  ?>
                  <li><a href="abroadstudy.php?topic=<?php echo $menu_data['CountryName']; ?>"><?php echo $menu_data['CountryName']; ?></a></li>
                  <li role="separator" class="divider"></li>
                  <?php
                }
                ?>-->
                
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bangladesh
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="colleges.php?country=bangladesh && course=MBBS">MBBS</a></li>
                      <li role="separator" class="divider" ></li>
                      <li><a href="colleges.php?country=bangladesh && course=BDS">BDS</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="colleges.php?country=bangladesh && course=BE"">BE-Agriculture & Veterinary</a></li>
                    </ul>

                </li>
                <li role="separator" class="divider"></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" >India
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="colleges.php?country=india && course=btech">B Tech.</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="colleges.php?country=india && course=nursing">Nursing</a></li>
                      
                    </ul>

                </li>
                <li role="separator" class="divider"></li>
                <li><a href="colleges.php?country=poland && course=all">Poland</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="colleges.php?country=phillipines && course=all">Phillipines</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="colleges.php?country=china && course=all">China</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="colleges.php?country=japan && course=all">Japan</a></li>
            </ul>
          </li>

          <li><a href="colleges.php?country=all">Colleges</a></li>

          <li>
          <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Gallery
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="gallery.php?topic=photos">Photo Gallery</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="gallery.php?topic=videos">Video Gallery</a></li>

            </ul>
          </li>
        <li><a href="news.php">News and Events</a></li>
        <li><a href="contact.php">Contact</a></li>      
    </ul>
              
</div>
</div>
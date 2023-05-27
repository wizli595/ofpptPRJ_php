<?php $this->view("header", $data); ?>

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->
<header id="header">
  <!-- BEGIN MENU -->
  <div class="menu_area">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index">OFPPT <span>Degree</span></a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index">Home</a></li>
            <li><a href="coursearchive">Course</a></li>
            <li><a href="eventsarchive">Events</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="blogarchive">Blog</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">registration<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="register">signIn</a></li>
                <li><a href="login">log In</a></li>
              </ul>
            </li>
            <li class="active"><a href="contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </div>
  <!-- END MENU -->
</header>
<!--=========== END HEADER SECTION ================-->

<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="imgBanner">
  <h2>Contact</h2>
</section>
<!--=========== END COURSE BANNER SECTION ================-->

<!--=========== BEGIN CONTACT SECTION ================-->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="title_area">
          <h2 class="title_two">We are OFPPT Degree</h2>
          <span></span>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="contact_form wow fadeInLeft">
          <form class="submitphoto_form">
            <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name">
            <input type="mail" class="wp-form-control wpcf7-email" placeholder="Email address">
            <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject">
            <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
            <input type="submit" value="Submit" class="wpcf7-submit">
          </form>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="contact_address wow fadeInRight">
          <h3>Address</h3>
          <div class="address_group">
            <p>some place 205 street</p>
            <p>Phone: 662-807-9585</p>
            <p>Email:contact@OFPPTdegree.com</p>
          </div>
          <div class="address_group">
            <ul class="footer_social">
              <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Youtube"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=========== END CONTACT SECTION ================-->

<!--=========== BEGIN GOOGLE MAP SECTION ================-->
<!-- <section id="googleMap">
      <iframe width="100%" height="500" frameborder="0" scrolling="no" 
      marginheight="0" marginwidth="0"
       src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=200+Lincoln+Ave,+Salinas,+CA,+USA&amp;aq=&amp;sll=30.977609,-95.712891&amp;sspn=42.157377,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=200+Lincoln+Ave,+Salinas,+California+93901-2639&amp;t=m&amp;z=14&amp;ll=32.2943009,-9.2206032,14&amp;output=embed"></iframe>
    </section> -->
<!--=========== END GOOGLE MAP SECTION ================-->

<!--=========== BEGIN FOOTER SECTION ================-->
<footer id="footer">
  <!-- Start footer top area -->
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-ld-3  col-md-3 col-sm-3">
          <div class="single_footer_widget">
            <h3>About Us</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
              scrambled it to make a type specimen book.</p>
          </div>
        </div>
        <div class="col-ld-3  col-md-3 col-sm-3">
          <div class="single_footer_widget">
            <h3>Community</h3>
            <ul class="footer_widget_nav">
              <li><a href="#">Our Tutors</a></li>
              <li><a href="#">Our Students</a></li>
              <li><a href="#">Our Team</a></li>
              <li><a href="#">Forum</a></li>
              <li><a href="#">News &amp; Media</a></li>
            </ul>
          </div>
        </div>
        <div class="col-ld-3  col-md-3 col-sm-3">
          <div class="single_footer_widget">
            <h3>Others</h3>
            <ul class="footer_widget_nav">
              <li><a href="#">Link 1</a></li>
              <li><a href="#">Link 2</a></li>
              <li><a href="#">Link 3</a></li>
              <li><a href="#">Link 4</a></li>
              <li><a href="#">Link 5</a></li>
            </ul>
          </div>
        </div>
        <div class="col-ld-3  col-md-3 col-sm-3">
          <div class="single_footer_widget">
            <h3>Social Links</h3>
            <ul class="footer_social">
              <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip" href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End footer top area -->

</footer>
<!--=========== END FOOTER SECTION ================-->



<?php $this->view("footer", $data); ?>
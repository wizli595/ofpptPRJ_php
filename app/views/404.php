<?php $this->view("header", $data); ?>

<body>

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
            <a class="navbar-brand" href="index.html">OFPPT <span>Degree</span></a>
            <!-- IMG BASED LOGO  -->
            <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->

          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="course-archive.html">Course</a></li>
              <li><a href="events-archive.html">Events</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="blog-archive.html">Blog</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">registration<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="register.html">signIn</a></li>
                  <li><a href="login.html">log In</a></li>
                </ul>
              </li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </div>
    <!-- END MENU -->
  </header>
  <!--=========== END HEADER SECTION ================-->

  <!--=========== BEGIN GALLERY SECTION ================-->
  <section id="errorpage">
    <div class="container">
      <div class="error_page_content">
        <h1>404</h1>
        <h2>Sorry :(</h2>
        <h3>This page doesn't exist.</h3>
        <p class="wow fadeInLeftBig animated" style="visibility: visible; animation-name: fadeInLeftBig;">Please,
          continue to our <a href="index.html">Home page</a></p>
      </div>
    </div>
  </section>
  <!--=========== END GALLERY SECTION ================-->

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
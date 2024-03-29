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
            <a class="navbar-brand" href="index">OFPPT <span>Degree</span></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              <li><a href="index.html">Home</a></li>
              <li class="active"><a href="coursearchive">Course</a></li>
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
              <li><a href="contact">Contact</a></li>
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
    <h2>Course Details</h2>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->


  <!--=========== BEGIN COURSE BANNER SECTION ================-->
  <section id="courseArchive">
    <div class="container">
      <div class="row">
        <!-- start course content -->
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="courseArchive_content">
            <div class="singlecourse_ferimg_area">
              <div class="singlecourse_ferimg">
                <img src="../app/views/assets/img/course-single.jpg" alt="img">
              </div>
              <div class="singlecourse_bottom">
                <h2>Introduction To Matrix</h2>
                <span class="singlecourse_author">
                  <img alt="img" src="../app/views/assets/img/author.jpg">
                  Richard Remus, Teacher
                </span>
                <span class="singlecourse_price">$20</span>
              </div>
            </div>
            <div class="single_course_content">
              <h2>About The Coures</h2>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form, by injected humour, or randomised words which don't look even slightly
                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                predefined chunks as necessary, making this the first true generator on the Internet. It uses a
                dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate
                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                injected humour, or non-characteristic words etc.</p>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters, as opposed to using 'Content here, content here', making it look like readable English. Many
                desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have
                evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
              <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.
                Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their
                exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
              <table class="table table-striped course_table">
                <thead>
                  <tr>
                    <th>Course Title</th>
                    <th>Instructor</th>
                    <th>Timing</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Basic Of Matrix</td>
                    <td>Dr. Steve Palmer</td>
                    <td>08:00 to 13:00</td>
                  </tr>
                  <tr>
                    <td>Matrix Overview</td>
                    <td>Jacob</td>
                    <td>08:00 to 13:00</td>
                  </tr>
                  <tr>
                    <td>Matrix Application</td>
                    <td>Kimberly Jones</td>
                    <td>08:00 to 13:00</td>
                  </tr>
                  <tr>
                    <td>Advanced Matrix</td>
                    <td>Dr. Klee</td>
                    <td>08:00 to 13:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- start related course -->
            <div class="related_course">
              <h2>More Courses</h2>
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="../app/views/assets/img/course-1.jpg">
                      <div class="mask">
                        <a class="course_more" href="#">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                      <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                      <p class="singCourse_price"><span>$20</span> Per One Month</p>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                    <div class="singCourse_author">
                      <img alt="img" src="../app/views/assets/img/author.jpg">
                      <p>Richard Remus, Teacher</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="single_course wow fadeInUp">
                    <div class="singCourse_imgarea">
                      <img src="../app/views/assets/img/course-1.jpg">
                      <div class="mask">
                        <a class="course_more" href="#">View Course</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                      <h3 class="singCourse_title"><a href="#">Introduction To Matrix</a></h3>
                      <p class="singCourse_price"><span>$20</span> Per One Month</p>
                      <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                    <div class="singCourse_author">
                      <img alt="img" src="../app/views/assets/img/author.jpg">
                      <p>Richard Remus, Teacher</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End related course -->
          </div>
        </div>
        <!-- End course content -->

        <!-- start course archive sidebar -->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="courseArchive_sidebar">
            <!-- start single sidebar -->
            <div class="single_sidebar">
              <h2>Events <span class="fa fa-angle-double-right"></span></h2>
              <ul class="news_tab">
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="news_img">
                        <img alt="img" src="../app/views/assets/img/news.jpg" class="media-object">
                      </a>
                    </div>
                    <div class="media-body">
                      <a href="#">Dummy text of the printing and typesetting industry</a>
                      <span class="feed_date">27.02.15</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="news_img">
                        <img alt="img" src="../app/views/assets/img/news.jpg" class="media-object">
                      </a>
                    </div>
                    <div class="media-body">
                      <a href="#">Dummy text of the printing and typesetting industry</a>
                      <span class="feed_date">28.02.15</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a href="#" class="news_img">
                        <img alt="img" src="../app/views/assets/img/news.jpg" class="media-object">
                      </a>
                    </div>
                    <div class="media-body">
                      <a href="#">Dummy text of the printing and typesetting industry</a>
                      <span class="feed_date">28.02.15</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End single sidebar -->
            <!-- start single sidebar -->
            <div class="single_sidebar">
              <h2>Quick Links <span class="fa fa-angle-double-right"></span></h2>
              <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
                <li><a href="#">Link 5</a></li>
              </ul>
            </div>
            <!-- End single sidebar -->
            <!-- start single sidebar -->
            <div class="single_sidebar">
              <h2>Sponsor Add <span class="fa fa-angle-double-right"></span></h2>
              <a class="side_add" href="#"><img src="../app/views/assets/img/side-add.jpg" alt="img"></a>
            </div>
            <!-- End single sidebar -->
          </div>
        </div>
        <!-- start course archive sidebar -->
      </div>
    </div>
  </section>
  <!--=========== END COURSE BANNER SECTION ================-->

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
<?php $this->view("header", $data); ?>
<?php
session_start();

?>
<style>
  h1 {
    font-weight: bold;
    text-align: center;
  }
</style>
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
            <li class="active"><a href="index">Home</a></li>
            <li><a href="CourseArchive">Course</a></li>
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
            <?php
            if (isset($_SESSION['username'])) {
              echo "<li><a href='profile'>profile</a></li>";
            }
            ?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </div>
  <!-- END MENU -->
</header>
<!--=========== END HEADER SECTION ================-->

<!--=========== BEGIN SLIDER SECTION ================-->
<section id="slider">
  <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="slider_area">
        <!-- Start super slider -->
        <div id="slides">
          <ul class="slides-container">
            <li>
              <img src="../app/views/assets/img/slider/2.jpg" alt="img">
              <div class="slider_caption">
                <h2>Largest & Beautiful University</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page
                  when looking at its layout.</p>
                <a class="slider_btn" href="#">Know More</a>
              </div>
            </li>
            <!-- Start single slider-->
            <li>
              <img src="../app/views/assets/img/slider/3.jpg" alt="img">
              <div class="slider_caption slider_right_caption">
                <h2>Better Education Environment</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page
                  when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as
                  their default model text, and a search</p>
                <a class="slider_btn" href="#">Know More</a>
              </div>
            </li>
            <!-- Start single slider-->
            <li>
              <img src="../app/views/assets/img/slider/4.jpg" alt="img">
              <div class="slider_caption">
                <h2>Find out you in better way</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page
                  when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as
                  their default model text, and a search</p>
                <a class="slider_btn" href="#">Know More</a>
              </div>
            </li>
          </ul>
          <nav class="slides-navigation">
            <a href="#" class="next"></a>
            <a href="#" class="prev"></a>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=========== END SLIDER SECTION ================-->

<?php
if (isset($_SESSION['username'])) {
  echo "<h1 >Hello  $_SESSION[username]</h1>";
}
?>

<!--=========== BEGIN ABOUT US SECTION ================-->
<section id="aboutUs">
  <div class="container">
    <div class="row">
      <!-- Start about us area -->
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="aboutus_area wow fadeInLeft">
          <h2 class="titile">About Us</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
            of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="newsfeed_area wow fadeInRight">
          <ul class="nav nav-tabs feed_tabs" id="myTab2">
            <li class="active"><a href="#news" data-toggle="tab">News</a></li>
            <li><a href="#notice" data-toggle="tab">Notice</a></li>
            <li><a href="#events" data-toggle="tab">Events</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <!-- Start news tab content -->
            <div class="tab-pane fade in active" id="news">
              <ul class="news_tab">
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="#">
                        <img class="media-object" src="<?= ASSETS ?>img/news.jpg" alt="img">
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
                      <a class="news_img" href="#">
                        <img class="media-object" src="<?= ASSETS ?>img/news.jpg" alt="img">
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
                      <a class="news_img" href="#">
                        <img class="media-object" src="<?= ASSETS ?>img/news.jpg" alt="img">
                      </a>
                    </div>
                    <div class="media-body">
                      <a href="#">Dummy text of the printing and typesetting industry</a>
                      <span class="feed_date">28.02.15</span>
                    </div>
                  </div>
                </li>
              </ul>
              <a class="see_all" href="#">See All</a>
            </div>
            <!-- Start notice tab content -->
            <div class="tab-pane fade " id="notice">
              <div class="single_notice_pane">
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?= ASSETS ?>img/news.jpg" alt="img">
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
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?= ASSETS ?>img/notice.jpg" alt="img">
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
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?= ASSETS ?>img/notice.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                        <a href="#">Dummy text of the printing and typesetting industry</a>
                        <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?= ASSETS ?>img/notice.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                        <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                        <span class="feed_date">27.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?= ASSETS ?>img/notice.jpg" alt="img">
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
                        <a class="news_img" href="#">
                          <img class="media-object" src="<?= ASSETS ?>img/notice.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                        <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                        <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Start events tab content -->
            <div class="tab-pane fade " id="events">
              <ul class="news_tab">
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="#">
                        <img class="media-object" src="<?= ASSETS ?>img/news.jpg" alt="img">
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
                      <a class="news_img" href="#">
                        <img class="media-object" src="<?= ASSETS ?>img/news.jpg" alt="img">
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
                      <a class="news_img" href="#">
                        <img class="media-object" src="<?= ASSETS ?>img/news.jpg" alt="img">
                      </a>
                    </div>
                    <div class="media-body">
                      <a href="#">Dummy text of the printing and typesetting industry</a>
                      <span class="feed_date">28.02.15</span>
                    </div>
                  </div>
                </li>
              </ul>
              <a class="see_all" href="#">See All</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=========== END ABOUT US SECTION ================-->

<!--=========== BEGIN WHY US SECTION ================-->
<section id="whyUs">
  <!-- Start why us top -->
  <div class="row">
    <div class="col-lg-12 col-sm-12">
      <div class="whyus_top">
        <div class="container">
          <!-- Why us top titile -->
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="title_area">
                <h2 class="title_two">Why Us</h2>
                <span></span>
              </div>
            </div>
          </div>
          <!-- End Why us top titile -->
          <!-- Start Why us top content  -->
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single_whyus_top wow fadeInUp">
                <div class="whyus_icon">
                  <span class="fa fa-desktop"></span>
                </div>
                <h3>Technology</h3>
                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single_whyus_top wow fadeInUp">
                <div class="whyus_icon">
                  <span class="fa fa-users"></span>
                </div>
                <h3>Best Tutor</h3>
                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single_whyus_top wow fadeInUp">
                <div class="whyus_icon">
                  <span class="fa fa-flask"></span>
                </div>
                <h3>Practical Training</h3>
                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="single_whyus_top wow fadeInUp">
                <div class="whyus_icon">
                  <span class="fa fa-support"></span>
                </div>
                <h3>Support</h3>
                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
              </div>
            </div>
          </div>
          <!-- End Why us top content  -->
        </div>
      </div>
    </div>
  </div>
  <!-- End why us top -->


</section>
<!--=========== END WHY US SECTION ================-->

<!--=========== BEGIN OUR COURSES SECTION ================-->
<section id="ourCourses">
  <div class="container">
    <!-- Our courses titile -->
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="title_area">
          <h2 class="title_two">Our Courses</h2>
          <span></span>
        </div>
      </div>
    </div>
    <!-- End Our courses titile -->
    <!-- Start Our courses content -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="ourCourse_content">
          <ul class="course_nav">
            <li>
              <div class="single_course">
                <div class="singCourse_imgarea">
                  <img src="<?= ASSETS ?>img/course-1.jpg" />
                  <div class="mask">
                    <a href="courseArchive" class="course_more">View Course</a>
                  </div>
                </div>
                <div class="singCourse_content">
                  <h3 class="singCourse_title"><a href="courseArchive">Introduction To Matrix</a></h3>
                  <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="singCourse_author">
                  <img src="<?= ASSETS ?>img/author.jpg" alt="img">
                  <p>Richard Remus, Teacher</p>
                </div>
              </div>
            </li>
            <li>
              <div class="single_course">
                <div class="singCourse_imgarea">
                  <img src="<?= ASSETS ?>img/course-2.jpg" />
                  <div class="mask">
                    <a href="courseArchive" class="course_more">View Course</a>
                  </div>
                </div>
                <div class="singCourse_content">
                  <h3 class="singCourse_title"><a href="courseArchive">Introduction To Matrix</a></h3>
                  <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="singCourse_author">
                  <img src="<?= ASSETS ?>img/author.jpg" alt="img">
                  <p>Richard Remus, Teacher</p>
                </div>
              </div>
            </li>
            <li>
              <div class="single_course">
                <div class="singCourse_imgarea">
                  <img src="<?= ASSETS ?>img/course-1.jpg" />
                  <div class="mask">
                    <a href="courseArchive" class="course_more">View Course</a>
                  </div>
                </div>
                <div class="singCourse_content">
                  <h3 class="singCourse_title"><a href="courseArchive">Introduction To Matrix</a></h3>
                  <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="singCourse_author">
                  <img src="<?= ASSETS ?>img/author.jpg" alt="img">
                  <p>Richard Remus, Teacher</p>
                </div>
              </div>
            </li>
            <li>
              <div class="single_course">
                <div class="singCourse_imgarea">
                  <img src="<?= ASSETS ?>img/course-2.jpg" />
                  <div class="mask">
                    <a href="courseArchive" class="course_more">View Course</a>
                  </div>
                </div>
                <div class="singCourse_content">
                  <h3 class="singCourse_title"><a href="courseArchive">Introduction To Matrix</a></h3>
                  <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="singCourse_author">
                  <img src="<?= ASSETS ?>img/author.jpg" alt="img">
                  <p>Richard Remus, Teacher</p>
                </div>
              </div>
            </li>
            <li>
              <div class="single_course">
                <div class="singCourse_imgarea">
                  <img src="<?= ASSETS ?>img/course-1.jpg" />
                  <div class="mask">
                    <a href="courseArchive" class="course_more">View Course</a>
                  </div>
                </div>
                <div class="singCourse_content">
                  <h3 class="singCourse_title"><a href="courseArchive">Introduction To Matrix</a></h3>
                  <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="singCourse_author">
                  <img src="<?= ASSETS ?>img/author.jpg" alt="img">
                  <p>Richard Remus, Teacher</p>
                </div>
              </div>
            </li>
            <li>
              <div class="single_course">
                <div class="singCourse_imgarea">
                  <img src="<?= ASSETS ?>img/course-2.jpg" />
                  <div class="mask">
                    <a href="courseArchive" class="course_more">View Course</a>
                  </div>
                </div>
                <div class="singCourse_content">
                  <h3 class="singCourse_title"><a href="courseArchive">Introduction To Matrix</a></h3>
                  <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <div class="singCourse_author">
                  <img src="<?= ASSETS ?>img/author.jpg" alt="img">
                  <p>Richard Remus, Teacher</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Our courses content -->
  </div>
</section>
<!--=========== END OUR COURSES SECTION ================-->

<!--=========== BEGIN OUR TUTORS SECTION ================-->
<section id="ourTutors">
  <div class="container">
    <!-- Our courses titile -->
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="title_area">
          <h2 class="title_two">Our Tutors</h2>
          <span></span>
        </div>
      </div>
    </div>
    <!-- End Our courses titile -->

    <!-- Start Our courses content -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="ourTutors_content">
          <!-- Start Tutors nav -->
          <ul class="tutors_nav">
            <li>
              <div class="single_tutors">
                <div class="tutors_thumb">
                  <img src="<?= ASSETS ?>img/author.jpg" />
                </div>
                <div class="singTutors_content">
                  <h3 class="tutors_name">Jame Burns</h3>
                  <span>Technology Teacher</span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class="singTutors_social">
                  <ul class="tutors_socnav">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="single_tutors">
                <div class="tutors_thumb">
                  <img src="<?= ASSETS ?>img/course-1.jpg" />
                </div>
                <div class="singTutors_content">
                  <h3 class="tutors_name">Jame Burns</h3>
                  <span>Technology Teacher</span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class="singTutors_social">
                  <ul class="tutors_socnav">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="single_tutors">
                <div class="tutors_thumb">
                  <img src="<?= ASSETS ?>img/author.jpg" />
                </div>
                <div class="singTutors_content">
                  <h3 class="tutors_name">Jame Burns</h3>
                  <span>Technology Teacher</span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class="singTutors_social">
                  <ul class="tutors_socnav">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="single_tutors">
                <div class="tutors_thumb">
                  <img src="<?= ASSETS ?>img/course-1.jpg" />
                </div>
                <div class="singTutors_content">
                  <h3 class="tutors_name">Jame Burns</h3>
                  <span>Technology Teacher</span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class="singTutors_social">
                  <ul class="tutors_socnav">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="single_tutors">
                <div class="tutors_thumb">
                  <img src="<?= ASSETS ?>img/author.jpg" />
                </div>
                <div class="singTutors_content">
                  <h3 class="tutors_name">Jame Burns</h3>
                  <span>Technology Teacher</span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class="singTutors_social">
                  <ul class="tutors_socnav">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li>
              <div class="single_tutors">
                <div class="tutors_thumb">
                  <img src="<?= ASSETS ?>img/course-1.jpg" />
                </div>
                <div class="singTutors_content">
                  <h3 class="tutors_name">Jame Burns</h3>
                  <span>Technology Teacher</span>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                </div>
                <div class="singTutors_social">
                  <ul class="tutors_socnav">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Our courses content -->
  </div>
</section>
<!--=========== END OUR TUTORS SECTION ================-->

<!--=========== BEGIN STUDENTS TESTIMONIAL SECTION ================-->
<section id="studentsTestimonial">
  <div class="container">
    <!-- Our courses titile -->
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="title_area">
          <h2 class="title_two">What our Student says</h2>
          <span></span>
        </div>
      </div>
    </div>
    <!-- End Our courses titile -->

    <!-- Start Our courses content -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="studentsTestimonial_content">
          <div class="row">
            <!-- start single student testimonial -->
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_stsTestimonial wow fadeInUp">
                <div class="stsTestimonial_msgbox">
                  <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <img class="stsTesti_img" src="<?= ASSETS ?>img/author.jpg" alt="img">
                <div class="stsTestimonial_content">
                  <h3>Johnathan Doe</h3>
                  <span>Ex. Student</span>
                  <p>Software Department</p>
                </div>
              </div>
            </div>
            <!-- End single student testimonial -->
            <!-- start single student testimonial -->
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_stsTestimonial wow fadeInUp">
                <div class="stsTestimonial_msgbox">
                  <p>when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book.scrambled it to make a type specimen book</p>
                </div>
                <img class="stsTesti_img" src="<?= ASSETS ?>img/author.jpg" alt="img">
                <div class="stsTestimonial_content">
                  <h3>Johnathan Doe</h3>
                  <span>Ex. Student</span>
                  <p>Software Department</p>
                </div>
              </div>
            </div>
            <!-- End single student testimonial -->
            <!-- start single student testimonial -->
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="single_stsTestimonial wow fadeInUp">
                <div class="stsTestimonial_msgbox">
                  <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
                <img class="stsTesti_img" src="<?= ASSETS ?>img/author.jpg" alt="img">
                <div class="stsTestimonial_content">
                  <h3>Johnathan Doe</h3>
                  <span>Ex. Student</span>
                  <p>Software Department</p>
                </div>
              </div>
            </div>
            <!-- End single student testimonial -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Our courses content -->
  </div>
</section>
<!--=========== END STUDENTS TESTIMONIAL SECTION ================-->

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
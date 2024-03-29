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
            <li><a href="course-archive">Course</a></li>
            <li class="active"><a href="events-archive">Events</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="blog-archive">Blog</a></li>
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
  <h2>Events Single</h2>
</section>
<!--=========== END COURSE BANNER SECTION ================-->

<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="courseArchive">
  <div class="container">
    <div class="row">
      <!-- start course content -->
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="courseArchive_content">
          <!-- start blog archive  -->
          <div class="row">
            <!-- start single blog -->
            <div class="col-lg-12 col-12 col-sm-12">
              <div class="single_blog">
                <!-- start events slider -->
                <div class="events_slider_area">
                  <div class="events_slider">
                    <div><img src="../app/views/assets/img/events-slider3.jpg" alt="img"></div>
                    <div><img src="../app/views/assets/img/events-slider1.jpg" alt="img"></div>
                    <div><img src="../app/views/assets/img/events-slider2.jpg" alt="img"></div>
                  </div>
                </div>
                <!-- End events slider -->
                <h2 class="blog_title"><a href="blogsingle"> Curabitur ac dictum nisl eu hendrerit ante</a></h2>
                <div class="blog_commentbox">
                  <p><i class="fa fa-clock-o"></i>Time: 7pm,15 March 2015</p>
                  <p><i class="fa fa-map-marker"></i>Location: London,UK</p>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page
                  when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                  distribution of letters, as opposed to using 'Content here, content here', making it look like
                  readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                  default model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                  infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                  (injected humour and the like).</p>
                <blockquote>
                  <span class="fa fa-quote-left"></span>
                  Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin condimentum risus
                  ligula, dignissim mollis tortor hendrerit vel.
                </blockquote>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                  alteration in some form, by injected humour, or randomised words which don't look even slightly
                  believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                  anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet
                  tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                  It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                  to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
                  from repetition, injected humour, or non-characteristic words etc.</p>

                <h3>This is example of H3</h3>
                <h4>This is example of H4</h4>
                <h5>This is example of H5</h5>
                <h6>This is example of H6</h6>

                <ul>
                  <li><span class="fa fa-angle-double-right"></span>There are many variations of passages</li>
                  <li><span class="fa fa-angle-double-right"></span>Lorem Ipsum generators</li>
                  <li><span class="fa fa-angle-double-right"></span>There are many variations of passages</li>
                  <li><span class="fa fa-angle-double-right"></span>The uses a dictionary of over 200 Latin words</li>
                  <li><span class="fa fa-angle-double-right"></span>Proin condimentum risus ligula</li>
                </ul>

              </div>
              <!-- single blog nex & prev button -->
              <div class="single_blog_prevnext">
                <a class="prev_post wow fadeInLeft" href="#"><i class="fa fa-angle-left"></i>Previous Event</a>
                <a class="next_post wow fadeInRight" href="#">Next Event<i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <!-- End single blog -->
          </div>
          <!-- end blog archive  -->
          <!-- start related post -->
          <div class="related_post">
            <h2>More Events</h2>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single_blog_archive wow fadeInUp">
                  <div class="blogimg_container">
                    <a class="blog_img" href="#">
                      <img src="../app/views/assets/img/blog.jpg" alt="img">
                    </a>
                  </div>
                  <h2 class="blog_title"><a href="blogsingle"> Curabitur ac dictum nisl eu hendrerit ante</a>
                  </h2>
                  <div class="blog_commentbox">
                    <p><i class="fa fa-clock-o"></i>Time: 7pm,15 March 2015</p>
                    <p><i class="fa fa-map-marker"></i>Location: London,UK</p>
                  </div>
                  <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin
                    condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                  <a href="#" class="blog_readmore">Read More</a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="single_blog_archive wow fadeInUp">
                  <div class="blogimg_container">
                    <a class="blog_img" href="#">
                      <img src="../app/views/assets/img/blog.jpg" alt="img">
                    </a>
                  </div>
                  <h2 class="blog_title"><a href="blogsingle"> Curabitur ac dictum nisl eu hendrerit ante</a>
                  </h2>
                  <div class="blog_commentbox">
                    <p><i class="fa fa-clock-o"></i>Time: 7pm,15 March 2015</p>
                    <p><i class="fa fa-map-marker"></i>Location: London,UK</p>
                  </div>
                  <p class="blog_summary">Duis erat purus, tincidunt vel ullamcorper ut, consequat tempus nibh. Proin
                    condimentum risus ligula, dignissim mollis tortor hendrerit vel. Aliquam...</p>
                  <a href="#" class="blog_readmore">Read More</a>
                </div>
              </div>
            </div>
          </div>
          <!-- start related post -->
        </div>
      </div>
      <!-- End course content -->

      <!-- start course archive sidebar -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="courseArchive_sidebar">
          <!-- start single sidebar -->
          <div class="single_sidebar">
            <h2>Popular Events <span class="fa fa-angle-double-right"></span></h2>
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
            <h2>Category <span class="fa fa-angle-double-right"></span></h2>
            <ul>
              <li><a href="#">Food</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">Fashion</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Games</a></li>
            </ul>
          </div>
          <!-- End single sidebar -->
          <!-- start single sidebar -->
          <div class="single_sidebar">
            <h2>Tags <span class="fa fa-angle-double-right"></span></h2>
            <ul class="tags_nav">
              <li><a href="#"><i class="fa fa-tags"></i>Creative</a></li>
              <li><a href="#"><i class="fa fa-tags"></i>News</a></li>
              <li><a href="#"><i class="fa fa-tags"></i>Technology</a></li>
              <li><a href="#"><i class="fa fa-tags"></i>Art</a></li>
              <li><a href="#"><i class="fa fa-tags"></i>Audio</a></li>
              <li><a href="#"><i class="fa fa-tags"></i>video</a></li>
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
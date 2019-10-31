<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>International Seminar of </title>

        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">

        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
        <!-- Animate -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">


		<!-- Modernizer Script for old Browsers -->
        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.6.2.min.js"></script>

    </head>

    <body>

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a style="color:white;font-size:75px;font-weight:bold;" href="#body">
                          IC
                          <!--  <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Kasper Logo"> -->
                        </a>
                    </h1>
                    <!-- /logo -->

                    </div>

                    <!-- main nav -->
                    <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                        <ul id="nav" class="nav navbar-nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#service">Important Dates</a></li>
                            <li><a href="#portfolio">Speakers</a></li>

                            <li><a href="#pricing">Fees</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- /main nav -->
                </div>

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->


        <!--
        Home Slider
        ==================================== -->
        <section id="home">
            <div id="home-carousel" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                </ol>
                <!--/.carousel-indicators-->

                <div class="carousel-inner">

                    <div class="item active"  style="background-image: url('<?php echo base_url(); ?>assets/img/slider/bg2.jpg')" >
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                                <h2>HELLO WORLD! <br>WE ARE IC 2019.</h2>
                                <p>-</p>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image: url('<?php echo base_url(); ?>assets/img/slider/bg2.jpg')">
                        <div class="carousel-caption">
                            <div class="animated bounceInDown">
                              <h2>HELLO WORLD! <br>WE ARE IC 2019.</h2>
                              <p>-</p>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image: url('<?php echo base_url(); ?>assets/img/slider/bg3.jpg')">
                         <div class="carousel-caption">
                            <div class="animated bounceInUp">
                              <h2>HELLO WORLD! <br>WE ARE IC 2019.</h2>
                              <p>-</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.carousel-inner-->
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a class="sl-next" href="#home-carousel" data-slide="next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>

            </div>
        </section>
        <!--
        End #home Slider
        ========================== -->

        <!--
        #about
        ========================== -->
        <section   id="about">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInUp">
                        <h2 >About Us</h2>
                      <!--  <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p> -->
                    </div>

                    <div class="about-us text-center wow fadeInDown">
                        <img src="<?php echo base_url(); ?>assets/img/icons/event.png" alt="About Us" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #about
        ========================== -->
        <!--
        #about-us
        ========================== -->
        <section style="color: white;background-color: #121116;" id="about-us">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 col-md-offset-1 wow fadeInLeft">

                        <div class="subtitle text-center">
                            <h3 style="color: white;">About</h3>
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                        </div>

                        <div id="testimonial">

                            <div class="tst-item clearfix">
                                <div class="tst-single clearfix">
                                  Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.
                                </div>
                            </div>

                        </div> <!-- end #testimonial -->
                    </div> <!-- end .col-md-5 -->

                    <div class="col-md-5 col-md-offset-1 wow fadeInRight">

                        <div class="subtitle text-center">
                            <h3 style="color: white;">OUR SKILLS</h3>
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                        </div>

                        <div style="color: white;" class="progress-bars">

                            <span>HTML 5 - <small>95%</small></span>
                            <div class="progress"  data-progress="95">
                                <div class="bar"></div>
                            </div>
                            <span>CSS 3 - <small>93%</small></span>
                            <div class="progress"  data-progress="93">
                                <div class="bar"></div>
                            </div>
                            <span>PHP - <small>85%</small></span>
                            <div class="progress" data-progress="85">
                                <div class="bar"></div>
                            </div>
                            <span>mySQL - <small>87%</small></span>
                            <div class="progress kill-margin"  data-progress="87">
                                <div class="bar"></div>
                            </div>

                        </div>  <!-- progress-bars -->

                    </div>  <!-- end .col-md-5 -->

                </div>
            </div>
        </section>
        <!--
        End #about-us
        ========================== -->

        <!--
        #service
        ========================== -->
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center wow fadeInDown">
                            <h2>Important Dates</h2>
                          <!--  <p>_____</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 col-sm-12 wow fadeInLeft">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img style="width:50px" src="<?php echo base_url(); ?>assets/img/icons/calendar.png" class="media-object" alt="Calendar">
                            </a>
                            <div class="media-body">
                                <h3>Vorem amet intuitive</h3>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img style="width:50px" src="<?php echo base_url(); ?>assets/img/icons/calendar.png" class="media-object" alt="Calendar">
                            </a>
                            <div class="media-body">
                                <h3>Vorem amet intuitive</h3>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 col-sm-12 wow fadeInLeft">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img style="width:50px" src="<?php echo base_url(); ?>assets/img/icons/calendar.png" class="media-object" alt="Calendar">
                            </a>
                            <div class="media-body">
                                <h3>Vorem amet intuitive</h3>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="media">
                            <a href="#" class="pull-left">
                                <img style="width:50px" src="<?php echo base_url(); ?>assets/img/icons/calendar.png" class="media-object" alt="Calendar">
                            </a>
                            <div class="media-body">
                                <h3>Vorem amet intuitive</h3>
                                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>
                            </div>
                        </div>
                    </div>

                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </section>
        <!--
        End #service
        ========================== -->

        <!--
        #service-bottom
        ========================== -->

        <section id="service-bottom">
            <div class="container">
                    <div class="mobile-device">
                       <img data-wow-delay="0.2s" class="img-responsive black  wow fadeInLeftBig" src="<?php echo base_url(); ?>assets/img/icons/event.png" alt="Event">
                      <!--  <img data-wow-delay="0.5s" class="img-responsive white  wow fadeInLeftBig" src="<?php echo base_url(); ?>assets/img/icons/event.png" alt="iPhone White"> -->
                    </div>
                <div class="service-features wow fadeInRight">
                    <h3>Event Day</h3>
                    <ul>
                        <li>Responsive Design</li>
                        <li>Modern And Clean Design</li>
                        <li>Clean Code</li>
                        <li>Browser Friendly</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--
        End #service-bottom
        ========================== -->


        <!--
        #Portfolio
        ========================== -->

        <section id="portfolio">

            <div class="section-title text-center wow fadeInDown">
                <h2>Speakers</h2>
              <!--  <p>-</p> -->
            </div>

  <div style="padding-left:10%;width:90%" class="row wow fadeInUp">


                  <div class="tst-item clearfix">
                      <div class="tst-single clearfix">
                          <img src="<?php echo base_url(); ?>assets/img/client/1.jpg" alt="Client" class="img-circle">
                          <div class="tst-content">
                              <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                              <span>John Doe,CEO</span>
                          </div>
                      </div>

                      <div class="tst-single clearfix">
                          <img src="<?php echo base_url(); ?>assets/img/client/2.jpg" alt="Client" class="img-circle">
                          <div class="tst-content">
                              <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                              <span>John Doe,CEO</span>
                          </div>
                      </div>

                      <div class="tst-single clearfix">
                          <img src="<?php echo base_url(); ?>assets/img/client/3.jpg" alt="Client" class="img-circle">
                          <div class="tst-content">
                              <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                              <span>John Doe,CEO</span>
                          </div>
                      </div>
                      <div class="tst-single clearfix">
                          <img src="<?php echo base_url(); ?>assets/img/client/1.jpg" alt="Client" class="img-circle">
                          <div class="tst-content">
                              <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                              <span>John Doe,CEO</span>
                          </div>
                      </div>
                  </div>





            </div> <!-- end #projects -->

        </section>
        <!--
        End #Portfolio
        ========================== -->




        <!--
        #count
        ========================== -->

        <section id="count">
            <div class="container">
                <div class="row">
                    <div class="counter-section clearfix">

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.5s">
                            <div class="fact-item text-center">
                                <div class="fact-icon">
                                    <i class="fa fa-check-square fa-lg"></i>
                                </div>
                                <span data-to="120">0</span>
                                <p>Completed Projects</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.8s">
                            <div class="fact-item text-center">
                                <div class="fact-icon">
                                    <i class="fa fa-users fa-lg"></i>
                                </div>
                                <span data-to="152">0</span>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.1s">
                            <div class="fact-item text-center last">
                                <div class="fact-icon">
                                    <i class="fa fa-clock-o fa-lg"></i>
                                </div>
                                <span data-to="2500">0</span>
                                <p>Working Hours</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.3s">
                            <div class="fact-item text-center last">
                                <div class="fact-icon">
                                    <i class="fa fa-trophy fa-lg"></i>
                                </div>
                                <span data-to="150">0</span>
                                <p>Award Won</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--
        End #count
        ========================== -->



        <!--
        #quotes
        ========================== -->
        <section id="quotes">
            <div class="container">
                <div class="row wow zoomIn">
                    <div class="col-lg-12">
                        <div class="call-to-action text-center">
                            <p>“ACCUMSAN ID CURABITUR ET PORTITOR MAURIS BLANDIT DOLOR LOREM SOME EST OUR DONEC STIN LORTIOS”</p>
                            <span>John Doe</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #quotes
        ========================== -->

        <!--
        #pricing
        ========================== -->
        <section id="pricing">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInUp">
                        <h2>Pricing</h2>
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                        <div class="pricing-table text-center">
                            <div class="price">
                                <span class="plan">Basic</span>
                                <span class="value"><small>$</small><strong>19</strong>/MO</span>
                            </div>
                            <ul class="text-center">
                                <li>Feature N0 1</li>
                                <li>Feature N0 2</li>
                                <li>Feature N0 3</li>
                                <li>Feature N0 4</li>
                            </ul>
                            <a href="#" class="btn btn-price">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="pricing-table text-center">
                            <div class="price">
                                <span class="plan">Premium</span>
                                <span class="value"><small>$</small><strong>29</strong>/MO</span>
                            </div>
                            <ul class="text-center">
                                <li>Feature N0 1</li>
                                <li>Feature N0 2</li>
                                <li>Feature N0 3</li>
                                <li>Feature N0 4</li>
                            </ul>
                            <a href="#" class="btn btn-price">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="pricing-table text-center">
                            <div class="price">
                                <span class="plan">Pro</span>
                                <span class="value"><small>$</small><strong>39</strong>/MO</span>
                            </div>
                            <ul class="text-center">
                                <li>Feature N0 1</li>
                                <li>Feature N0 2</li>
                                <li>Feature N0 3</li>
                                <li>Feature N0 4</li>
                            </ul>
                            <a href="#" class="btn btn-price">Buy Now</a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="pricing-table text-center">
                            <div class="price">
                                <span class="plan">Platinum</span>
                                <span class="value"><small>$</small><strong>49</strong>/MO</span>
                            </div>
                            <ul class="text-center">
                                <li>Feature N0 1</li>
                                <li>Feature N0 2</li>
                                <li>Feature N0 3</li>
                                <li>Feature N0 4</li>
                            </ul>
                            <a href="#" class="btn btn-price">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 wow fadeInUp">
                        <div class="special-plan text-center">
                            <p>Contact us if you have special request</p>
                            <a href="#" class="btn btn-blue">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #pricing
        ========================== -->


        <!--
        #subscribe
        ========================== -->
        <section id="subscribe">
            <div class="container">
                <div class="row">

                    <div class="col-md-7 wow fadeInLeft">
                        <form action="#" method="post" class="subscription-form">
                            <i class="fa fa-envelope-o fa-lg"></i>
                            <input type="email" name="subscribe" class="subscribe" placeholder="YOUR MAIL" required="">
                            <input type="submit" value="SUBSCRIBE" id="mail-submit">
                        </form>
                    </div>

                    <div class="col-md-4 text-left wow fadeInRight">
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blan dit aliquet elit, eget tincidunt.</p>
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #subscribe
        ========================== -->


        <!--
        #contact
        ========================== -->
        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInDown">
                        <h2>Contact Us</h2>
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt.</p>
                    </div>

                    <div class="col-md-8 col-sm-9 wow fadeInLeft">
                        <div class="contact-form clearfix">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.5686980546034!2d112.78673714026586!3d-7.334979981888445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fab87edcad15%3A0xb26589947991eea1!2sUniversitas+Pembangunan+Nasional+%E2%80%9CVeteran%E2%80%9D+Jawa+Timur!5e0!3m2!1sen!2sid!4v1566552542646!5m2!1sen!2sid" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> <!-- end .contact-form -->
                    </div> <!-- .col-md-8 -->

                    <div class="col-md-4 col-sm-3 wow fadeInRight">
                        <div class="contact-details">
                            <span>GET IN TOUCH</span>
                            <p>+00 123.456.789 <br> <br> +00 123.456.789</p>
                        </div> <!-- end .contact-details -->

                        <div class="contact-details">
                            <span>GET IN TOUCH</span>
                            <p>+00 123.456.789 <br> <br> +00 123.456.789</p>
                        </div> <!-- end .contact-details -->
                    </div> <!-- .col-md-4 -->

                </div>
            </div>
        </section>
        <!--
        End #contact
        ========================== -->

        <!--
        #footer
        ========================== -->
        <footer id="footer" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="footer-logo wow fadeInDown">
                          <!--  <img src="<?php // echo base_url(); ?>assets/img/logo.png" alt="logo"> -->
                        </div>

                        <div class="footer-social wow fadeInUp">
                            <h3>We are social</h3>
                            <ul class="text-center list-inline">
                                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>

                        <div class="copyright">
                            <p style="color:#121116">Developed by <a target="_blank" style="color:#121116" href="http://www.themefisher.com">Themefisher</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!--
        End #footer
        ========================== -->


        <!--
        JavaScripts
        ========================== -->

        <!-- main jQuery -->
        <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.1.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <!-- jquery.nav -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.nav.js"></script>
        <!-- Portfolio Filtering -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.mixitup.min.js"></script>
        <!-- Fancybox -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
        <!-- Parallax sections -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.parallax-1.1.3.js"></script>
        <!-- jQuery Appear -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.appear.js"></script>
        <!-- countTo -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-countTo.js"></script>
        <!-- owl carousel -->
        <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <!-- WOW script -->
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
        <!-- theme custom scripts -->
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>

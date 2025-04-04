<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Inance</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>


<?php
/*
Template Name: About Page
*/
get_header();
?>

<!-- about section -->

<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="detail-box">
                    <h2>About us</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="img-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end about section -->

<!-- info section -->
<section class="info_section">
    <div class="container">
        <h4>Get In Touch</h4>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="info_items">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#">
                                <div class="item">
                                    <div class="img-box">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <div class="item">
                                    <div class="img-box">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <p>+02 1234567890</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <div class="item">
                                    <div class="img-box">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <p>demo@gmail.com</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-box">
        <h4>Follow Us</h4>
        <div class="box">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
    </div>
   </section>
   <?php get_footer(); ?>




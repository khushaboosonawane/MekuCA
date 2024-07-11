<?php
   defined("BASEPATH") or exit("no direct script access is allowed");
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/user_assets/assets/css/bootstrap.min.css" />
      <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/meanmenu.css" />
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/user_assets/assets/css/fontawesome.min.css" />
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/user_assets/assets/css/flaticon.css" />
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/user_assets/assets/css/magnific-popup.css" />
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/user_assets/assets/css/animate.css" />
      <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/owl.carousel.min.css" />
      <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/style.css" />
      <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/dark.css" />
      <link rel="stylesheet" href="<?= base_url() ?>public/user_assets/assets/css/responsive.css" />
      <title>MAKEUCA CA/CS/CMA Test Series and Mentoring – MAKEUCA CA/CS/CMA Test Series and Mentoring</title>
      <!-- <link rel="icon" type="image/png" href="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png"> -->


    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>public/user_assets/assets/favicon_package_v0.16 (1)/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>public/user_assets/assets/favicon_package_v0.16 (1)/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>public/user_assets/assets/favicon_package_v0.16 (1)/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>public/user_assets/assets/favicon_package_v0.16 (1)/site.webmanifest">
    <link rel="mask-icon" href="<?= base_url() ?>public/user_assets/assets/favicon_package_v0.16 (1)/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

      <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
      <script src="https://kit.fontawesome.com/435a96348c.js" crossorigin="anonymous"></script>
      <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
   </head>
   <body>
      <div id="loading">
         <div id="loading-center">
        
            <div id="loading-center-absolute">
               <div class="object" id="object_one"></div>
               <div class="object" id="object_two"></div>
               <div class="object" id="object_three"></div>
               <div class="object" id="object_four"></div>
               <!-- <img src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" style="height:100px;width:100px;object-fit:cover" alt=""> -->
            </div>
         </div>
      </div>
      <div class="navbar-area">
         <div class="mobile-nav">
            <a href="index.html" class="logo">
            <img src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" class="main-logo" alt="logo" />
            <img src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" class="white-logo" alt="logo" />
            </a>
         </div>
         <div class="main-nav">
            <div class="container">
               <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="<?= base_url() ?>usercontroller/">
                  <img src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" class="main-logo" alt="logo" style="height:43px;width:112px;object-fit:cover" />
                  <img src="https://makeuca.live/wp-content/uploads/2023/11/make-u-ca-logo-education-1024x405.png" class="white-logo" alt="logo" style="height:43px;width:112px;object-fit:cover" />
                  </a>
                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                     <ul class="navbar-nav text-right">
                        <li class="nav-item">
                           <a href="<?= base_url() ?>usercontroller/" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                           <a href="<?= base_url() ?>usercontroller/about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link dropdown-toggle">Classes</a>
                           <ul class="dropdown-menu">
                              <li class="nav-item">
                                 <a href="classes.html" class="nav-link">Classes</a>
                              </li>
                              <li class="nav-item">
                                 <a href="special-class.html" class="nav-link">Special Courses</a>
                              </li>
                              <li class="nav-item">
                                 <a href="single-class.html" class="nav-link">Classes Details</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link dropdown-toggle">Events</a>
                           <ul class="dropdown-menu">
                              <li class="nav-item">
                                 <a href="events.html" class="nav-link">Events</a>
                              </li>
                              <li class="nav-item">
                                 <a href="single-events.html" class="nav-link">Events Details</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link dropdown-toggle">News</a>
                           <ul class="dropdown-menu">
                              <li class="nav-item">
                                 <a href="news.html" class="nav-link">News</a>
                              </li>
                              <li class="nav-item">
                                 <a href="single-news.html" class="nav-link">News Details</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link dropdown-toggle">Teachers</a>
                           <ul class="dropdown-menu">
                              <li class="nav-item">
                                 <a href="single-teacher.html" class="nav-link">Teachers</a>
                              </li>
                              <li class="nav-item">
                                 <a href="single-teacher.html" class="nav-link">Teachers Details</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link dropdown-toggle">Pages</a>
                           <ul class="dropdown-menu">
                              <li class="nav-item">
                                 <a href="admission.html" class="nav-link">Admission</a>
                              </li>
                              <li class="nav-item">
                                 <a href="pricing.html" class="nav-link">Pricing</a>
                              </li>
                              <li class="nav-item">
                                 <a href="gallery.html" class="nav-link">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a href="testimonials.html" class="nav-link">Testimonials</a>
                              </li>
                              <li class="nav-item">
                                 <a href="singnup.html" class="nav-link">Signup</a>
                              </li>
                              <li class="nav-item">
                                 <a href="signin.html" class="nav-link">Signin</a>
                              </li>
                              <li class="nav-item">
                                 <a href="404.html" class="nav-link">Error 404</a>
                              </li>
                              <li class="nav-item">
                                 <a href="faq.html" class="nav-link">FAQ</a>
                              </li>
                              <li class="nav-item">
                                 <a href="terms%26condition.html" class="nav-link">Terms & Conditions</a>
                              </li>
                              <li class="nav-item">
                                 <a href="privecy.html" class="nav-link">Privacy Policy</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="contact.html" class="nav-link">Contact </a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
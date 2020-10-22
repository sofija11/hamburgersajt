<?php
session_start();
require "config/konekcija.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>SpicyX | Blog Archive</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">    
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>        
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="assets/img/preloader.gif" alt=" loader img">
    </div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
     
    </a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
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
           <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>
        </div> 
      </div>          
    </nav> 
  </header>
  <!-- End header section --> 

  <!-- Start Blog banner  -->
  <section id="mu-blog-banner">
    
    <div class="container">
        
      <div class="mu-blog-banner-area">
        
        <h2>Become our member</h2>
      </div>
     
    </div>
  </section>
  <!-- End Blog banner -->  
  
  <!-- Start Blog -->
  <section id="mu-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-blog-area">
            <div class="row">
              <div class="col-md-8 col-sm-8">
                <div class="mu-blog-content">
                  <!-- Start Single blog item -->
                  <article class="mu-news-single"id='naslov'>
                  
                   

                      <div class="mu-title">
                          <h2>Add user</h3>
                      <i class="fa fa-spoon"></i>              
                      <span class="mu-title-bar"></span>
                      </div>
                    <div class="mu-news-single-content" id='tab'>   
                      
                      
                          
                          <div class="col-md-6 col-auto">
                              
                              <div class="mu-contact-left">
                                <form action="insertUsernovo.php" method="POST" class="mu-contact-form" id="insert">
                                  <div class="form-group">
                                   
                                    <input type="text" class="form-control" name='firstnameU'id="first" placeholder="Firtsname"/><p  id="firstG"></p>
                                  </div>
                                  <div class="form-group">
                                      
                                      <input type="text" class="form-control" name='lastnameU' id="last" placeholder="Lastname"><p  id="lastG"></p>
                                  </div>
                                  <div class="form-group">
                                   
                                    <input type="text" class="form-control" name='usernameU' id="user" placeholder="Username"><p class="error" id="userG"></p>
                                  </div>                      
                                  <div class="form-group">
                                  
                                    <input type="password" class="form-control" name='passwordU' id="pass" placeholder="Password"><p class="error" id="passG"></p>
                                  </div>
                                  <div class="form-group">
                                     
                                      <input type="password" class="form-control" name='rePasswordU' id="rePass" placeholder=" Repeat password"><p class="error" id="rePG"></p>
                                  </div>
                                  <div class="form-group">
                                     
                                      <input type="text" class="form-control" name='emailU' id="mail" placeholder="Email"><p class="error" id="emailG"></p>
                                    </div>          
                                           
                                  <button type="button" class="mu-send-btn" name='btnSendU' id='posalji'>Sing up</button>
                                  <div id="feed"></div>
                                </form>
                              </div>
                            </div>
                          
                      </form>
                     

                    </div>                   
                  </article>
                  <!-- End Single blog item -->
                </div>
               
              </div>
              <!-- Start Blog Sidebar -->
              <div class="col-md-4 col-sm-4">             
                <aside class="mu-blog-sidebar">
                
                  <div class="mu-blog-sidebar-single">                    
                    <a href="#" class="mu-sidebar-add">
                      <img src="assets/img/banner-ads.jpg" alt="img">
                    </a>
                  </div>
                  <!-- End Blog Sidebar Single -->
                </aside>
              </div>
              <!-- End Blog Sidebar -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog -->
  
  <!-- Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="https://www.facebook.com/"><span class="fa fa-facebook"></span></a>
            <a href="https://twitter.com/"><span class="fa fa-twitter"></span></a>
            <a href="https://www.instagram.com/"><span class="fa fa-instagram"></span></a>
            <a href="https://www.youtube.com/"><span class="fa fa-youtube"></span></a>
          </div>
          <div class="mu-footer-copyright">
            <p>Designed by Sofija Vitorovic 171/17</a></p>
          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->
 
  
  <!-- jQuery library -->  
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
   <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
  <script src="assets/js/moj.js"></script> 

  </body>
</html>
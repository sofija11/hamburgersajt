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
    <title>Hamger | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/lo.ico" type="image/x-icon">

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
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      
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
          <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="img"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
          <?php
              $meni = executeQuery("SELECT * FROM meni WHERE idMeni<7");
                foreach($meni as $men):
            ?>
            <li><a href="<?=$men->href?>"><?=$men->naziv?></a></li>
            <?php endforeach; ?>
            

            
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
              <?php
              $menii = executeQuery("SELECT * FROM meni WHERE idMeni=8 OR idMeni=9");
                foreach($menii as $menn):
            ?>   
              <ul class="dropdown-menu" role="menu">  
              
                <li><a href="<?=$menn->href?>"><?=$menn->naziv?></a></li>
                       
                <?php endforeach; ?>                         
              </ul>
              
            </li>
            
          </ul>      
                               
        </div>    
      </div>          
    </nav> 
  </header>
  <!-- End header section -->
 

  <!-- Start slider  --> 
  <section id="mu-slider">
    <div class="mu-slider-area"> 
      <!-- Top slider -->
      <div class="mu-top-slider">
        <!-- Top slider single slide -->
        <?php
                        $slajder = executeQuery("SELECT * FROM slajder");
                        foreach($slajder as $sla):
            ?>
        <div class="mu-top-slider-single">
          <img src="<?= $sla->src?>" alt="<?= $sla->alt?>">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <span class="mu-slider-small-title"><?= $sla->naslov?></span>
            <h2 class="mu-slider-title"><?= $sla->naslovI?></h2>
                      
            
          </div>
          <!-- / Top slider content -->
        </div>
        <!-- / Top slider single slide -->    
         
       
       
        
        
        <!-- / Top slider single slide -->    
        <?php endforeach; ?>
  </section>  
  <!-- End slider  -->

  <!-- Start About us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>ABOUT US</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="mu-about-us-left">
                 <p>Celebrated by diners, critics and peers, Hamger has held a coveted Michelin star since 2010, and regularly takes pride of place on Belgrade Best Restaurants lists, setting the standard for fine dining across the globe.</p>                              
                <hr/>
                  <p>Hamger is the culmination of Sofija’s long held dream to open a restaurant serving delicious food, inspired by her trips to Italy.
                  </p> 
                  <hr/> 
                </div>
              </div>
              <div class="col-md-6">
                <div class="mu-about-us-right">                
                 
                  <img src="assets/img/res.jpeg" alt="img">
                   
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End About us -->

  <!-- Start  Counter Section -->

  <!-- End Counter Section --> 

  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
            <div class="mu-title"id='cao'>
              <span class="mu-subtitle">Discover</span>
              <h2>OUR FAVOURITES</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
                    
           
            </div>
            <div class="mu-restaurant-menu-content">
           
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                    <div class="row">
                      
                          <ul class="mu-menu-item-nav">
                          <?php
                  $strana = 0;
                  if(isset($_GET['strana'])){
                  $strana = ($_GET['strana'] - 1) * 2;
                  }

                  $upit_pr = "SELECT * FROM proizvodi LIMIT $strana, 3";
                  $rez_pr = $conn->query($upit_pr);
                  $proi = $rez_pr->fetchAll();
                  foreach($proi as $p) :
                  ?> 
                            <li>
                              <div class="media">
                                <div class="media-left">
                                  <a href="#">
                                    <img class="media-object" src="<?= $p->src?>" alt="<?= $p->alt?>">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <h4 class="media-heading"><a href="#"><?= $p->proizvodNaziv?></a></h4>
                                  <span class="mu-menu-price">$<?= $p->cena?></span>
                                  <p><?= $p->opis?></p>
                                </div>
                              </div>
                            </li>
                            <?php endforeach; ?>
                          </ul>   
                       
                    
                     </div>
                   </div>
                 </div>
                
                </div>
               
                     
            
    </div>
    
          <div class="col-md-12">
              <div class="mu-blog-pagination-area">
                    <nav>
                        <ul class="mu-blog-pagination" id='pag'>
                       
                        <?php
                                $upitP = "SELECT COUNT(*) AS brojL FROM proizvodi";
                                $rezultat = $conn->query($upitP)->fetch(); 

                                $brojL = $rezultat->brojL;
                                $brojLinkova = ceil($brojL / 3); 

                                for($i=1; $i <= $brojLinkova; $i++):
                            ?>
                                <li>
                                    <a href="index.php?strana=<?= $i?>">
                                        <b> <?= $i ?> </b>
                                    </a>
                                </li>
                            <?php endfor;?>
                            
                        </ul>
                      </nav>
                  </div>
                </div>
          </div>
                       
  </section>
  <!-- End Restaurant Menu -->

 
  <!-- Start Gallery -->
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>Our Gallery</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-gallery-content">
             
              <!-- Start gallery image -->
              <div class="mu-gallery-body" id="mixit-container">
                <!-- start single gallery image -->
                <?php
                        $galerijee = executeQuery("SELECT * FROM galerija");
                        foreach($galerijee as $gal):
            ?>
                <div class="mu-single-gallery col-md-4 mix food">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <img alt="<?= $gal->alt?>" src="<?= $gal->src?>">
                    </figure>
                            
                  </div>
                </div>
                <?php endforeach; ?>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Gallery -->
  
  <!-- End Gallery -->
  
  <!-- Start Client Testimonial section -->
  <section id="mu-client-testimonial">
    <div class="mu-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-client-testimonial-area">
              <div class="mu-title">
                      
              </div>
              <!-- testimonial content -->
             
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Client Testimonial section -->

  

  <!-- Start Chef Section -->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-chef-area">
            <div class="mu-title">
              <span class="mu-subtitle">Our Professional</span>
              <h2>MASTER CHEF</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-chef-content" >
              <img src="assets/img/autor.jpg"/>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Chef Section -->

  
  <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              <span class="mu-subtitle">Get In Touch</span>
              <h2>Contact Us</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="mu-contact-left">
                    <form class="mu-contact-form">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name"><p class="error" id="nameggreske"></p>
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control"name="email" id="email" placeholder="Email"><p class="error" id="emailgreske"></p>
                      </div>                      
                      <div class="form-group">
                        <label for="message">Message</label>                        
                        <textarea class="form-control"  name="message" id="message" cols="30" rows="10" placeholder="Type Your Message"></textarea><p class="error" id="porukaGreske"></p>
                      </div>                      
                      <button type="button" id="submit"class="mu-send-btn">Send Message</button>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">
                      <h3>Office Address</h3>
                      <p>Your questions and comments are important to us. Our customer service team is available to answer any of your questions.</p>
                      <address>
                        <p><i class="fa fa-phone"></i> 552 457 6688</p>
                        <p><i class="fa fa-envelope-o"></i>sofija_vitorovic@hotmail.com</p>
                        <p><i class="fa fa-map-marker"></i>Belgrade, Serbia</p>
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3>Open Hours</h3>                      
                      <address>
                        <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                        <p><span>Saturday</span> 9.00 am to 10 pm</p>
                        <p><span>Sunday</span> 10.00 am to 12 pm</p>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->

  
  <!-- Start Footer -->
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
            <a href="#">Documentation</a>
            <a href="sitemap.xml">Sitemap</a>

          </div>         
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
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
  <script src="assets/js/proveraContact.js"></script> 

  </body>
</html>
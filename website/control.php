<?php 
  session_start(); // Starting the session

	include("functions.php"); // To include the code of "Functions.php" in this file as well

	redir_login(); // for redirecting the user to login page, because this page only for users
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Game Library</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="control.php" class="active">Control</a></li>
                        <li><a href="control_add.php">Add Game</a></li>
                        <li><a href="profile.php">Profile <img src="assets/images/profile-header.jpg" alt=""></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Start ***** -->
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 ">
              <div class=" header-text">
                <div class="row justify-content-center">
                  <p> </p>
                  <div class="col-lg-5">
                    <img src="assets/images/feature-left.jpg" alt="" style="border-radius: 23px;">
                  </div>
                  <!-- <div class="col-lg-8">
                    <div class="thumb">
                      <img src="assets/images/feature-right.jpg" alt="" style="border-radius: 23px;">
                      <a href="https://www.youtube.com/watch?v=r1b03uKWk_M" target="_blank"><i class="fa fa-play"></i></a>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class="game-details">
            <div class="row">
              <div class="col-lg-12">
                <h2>Control Panel</h2>
              </div>
              <div class="col-lg-12">
                <div class="content">
                  <div class="row">
                    <!-- ***** Gaming Library Start ***** -->
                    <div class="gaming-library">
                      <div class="col-lg-12">
                        <div class="heading-section">
                          <h4><em>Your</em> Products</h4>
                        </div>
                        <div class="item">
                          <ul>
                            <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                            <li><h4>Dota 2</h4><span>Sandbox</span></li>
                            <li><h4>Date Added</h4><span>24/08/2036</span></li>
                            <li><h4>Hours Played</h4><span>634 H 22 Mins</span></li>
                            <li><div class="main-button"><a href="#">update</a></div></li>
                            <li><div class="main-border-button"><a href="#">delete</a></div></li>
                          </ul>
                        </div>
                        <div class="item">
                          <ul>
                            <li><img src="assets/images/game-02.jpg" alt="" class="templatemo-item"></li>
                            <li><h4>Fortnite</h4><span>Sandbox</span></li>
                            <li><h4>Date Added</h4><span>22/06/2036</span></li>
                            <li><h4>Hours Played</h4><span>740 H 52 Mins</span></li>
                            <li><div class="main-button"><a href="#">update</a></div></li>
                            <li><div class="main-border-button"><a href="#">delete</a></div></li>
                          </ul>
                        </div>
                        <div class="item last-item">
                          <ul>
                            <li><img src="assets/images/game-03.jpg" alt="" class="templatemo-item"></li>
                            <li><h4>CS-GO</h4><span>Sandbox</span></li>
                            <li><h4>Date Added</h4><span>21/04/2036</span></li>
                            <li><h4>Hours Played</h4><span>892 H 14 Mins</span></li>
                            <li><div class="main-button"><a href="#">update</a></div></li>
                            <li><div class="main-border-button"><a href="#">delete</a></div></li>
                          </ul>
                        </div>
                      </div>
                      <!-- <div class="col-lg-12">
                        <div class="main-button">
                          <a href="profile.html">View Your Library</a>
                        </div>
                      </div> -->
                      </div>
                    <!-- ***** Gaming Library End ***** -->
                    <div class="col-lg-12">
                      <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout. You can make a <a href="https://paypal.me/templatemo" target="_blank">small contribution via PayPal</a> to info [at] templatemo.com and thank you for supporting. If you want to get the PSD source files, please contact us. Lorem ipsum dolor sit consectetur es dispic dipiscingei elit, sed doers eiusmod lisum hored tempor.</p>
                    </div>
                    <!-- <div class="col-lg-12">
                      <div class="main-border-button">
                        <a href="#">Download Fortnite Now!</a>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->

          <!-- ***** Other Start ***** -->
          <div class="other-games">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Your accounts</em> data</h4>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-01.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-02.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-03.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-02.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-03.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item">
                  <img src="assets/images/game-01.jpg" alt="" class="templatemo-item">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class="fa fa-star"></i> 4.8</li>
                    <li><i class="fa fa-download"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Other End ***** -->

        </div>
      </div>
    </div>

  </div>

  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <p>Copyright © 2023 <a href="https://twitter.com/mokh08">Mohammed Almalki</a>. All rights reserved. 
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>


  </body>

</html>

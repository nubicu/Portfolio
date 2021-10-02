<?php require 'lang\check_lang.php'; ?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css\style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php echo $lang['title'] ?></title>
  </head>
  <body>
    <!-- Main Navigation Start -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 fixed-top">
          <div class="container">
          <!--  <a class="navbar-brand" href="index.php"><?php echo $lang['navtitle'] ?></a> -->
            <a class="navbar-brand" href="index.php"><img class="img-fluid" src="img/coffee_logo.jpg" alt="Cofee Time"></img></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  <?php echo $lang['menu'] ?>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"><?php echo $lang['cofee'] ?></a>
                  <a class="dropdown-item" href="#"><?php echo $lang['tea'] ?></a>
                  <a class="dropdown-item" href="#"><?php echo $lang['snack'] ?></a>
                </div>
              </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-fw fa-envelope"></i><?php echo $lang['aboutme'] ?></a>
                </li>
              </ul>

              <div class="btn-group">
                <button type="button" class="btn btn-danger"><?php echo $lang['chooselang'] ?></button>
                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="index.php?lang=ro"><?php echo $lang['romanian'] ?></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="index.php?lang=en"><?php echo $lang['english'] ?></a>
                </div>
              </div>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="register\inregistrare.php"><button class="btn btn-primary" type="button" name="button"><?php echo $lang['register'] ?></button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login\autentificare.php"><button class="btn btn-primary" type="button" name="button"><?php echo $lang['login'] ?></button></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="check_user\verifica_utilizator.php"><button class="btn btn-primary" type="button" name="button"><?php echo $lang['check_user'] ?></button></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <!--Mask-->
        <div id="intro" class="view">
          <div class="mask"></div>
        </div>
        <!--/.Mask-->

      </header>
      <!--Main Navigation End-->

      <!-- Button trigger modal-->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCookie1">Cookies</button>

      <!--Modal: modalCookie-->
      <div class="modal fade top" id="modalCookie1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-frame modal-top modal-notify modal-info" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Body-->
            <div class="modal-body">
              <div class="row d-flex justify-content-center align-items-center">

                <p class="pt-3 pr-2">We use cookies to improve your website experience</p>

                <a type="button" class="btn btn-primary">Learn more <i class="fa fa-book ml-1"></i></a>
                <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Accept</a>
              </div>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <!--Modal: modalCookie-->

  <!--Main layout-->
  <main>
    <div class="container">
          <div class="jumbotron jumbotron-flud text-center">
            <div class="container">
              <h1 class="display-4"><?php echo $lang['title2'] ?></h1>
              <p class="lead"><?php echo $lang['description'] ?></p>
            </div>
          </div>
      </div>
    </main>
    <!--Main layout-->


      <!-- Footer -->
      <footer class="page-footer font-small unique-color-dark">

          <div style="background-color: #6351ce;">
            <div class="container">

              <!-- Grid row-->
              <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                  <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                  <!-- Facebook -->
                  <a class="fb-ic">
                    <i class="fa fa-facebook white-text mr-4"> </i>
                  </a>
                  <!-- Twitter -->
                  <a class="tw-ic">
                    <i class="fa fa-twitter white-text mr-4"> </i>
                  </a>
                  <!-- Google +-->
                  <a class="gplus-ic">
                    <i class="fa fa-google-plus white-text mr-4"> </i>
                  </a>
                  <!--Linkedin -->
                  <a class="li-ic">
                    <i class="fa fa-linkedin white-text mr-4"> </i>
                  </a>
                  <!--Instagram-->
                  <a class="ins-ic">
                    <i class="fa fa-instagram white-text"> </i>
                  </a>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row-->

            </div>
          </div>

          <!-- Footer Links -->
          <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3">

              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Company name</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit.</p>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Products</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">MDBootstrap</a></p>
                <p><a href="#!">MDWordPress</a></p>
                <p><a href="#!">BrandFlow</a></p>
                <p><a href="#!">Bootstrap Angular</a></p>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">Your Account</a></p>
                <p><a href="#!">Become an Affiliate</a></p>
                <p><a href="#!">Shipping Rates</a></p>
                <p><a href="#!">Help</a></p>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><i class="fa fa-home mr-3">New York, NY 10012, US</i></p>
                <p><i class="fa fa-envelope mr-3">info@example.com</i></p>
                <p><i class="fa fa-phone mr-3">+ 01 234 567 88</i></p>
                <p><i class="fa fa-print mr-3">+ 01 234 567 89</i></p>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Footer Links -->

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> Buzabrici-Filipescu Robert</a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->


    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

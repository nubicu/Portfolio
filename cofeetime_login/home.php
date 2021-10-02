<?php
require 'lang\check_lang.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: login\autentificare.php");
}
?>
<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bine ai venit</title>
	<link rel="stylesheet" href="css\pinguin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
      <div class="container">
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
              <a class="dropdown-item" href="home.php?lang=ro"><?php echo $lang['romanian'] ?></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="home.php?lang=en"><?php echo $lang['english'] ?></a>
            </div>
          </div>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="register\inregistrare.php"><button class="btn btn-primary" type="button" name="button"><?php echo $lang['register'] ?></button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login\autentificare.php"><button class="btn btn-primary" type="button" name="button"><i class="fa fa-fw fa-user"></i><?php echo $lang['login'] ?></button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="check_user\verifica_utilizator.php"><button class="btn btn-primary" type="button" name="button"><?php echo $lang['check_user'] ?></button></a>
            </li>
          </ul>
          </div>
      </div>
    </nav>

    <h1 align="center"><?php echo $lang['welcome_message']; echo ' '; echo $_SESSION['logged_in']['prenume']; ?>!</h1>
	<div class="penguin">
  <div class="penguin-bottom">
    <div class="right-hand"></div>
    <div class="left-hand"></div>
    <div class="right-feet"></div>
    <div class="left-feet"></div>
  </div>
  <div class="penguin-top">
    <div class="right-cheek"></div>
    <div class="left-cheek"></div>
    <div class="belly"></div>
    <div class="right-eye">
      <div class="sparkle"></div>
    </div>
    <div class="left-eye">
      <div class="sparkle"></div>
    </div>
    <div class="blush-right"></div>
    <div class="blush-left"></div>
    <div class="beak-top"></div>
    <div class="beak-bottom"></div>
  </div>
</div>
    <div class="text-center">
      <a href="login\logout.php" class="btn btn-danger" name="Deconectare"><?php echo $lang['disconnect'] ?></a>
    </div>

    <script  src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

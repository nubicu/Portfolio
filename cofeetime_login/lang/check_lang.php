<?php
session_start();

if (!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = 'en';
}

if (isset($_GET['lang']) && !empty($_GET['lang'])) {
  if ($_GET['lang'] == 'ro') {
    $_SESSION['lang'] = 'ro';
  }else {
    $_SESSION['lang'] = 'en';
  }
}

require $_SESSION['lang'] . '.php';
?>

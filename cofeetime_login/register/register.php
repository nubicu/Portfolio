<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $db = new PDO("mysql:host=localhost;dbname=test", 'root', 'D3m3nt');
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  $stmt = $db->prepare('SELECT * FROM users WHERE username = ?');
  $stmt->execute(array($_POST['username']));
  $user_found = $stmt->rowCount();

  if ($user_found > 0) {
    echo "Utilizatorul există!";
    exit;
  }

  if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['Cpassword']) || empty($_POST['email'])) {
    echo "Ai lăsat spații necompletate.";
    exit;
  }

  if (strlen($_POST['username']) < 3 || strlen($_POST['username']) > 16) {
    echo "Utilizatorul trebuie să conțină între 3 și 16 caractere.";
    exit;
  }
  if (strlen($_POST['password']) < 6 || strlen($_POST['password']) > 32) {
    echo "Parola trebuie să conțină între 3 și 16 caractere.";
    exit;
  }

  if ($_POST['password'] !== $_POST['Cpassword']) {
    echo "Parola introdusă nu este aceiași cu cea confirmată.";
    exit;
  }
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Nu ai introdus un email corect.";
    exit;
  }

  $stmt = $db->prepare("INSERT INTO users SET username = ?, prenume = ?, password = ?, email = ?");
  $stmt->execute(array(
    $_POST['username'],
    $_POST['prenume'],
    $_POST['password'],
    $_POST['email']
  ));

  echo "Success";
  header("Location: ..\index.php");
}

?>

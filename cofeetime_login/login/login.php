<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $db = new PDO("mysql:host=localhost;dbname=test", 'root', 'D3m3nt');

  if (empty($_POST['email']) || empty($_POST['password'])) {
    echo "Nu ai completat toate spațiile.";
  }

  $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute(array($_POST['email']));
  $found = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($found['email'] !== $_POST['email']) {
    echo "Acest cont nu există.";
    exit;
  }
  if ($found['password'] !== $_POST['password']) {
    echo "Parola nu este corectă.";
    exit;
  }

  $_SESSION['logged_in'] = array(
    'id' => $found['id'],
    'username' => $found['username'],
    'prenume' => $found['prenume'],
    'email' => $found['email']
  );
  header("Location: ..\home.php");
}

?>

<?php

if(isset($_POST['username'])) {
    $db = new PDO("mysql:host=localhost;dbname=test", 'root', 'D3m3nt');

    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute(array($_POST['username']));
    $found = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($found['username'] == $_POST['username']) {
        $data['available'] = true;
        $data['username'] = $found['username'];
        $data['email'] = $found['email'];
        $data['prenume'] = $found['prenume'];
    } else {
        $data['available'] = false;
    }
    
    echo json_encode($data);
}

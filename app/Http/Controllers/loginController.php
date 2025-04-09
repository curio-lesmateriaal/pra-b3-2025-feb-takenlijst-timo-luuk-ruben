<?php
session_start();
// Variabelen vullen
$action             = $_POST['action'];

$username           = $_POST['username'];
$email              = $_POST['email'];
$password           = $_POST['password'];
// echo $attractie . " / " . $capaciteit . " / " . $melder;

// 1. Verbinding
require_once '../../../backend/conn.php';

if($action == "login") {
    // 2. Query
    $query = "SELECT * FROM users WHERE username = :username";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":username" => $username
    ]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    if ($statement->rowcount() < 1) {
        header("Location: ../../../login.php?error=Geen actieve herinneringen aan dit account.");
        die("Geen actieve herinneringen aan dit account.");
    }
    if(!password_verify($password, $user['password'])) {
        header("Location: ../../../login.php?error=Wachtwoord onjuist");
        die("Wachtwoord onjuist.");
    }

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];  
    header("Location: ../../../index.php?msg=Succesvol ingelogd");
}
?>
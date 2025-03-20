<?php
//1. Verbinding
require_once '../../../backend/conn.php';


// Variabele
$titel              = $_POST['title'];
$beschrijving       = $_POST['description'];
$afdeling           = $_POST['department'];
$status             = $_POST['status'];
$deadline           = $_POST['deadline'];
$user               = $_POST['user'];


// 2. Query
$query = "INSERT INTO taken (titel, beschrijving, afdeling, status, deadline, user)
          VALUES (:title, :beschrijving, :afdeling, :status, :deadline, :user)";

$statement = $conn->prepare($query);
$statement->execute([
    ":title"            => $titel, 
    ":beschrijving"     => $beschrijving, 
    ":afdeling"         => $afdeling, 
    ":status"           => $status, 
    ":deadline"         => $deadline,
    ":user"             => $user
]);

header("Location: ../../../index.php?msg=Taak toegevoegd");
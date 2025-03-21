<?php
//1. Verbinding
require_once '../../../backend/conn.php';
$action = $_POST['action'];

if($action == "create") {
    // Variabele
    $titel              = $_POST['title'];
    $beschrijving       = $_POST['description'];
    $afdeling           = $_POST['department'];
    $status             = $_POST['status'];
    $deadline           = $_POST['deadline'];
    $user               = $_POST['user'];


    // 2. Query
    $query = "INSERT INTO taken (titel, beschrijving, afdeling, status, deadline, user)
              VALUES (:titel, :beschrijving, :afdeling, :status, :deadline, :user)";

    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel"            => $titel, 
        ":beschrijving"     => $beschrijving, 
        ":afdeling"         => $afdeling, 
        ":status"           => $status, 
        ":deadline"         => $deadline,
        ":user"             => $user
    ]);

    header("Location: ../../../planbord.php?msg=Taak toegevoegd");
}

if($action == "create") {
    // Variabele
    $titel              = $_POST['title'];
    $beschrijving       = $_POST['description'];
    $afdeling           = $_POST['department'];
    $status             = $_POST['status'];
    $deadline           = $_POST['deadline'];
    $user               = $_POST['user'];


    // 2. Query
    $query = "UPDATE taken 
              SET titel = :titel, beschrijving = :beschrijving, afdeling = :afdeling, status = :status, deadline = :deadline, user = :user";

    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel"            => $titel, 
        ":beschrijving"     => $beschrijving, 
        ":afdeling"         => $afdeling, 
        ":status"           => $status, 
        ":deadline"         => $deadline,
        ":user"             => $user
    ]);

    header("Location: ../../../planbord.php?msg=Taak aangepast");
}
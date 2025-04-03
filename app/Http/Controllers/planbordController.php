<?php
//1. Verbinding
require_once '../../../backend/conn.php';
$action = $_POST['action'] ?? $_GET['action'] ?? null;

if($action == "create") {
    $titel              = $_POST['title'];
    $beschrijving       = $_POST['description'];
    $afdeling           = $_POST['department'];
    $status             = $_POST['status'];
    $deadline           = $_POST['deadline'];
    $user               = $_POST['user'];

    $query = "INSERT INTO taken (titel, beschrijving, afdeling, status, deadline, user, created_at)
              VALUES (:titel, :beschrijving, :afdeling, :status, :deadline, :user, NOW())";

    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel"            => $titel, 
        ":beschrijving"     => $beschrijving, 
        ":afdeling"         => $afdeling, 
        ":status"           => $status, 
        ":deadline"         => $deadline ? $deadline : null,
        ":user"             => $user
    ]);

    header("Location: ../../../planbord.php?msg=Taak toegevoegd");
    exit();
}

if($action == "update") {
    $titel              = $_POST['title'];
    $beschrijving       = $_POST['description'];
    $afdeling           = $_POST['department'];
    $status             = $_POST['status'];
    $deadline           = $_POST['deadline'] ?? null;
    $user               = $_POST['user'] ?? null;
    $id                 = $_POST['id'];

    $query = "UPDATE taken 
              SET titel = :titel, beschrijving = :beschrijving, afdeling = :afdeling, 
                  status = :status, deadline = :deadline, user = :user
              WHERE id = :id";

    $statement = $conn->prepare($query);
    $statement->execute([
        ":titel"            => $titel, 
        ":beschrijving"     => $beschrijving, 
        ":afdeling"         => $afdeling, 
        ":status"           => $status, 
        ":deadline"         => $deadline,
        ":user"             => $user,
        ":id"               => $id
    ]);

    header("Location: ../../../planbord.php?msg=Taak aangepast");
    exit();
}

if($action == "delete") {
    $id = $_GET['id'] ?? $_POST['id'];

    if (!$id) {
        header("Location: ../../../planbord.php?msg=Geen taak-ID ontvangen");
        exit();
    }

    $query = "DELETE FROM taken WHERE id = :id";

    $statement = $conn->prepare($query);
    $statement->execute([
        ":id" => $id
    ]);

    header("Location: ../../../planbord.php?msg=Taak Succesvol Verwijderd");
    exit();
}

header("Location: ../../../planbord.php?msg=Ongeldige actie");
exit();

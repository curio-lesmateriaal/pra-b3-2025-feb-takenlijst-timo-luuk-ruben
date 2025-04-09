<?php require_once '../backend/config.php'; ?>
<!doctype html>
<html lang="nl">
<head>
    <title>Planbord - Index</title>
    <link rel="stylesheet" href="../public_html/css/main.css">
    <link rel="stylesheet" href="../public_html/css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lavishly+Yours&family=Lexend:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <style>html {font-family: lato;}</style>
    <script src="https://kit.fontawesome.com/d1041f8226.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php require_once '../resources/views/components/header.php'; ?>

    <!-- Melding onder de header -->
    <?php if(isset($_GET['msg'])): ?>
        <div class="msg"><?php echo htmlspecialchars($_GET['msg']); ?></div>
    <?php endif; ?>

    <div class="container">
                <h1>Planbord</h1>

        <!-- Nieuwe Taak Toevoegen Knop -->
        <div class="button-container">
            <a href="create.php" class="button">Nieuwe Taak Toevoegen &gt;</a>

            <form action="" method="get">

                <div class="form-group">
                    <select name="status" id="form-select">
                        <?php $status = $_GET['status'] ?>

                        <option value="">Alles</option>
                        <option value="Te-doen"         <?php if ($status == 'Te-doen')     { echo 'selected'; }; ?>>Te doen</option>
                        <option value="Mee-bezig"       <?php if ($status == 'Mee-bezig')   { echo 'selected'; }; ?>>Mee bezig</option>
                        <option value="Klaar"           <?php if ($status == 'Klaar')       { echo 'selected'; }; ?>>Klaar</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit">Filter</button>
                </div>
            </form>
        </div>

        <!-- Takenoverzicht -->
        <?php
            // Filter functionaliteit
            // Verbinding
            require_once '../backend/conn.php';

            if(isset($_SESSION['user_id'])) {
                $query = "SELECT username FROM users WHERE username = :username";
                $statement = $conn->prepare($query);
                $statement->execute([
                    ":username" => $_SESSION['username']
                ]);
                $current_user = $statement->fetch(PDO::FETCH_ASSOC);

                if(isset($status) && $status != "") {
                    $query = "SELECT * FROM taken WHERE status = :status AND user = :user ORDER BY deadline DESC";
                }
                if (!isset($status) || $status == "") {
                    $query = "SELECT * FROM taken WHERE user = :user ORDER BY deadline DESC";
                }
    
                $statement = $conn->prepare($query);
    
                if(isset($status) && $status != "") {
                    $statement->execute([
                        ":status" => $status, 
                        ":user"   => $current_user['username']
                    ]);
                }
                else {
                    $statement->execute([
                        ":user"   => $current_user['username']
                    ]);
                }
                $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
            }
            else {
                if(isset($status) && $status != "") {
                    $query = "SELECT * FROM taken WHERE status = :status ORDER BY deadline DESC";
                }
                if (!isset($status) || $status == "") {
                    $query = "SELECT * FROM taken ORDER BY deadline DESC";
                }
    
                $statement = $conn->prepare($query);
    
                if(isset($status) && $status != "") {
                    $statement->execute([
                        ":status" => $status
                    ]);
                }
                else {
                    $statement->execute();
                }
                $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
            }
        ?>

        <table class="task-table">
            <thead>
                <tr>
                    <th>Titel</th>
                    <th>Beschrijving</th>
                    <th>Afdeling</th>
                    <th>Status</th>
                    <th>Deadline</th>
                    <th>Gebruiker</th>
                    <th>Aangemaakt op</th>
                    <th>Aanpassen</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($taken as $taak): ?>
                    <tr>
                        <td><?php echo $taak['titel']; ?></td>
                        <td><?php echo $taak['beschrijving']; ?></td>
                        <td><?php echo $taak['afdeling']; ?></td>
                        <td><?php echo $taak['status']; ?></td>
                        <td><?php echo $taak['deadline']; ?></td>
                        <td><?php echo $taak['user']; ?></td>
                        <td><?php echo $taak['created_at']; ?></td>
                        <td style="text-align: center;"><a href="edit.php?id=<?php echo $taak['id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php require_once '../resources/views/components/footer.php'; ?>
</body>
</html>
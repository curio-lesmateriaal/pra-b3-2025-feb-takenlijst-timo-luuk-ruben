<?php require_once '../backend/config.php'; ?>
<!doctype html>
<html lang="nl">
<head>
    <title>Planbord - Done</title>
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

    <?php if(isset($_GET['msg'])): ?>
        <div class="msg"><?php echo htmlspecialchars($_GET['msg']); ?></div>
    <?php endif; ?>

    <div class="container">
        <h1>Done Taken</h1>

        <?php
            require_once '../backend/conn.php';
            $query = "SELECT * FROM taken WHERE status = 'Done' ORDER BY deadline ASC";
            $statement = $conn->prepare($query);
            $statement->execute();
            $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
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
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php require_once '../resources/views/components/footer.php'; ?>
</body>
</html>
<?php require_once 'backend/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>Planbord/Index</title>

    <!--CSS-->
    <link rel="stylesheet" href="public_html/css/main.css">
    <link rel="stylesheet" href="public_html/css/normalize.css">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lavishly+Yours&family=Lexend:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <style>html {font-family: lato;}</style>
</head>

<body>

    <?php require_once 'resources/views/components/header.php'; ?>

    <div class="container">
        <h1>Placeholder</h1>
        <a href="create.php">Create &gt;</a>

        <?php if(isset($_GET['msg'])) 
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>

        <?php
            require_once 'backend/conn.php';

            $query = "SELECT * FROM taken";
            $statement = $conn->prepare($query);
            $statement->execute();
            $taken = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <tr style="text-align: left;">
                <th>Titel</th>
                <th>Beschrijving</th>
                <th>Afdeling</th>
                <th>Status</th>
                <th>Deadline</th>
                <th>User</th>
                <th>Created at</th>
                <!--<th>Placeholder</th>-->
                <!--<th>Placeholder</th>-->
            </tr>

            <?php foreach($taken as $taak): ?>
                <tr>
                    <td><?php echo $taak['titel']; ?></td>
                    <td><?php echo $taak['beschrijving']; ?></td>
                    <td><?php echo $taak['afdeling']; ?></td>
                    <td><?php echo $taak['status']; ?></td>
                    <td><?php echo $taak['deadline']; ?></td>
                    <td><?php echo $taak['user']; ?></td>
                    <td><?php echo $taak['created_at']; ?></td>
                    <!--<td><?php echo $taak['Placeholder']; ?></td>-->
                    <!--<td><a href="create.php?id=<?php echo $taak['id'];?>">Create</a></td>-->
                </tr>
            <?php endforeach; ?>
        </table>

    </div>

</body>

</html>

<?php require_once __DIR__.'/backend/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>Placeholder</title>
</head>

<body>

    <?php require_once __DIR__.'/resources/views/components/header.php'; ?>

    <div class="container">
        <h1>Placeholder</h1>
        <a href="create.php">Placeholder &gt;</a>

        <?php if(isset($_GET['msg'])) 
        {
            echo "<div class='msg'>" . $_GET['msg'] . "</div>";
        } ?>

        <?php
            require_once 'backend/conn.php';

            $query = "SELECT * FROM takenlijst";
            $statement = $conn->prepare($query);
            $statement->execute();
            $meldingen = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <tr>
                <th>Placeholder</th>
                <th>Placeholder</th>
                <th>Placeholder</th>
                <th>Placeholder</th>
                <th>Placeholder</th>
                <th>Placeholder</th>
                <th>Placeholder</th>
                <th>Placeholder</th>
                <th>Placeholder</th>
            </tr>

            <?php foreach($Placeholder as $Placeholder): ?>
                <tr>
                    <td><?php echo $Placeholder['Placeholder']; ?></td>
                    <td><?php echo $Placeholder['Placeholder']; ?></td>
                    <td><?php echo $Placeholder['Placeholder']; ?></td>
                    <td><?php echo $Placeholder['Placeholder']; ?></td>
                    <td><?php echo $Placeholder['Placeholder']; ?></td>
                    <td><?php echo $Placeholder['Placeholder']; ?></td>
                    <td><?php echo $Placeholder['Placeholder']; ?></td>
                    <td><?php echo $Placeholder['Placeholder']; ?></td>
                    <td><a href="Placeholder.php?id=<?php echo $Placeholder['Placeholder']; ?>">Placeholder</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>

</body>

</html>

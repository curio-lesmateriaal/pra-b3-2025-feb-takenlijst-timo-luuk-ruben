<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planbord - Edit</title>
    
    <link rel="stylesheet" href="public_html/css/main.css">
    <link rel="stylesheet" href="public_html/css/normalize.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lavishly+Yours&family=Lexend:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <style>html {font-family: lato;}</style>

    <!--Font Awesome--><script src="https://kit.fontawesome.com/d1041f8226.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="header">
            <a href="index.php">Terug</a> 
        </div>
    </header>

    <?php
        require_once 'backend/conn.php';

        $id = $_GET['id'];

        $query = "SELECT * FROM taken WHERE id = :id";
        $statement = $conn->prepare($query);
        $statement->execute([
            ":id" => $id
        ]);
        $taak = $statement->fetch(PDO::FETCH_ASSOC);
    ?>

    <div class="container">
        <h1>Taak Aanpassen</h1>
        <form action="app/Http/Controllers/planbordController.php" method="post">
            <input type="hidden" name="action" id="action" value="update">
            <input type="hidden" name="id" id="id" value="<?php echo $taak['id']; ?>">
            
            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" name="title" id="title" class="form-input" value="<?php echo $taak['titel'] ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Beschrijving:</label>
                <textarea name="description" id="description" class="form-input" required><?php echo $taak['beschrijving'] ?></textarea>
            </div>

            <div class="form-group">
                <label for="department">Afdeling:</label>
                <select name="department" id="department" class="form-input" required>
                    <option value="Sales" <?php echo ($taak['afdeling'] == 'Sales') ? 'selected' : ''; ?>>Sales</option>
                    <option value="Marketing" <?php echo ($taak['afdeling'] == 'Marketing') ? 'selected' : ''; ?>>Marketing</option>
                    <option value="IT" <?php echo ($taak['afdeling'] == 'IT') ? 'selected' : ''; ?>>IT</option>
                    <option value="HR" <?php echo ($taak['afdeling'] == 'HR') ? 'selected' : ''; ?>>HR</option>
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-input" required>
                    <option value="To-do" <?php echo ($taak['status'] == 'To-do') ? 'selected' : ''; ?>>To-do</option>
                    <option value="In-progress" <?php echo ($taak['status'] == 'In-progress') ? 'selected' : ''; ?>>In-progress</option>
                    <option value="Done" <?php echo ($taak['status'] == 'Done') ? 'selected' : ''; ?>>Done</option>
                </select>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline:</label>
                <input type="datetime-local" name="deadline" id="deadline" class="form-input" 
                       value="<?php echo $taak['deadline'] ? date('Y-m-d\TH:i', strtotime($taak['deadline'])) : ''; ?>">
            </div>

            <div class="form-group">
                <label for="user">Gebruiker:</label>
                <input type="text" name="user" id="user" class="form-input" value="<?php echo $taak['user'] ?>" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Opslaan" class="button">
            </div>
        </form>

        <form action="app/Http/Controllers/planbordController.php" method="post" onsubmit="return confirm('Weet je zeker dat je deze taak wilt verwijderen?');">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id" value="<?php echo $taak['id']; ?>">
            <input type="submit" value="Verwijderen" class="button delete-button">
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planbord/create</title>
    
    <!--CSS-->
    <link rel="stylesheet" href="../../public_html/css/main.css">
    <link rel="stylesheet" href="../../public_html/css/normalize.css">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lavishly+Yours&family=Lexend:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <style>html {font-family: lato;}</style>
</head>
<body>
    <a href="index.php">terug</a>
    <form action="../../app/Http/Controllers/planbordController.php" method="post" style="width: fit-content; margin: auto; transform: translateX(-15%);">

        <div class="form-group">
            <label for="title">Titel:</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div class="form-group">
            <label for="description">Beschrijving:</label>
            <textarea name="description" id="description" cols="30" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="department">Afdeling:</label>
            <input type="text" name="department" id="department" required>
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="To-do">Te doen</option>
                <option value="In-progress">Mee Bezig</option>
                <option value="Done">Klaar</option>
            </select>
        </div>

        <div class="form-group">
            <label for="deadline">Deadline:</label>
            <input type="datetime-local" name="deadline" id="deadline">
        </div>

        <div class="form-group">
            <label for="user">Gebruiker:</label>
            <input type="number" name="user" id="user">
        </div>

        <label for="create"></label>
        <input type="submit" value="create">
    </form>
</body>
</html>
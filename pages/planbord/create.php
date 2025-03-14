<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planbord/create</title>
    <link href="../../public_html/css/main.css" rel="stylesheet">
    <link href="../../public_html/css/normalize.css" rel="stylesheet">
</head>
<body>
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
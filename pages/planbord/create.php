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
            <label for="title">Titel: </label>
            <input type="text" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="type">Type: </label>
            <input type="text" name="type" id="type">
        </div>

        <div class="form-group">
            <label for="deadline">Deadline: </label>
            <input type="date" name="deadline" id="deadline">
        </div>

        <div class="form-group">
            <label for="makeOn">Maken op: </label>
            <input type="date" name="makeOn" id="makeOn">
        </div>

        <label for="create"></label>
        <input type="submit" value="create">
    </form>
</body>
</html>
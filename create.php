<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planbord - Create</title>
    
    <link rel="stylesheet" href="public_html/css/main.css">
    <link rel="stylesheet" href="public_html/css/normalize.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lavishly+Yours&family=Lexend:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <style>html {font-family: lato;}</style>
</head>
<body>
    <header>
        <div class="header">
            <a href="index.php">Terug</a> 
        </div>
    </header>

    <div class="container">
        <h1>Nieuwe Taak Toevoegen</h1>
        <form action="app/Http/Controllers/planbordController.php" method="post">
        <input type="hidden" name="action" id="action" value="create">

            <div class="form-group">
                <label for="title">Titel:</label>
                <input type="text" name="title" id="title" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="description">Beschrijving:</label>
                <textarea name="description" id="description" cols="30" rows="4" class="form-input"></textarea>
            </div>

            <div class="form-group">
                <label for="department">Afdeling:</label>
                <input type="text" name="department" id="department" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-input" required>
                    <option value="To-do">Te doen</option>
                    <option value="In-progress">Mee Bezig</option>
                    <option value="Done">Klaar</option>
                </select>
            </div>

            <div class="form-group">
                <label for="deadline">Deadline:</label>
                <input type="datetime-local" name="deadline" id="deadline" class="form-input">
            </div>

            <div class="form-group">
                <label for="user">Gebruiker:</label>
                <input type="number" name="user" id="user" class="form-input">
            </div>

            <div class="form-group">
                <input type="submit" value="Create" class="button">
            </div>
        </form>
    </div>

    <footer>
</body>
    <?php require_once 'resources/views/components/footer.php'; ?>
</body>
</html>
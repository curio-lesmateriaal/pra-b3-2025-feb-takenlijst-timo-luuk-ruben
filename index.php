<?php require_once __DIR__.'/backend/config.php'; ?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developerland - Takenlijst</title>
    <link rel="stylesheet" href="public_html/css/normalize.css">
    <link rel="stylesheet" href="public_html/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php require_once __DIR__.'./resources/views/components/header.php'; ?>

    <main class="container">
        <h1>Welkom op Developerland Takenlijst</h1>
        <p class="intro">Vind hier uw taken en blijf georganiseerd. Onze website helpt u om al uw taken efficiënt te beheren en bij te houden.</p>
        <a href="create.php" class="button">Start met taken toevoegen &gt;</a>

        <?php if(isset($_GET['msg'])): ?>
            <div class="msg"><?php echo htmlspecialchars($_GET['msg']); ?></div>
        <?php endif; ?>
    </main>

    <?php require_once __DIR__.'./resources/views/components/footer.php'; ?>
</body>
</html>
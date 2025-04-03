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
    <?php require_once __DIR__.'/resources/views/components/header.php'; ?>

    <main class="container">
        <div class="homepage-header">
            <img src="public_html/assets/img/logo-big-v4.png" alt="Developerland Logo" class="logo">
            <h1>Welkom op Developerland Takenlijst</h1>
        </div>

        <p class="intro">Vind hier uw taken en blijf georganiseerd. Onze website helpt u om al uw taken efficiënt te beheren en bij te houden.</p>

        <a href="tasks/planbord.php" class="button button-index">Naar het Takenoverzicht &gt;</a>

        <?php if(isset($_GET['msg'])): ?>
            <div class="msg"><?php echo htmlspecialchars($_GET['msg']); ?></div>
        <?php endif; ?>
    </main>

    <?php require_once __DIR__.'/resources/views/components/footer.php'; ?>
</body>
</html>
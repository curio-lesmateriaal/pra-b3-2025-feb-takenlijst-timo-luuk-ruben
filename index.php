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
        <!-- Logo en Titel -->
        <div class="homepage-header">
            <img src="public_html/assets/img/logo-big-v4.png" alt="Developerland Logo" class="logo">
            <h1>Welkom op Developerland Takenlijst</h1>
        </div>

        <!-- Introductietekst -->
        <p class="intro">Vind hier uw taken en blijf georganiseerd. Onze website helpt u om al uw taken efficiënt te beheren en bij te houden.</p>

        <!-- Link naar Takenoverzicht -->
        <a href="planbord.php" class="button">Naar het Takenoverzicht &gt;</a>

        <!-- Bericht weergeven als er een is -->
        <?php if(isset($_GET['msg'])): ?>
            <div class="msg"><?php echo htmlspecialchars($_GET['msg']); ?></div> <!-- Voorkom XSS-aanvallen -->
        <?php endif; ?>
    </main>

    <?php require_once __DIR__.'./resources/views/components/footer.php'; ?>
</body>
</html>
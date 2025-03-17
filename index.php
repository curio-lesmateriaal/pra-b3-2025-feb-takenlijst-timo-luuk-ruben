<?php require_once __DIR__.'/backend/config.php'; ?>
<!doctype html>
<html lang="nl">

<head>
    <title>Developerland - Takenlijst</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="public_html/css/normalize.css">
    <link rel="stylesheet" href="public_html/css/main.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header">
            <a href="../../pra_b3/index.php">Home</a>
            <a href="../../../pra_b3/pages/planbord/index.php">Planbord</a>
            <a href="../../../pra_b3/pages/contact.php">Contact</a>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <h1>Welkom op Developerland Takenlijst</h1>
        <p class="intro">Vind hier uw taken en blijf georganiseerd. Onze website helpt u om al uw taken efficiënt te beheren en bij te houden.</p>
        <a href="create.php" class="button">Start met taken toevoegen &gt;</a>

        <?php if(isset($_GET['msg'])): ?>
            <div class="msg"><?php echo $_GET['msg']; ?></div>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Developerland</p>
        <p>Neem contact op via <a href="mailto:info@developerland.nl">info@developerland.nl</a></p>
        <p>Volg ons op <a href="#">Twitter</a> en <a href="#">LinkedIn</a></p>
    </footer>
</body>

</html>
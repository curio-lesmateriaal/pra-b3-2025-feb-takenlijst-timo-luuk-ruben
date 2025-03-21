<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Planbord</title>

    <link rel="stylesheet" href="public_html/css/normalize.css">
    <link rel="stylesheet" href="public_html/css/main.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lavishly+Yours&family=Lexend:wght@100..900&family=Playwrite+IT+Moderna:wght@100..400&display=swap" rel="stylesheet">
    <style>html {font-family: lato;}</style>
</head>
<body>
    <?php require_once 'resources/views/components/header.php'; ?>

    <main>
        <section class="contact-intro">
            <div class="container">
                <h1 class="section-title">Contact</h1>
                <p class="section-subtitle">Neem contact met ons op voor vragen, feedback of samenwerkingen</p>
            </div>
        </section>

        <div class="container">
            <div class="contact-info">
                <div class="info-card">
                    <h3>Contactgegevens</h3>
                    <p>Heb je een vraag, of werkt wat niet? Neem dan contact met ons op via onderstaande gegevens.</p>
                    <p class="email-link"><a href="mailto:info@developerland.nl">info@developerland.nl</a></p>
                    <p>telfoon: 0161-25 58 22 96</p>
                    <p>mobiel telefoon: 06- 98 42 63 51 </p>
                </div>
            </div>
        </div>
    </main>

    <?php require_once 'resources/views/components/footer.php'; ?>
</body>
</html>
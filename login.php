<!doctype html>
<html lang="nl">

<head>
    <title>Login Pagina</title>
    <link rel="stylesheet" href="public_html/css/normalize.css">
    <link rel="stylesheet" href="public_html/css/main.css">
</head>
<style>
    form {
        width: 50%;
        margin: auto;
        transform: translateY(-50%);
    }
    .form-group {
        width: 100%;
    }
    input {
        width: 100%;
    }
    .button {
        width: 100%;
    }

</style>
<body>

    <?php require_once 'resources/views/components/header.php'; ?>

    <?php if(isset($_GET['error']))
        {
            echo "<div class='error msg'>" . $_GET['error'] . "</div>";
        } 
        else if (isset($_GET['pass'])){
            echo "<div class='pass msg'>" . $_GET['error'] . "</div>";
        }
    ?>

    <form action="app/Http/Controllers/loginController.php" method="post">
        <input type="hidden" name="action" value="login">        
        
        <div class="form-group">
            <label for="username">Gebruikersnaam:</label>
            <input type="text" name="username">
        </div>

        <div class="form-group">
            <label for="password">Wachtwoord:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" name="Inloggen" value="Inloggen" class="button">
    </form>

</body>

</html>

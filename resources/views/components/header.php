<header>
    <?php
        require_once __DIR__.'/../../../backend/config.php';
        session_start();
    ?>
    <div class="header">
        <a href="<?php echo $base_url; ?>/index.php">Home</a>
        <a href="<?php echo $base_url; ?>/tasks/planbord.php">Planbord</a>
        <a href="<?php echo $base_url; ?>/contact.php">Contact</a>

        <?php if(!isset($_SESSION['user_id'])): ?>
                <a href="<?php echo $base_url; ?>/login.php">Inloggen</a>
            <?php endif; ?>
            <?php if(isset($_SESSION['user_id'])): ?>
                <!--<a href="#account.php?id=<?php echo $_SESSION['user_id']?>">Welkom <?php echo $_SESSION['username']; ?></a>-->
                <a href="<?php echo $base_url?>/logout.php"><?php echo $_SESSION['username'];?> | Uitloggen</a>
            <?php endif; ?>
    </div>
</header>
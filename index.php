<?php
include("libs/libs.php");
include("libs/router.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>LogHappens</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#1bb7a0">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Comfortaa">
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/custom.min.css">
</head>
<body data-color-default="<?= $colors['default'] ?>" data-color-notice="<?= $colors['notice'] ?>">
    <header id="header" class="page-topbar">
        <?php include('views/header.php') ?>
    </header>

    <main id="main">
        <div class="row">
            <aside id="left-sidebar-nav" class="col s12 m3 no-padding">
                <?php include('views/sidemenu.php') ?>
            </aside>

            <section id="content" class="col s12 m9">
                <div class="log-container">
                    <?php include($page); ?>
                </div>
            </section>
        </div>
    </main>

    <footer class="page-footer white">
        <?php include('views/footer.php') ?>
    </footer>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="vendors/push.js/push.min.js"></script>
    <script type="text/javascript" src="js/custom-script.js"></script>
</body>
</html>

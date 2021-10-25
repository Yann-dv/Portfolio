<?php

require ('./app/textContent.php');

?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link href="./public/css/style.css" rel="stylesheet"/>
    </head>
        
    <!--<body onselectstart="return false" oncontextmenu="return false" 
    ondragstart="return false" onMouseOver="window.status='No right click '; return true;">-->
    <body>
        <?php require('./app/view/navbar.php'); ?>
        <?php require('./app/view/services.php'); ?>


        <?php echo '<h1 class="mainTitle">' . $page_title. '</h1>' ?>
        <?php echo '<h2 class="mainSubtitle">' . $page_subtitle. '</h2>' ?>
        <?php echo '<div id="services">' . $services . '</div>'?>
        <?php echo '<div id="services">' . $skills . '</div>'?>
        <?php echo '<div id="services">' . $portfolio . '</div>'?>
        <?php echo '<div id="services">' . $prices . '</div>'?>
    </body>
</html>


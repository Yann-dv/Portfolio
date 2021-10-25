<?php

require ('./app/textContent.php');

?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title ?></title>
        <link href="./public/css/style.css" rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/158c254b57.js"></script>
    </head>
        
    <!--<body onselectstart="return false" oncontextmenu="return false" 
    ondragstart="return false" onMouseOver="window.status='No right click '; return true;">-->
    <body>
        <?php require('./app/view/header.php'); ?>
        <?php require('./app/view/navbar.php'); ?>
        <?php require('./app/view/services.php'); ?>
        <?php require('./app/view/skills.php'); ?>
        <?php require('./app/view/portfolio.php'); ?>
        <?php require('./app/view/prices.php'); ?>
        <?php require('./app/view/about.php'); ?>
        <?php require('./app/view/contact.php'); ?>

        <?php echo '<div class="navbar" id="navbar">' . $navbar . '</div>'?>
        <?php echo '<div class="header">' . $header . '</div>' ?>
        <?php echo '<div class="contentBlock" id="services">' . $services . '</div>'?>
        <?php echo '<div class="contentBlock" id="skills">' . $skills . '</div>'?>
        <?php echo '<div class="contentBlock" id="portfolio">' . $portfolio . '</div>'?>
        <?php echo '<div class="contentBlock" id="prices">' . $prices . '</div>'?>
        <?php echo '<div class="contentBlock" id="about">' . $about . '</div>'?>
        <?php echo '<div class="contentBlock" id="contact">' . $contact . '</div>'?>
    </body>
</html>


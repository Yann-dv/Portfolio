<?php

require ('./app/textContent.php');
require('./app/view/header.php'); 
require('./app/view/navbar.php'); 
require('./app/view/services.php');
require('./app/view/skills.php'); 
require('./app/view/portfolio.php');
require('./app/view/prices.php'); 
require('./app/view/about.php');
require('./app/view/contact.php');
require('./app/view/contactModalForm.php');

?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title ?></title>
        <link rel="icon" href="././public/image/favicon.ico">
        <link href="./public/css/style.css" rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/158c254b57.js"></script>
        <script async src="./app.js" defer></script>
    </head>
        
    <!--<body onselectstart="return false" oncontextmenu="return false" 
    ondragstart="return false" onMouseOver="window.status='No right click '; return true;">-->
    <body>
        <div class="mainContent">

            <?php echo '<nav class="navbar fadeLoad" id="navbar">' . $navbar . '</nav>'?>
            <?php echo '<div class="header fadeLoad" id="header">' . $header . '</div>' ?>
            <?php echo '<div class="contentBlock fadeLoad" id="services">' . $services . '</div>'?>
            <?php echo '<div class="contentBlock fadeLoad" id="skills">' . $skills . '</div>'?>
            <?php echo '<div class="contentBlock fadeLoad" id="portfolio">' . $portfolio . '</div>'?>
            <?php echo '<div class="contentBlock fadeLoad" id="prices">' . $prices . '</div>'?>
            <?php echo '<div class="contentBlock fadeLoad" id="about">' . $about . '</div>'?>
            <?php echo '<div class="contentBlock fadeLoad" id="contact">' . $contact . '</div>'?>
            <?php echo '<div class="modal" id="contactModal">' . $contactModalForm . '</div>'?>
        </div>
    </body>
</html>


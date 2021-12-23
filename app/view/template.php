<?php

require('./app/view/header.php'); 
require('./app/view/navbar.php'); 
require('./app/view/navBurger.php'); 
require('./app/view/services.php');
require('./app/view/skills.php'); 
require('./app/view/portfolio.php');
require('./app/view/prices.php'); 
require('./app/view/about.php');
require('./app/view/contact.php');
require('./app/view/contactModalForm.php');

?>        
    <!--<body onselectstart="return false" oncontextmenu="return false" 
    ondragstart="return false" onMouseOver="window.status='No right click '; return true;">-->
    <body>
        <div class="mainContent">

            <?php echo '<nav class="navbar fadeLoad" id="navbar">' . $navbar . '</nav>'?>
            <?php echo '<nav class="navburger fadeLoad" id="navBurger">' . $navburger . '</nav>'?>
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


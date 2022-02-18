<!--<body onselectstart="return false" oncontextmenu="return false" 
ondragstart="return false" onMouseOver="window.status='No right click '; return true;">-->
<body>

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

    <main class="mainContent">
        <?php echo '<nav role="desktop navigation" class="navbar fadeLoad" id="navbar">' . $navbar . '</nav>'?>
        <?php echo '<nav role="mobile navigation" class="navburger fadeLoad" id="navBurger">' . $navburger . '</nav>'?>
        <?php echo '<article class="header fadeLoad" id="header">' . $header . '</article>' ?>
        <?php echo '<article class="contentBlock fadeLoad" id="services">' . $services . '</article>'?>
        <?php echo '<article class="contentBlock fadeLoad" id="skills">' . $skills . '</article>'?>
        <?php echo '<article class="contentBlock fadeLoad" id="portfolio">' . $portfolio . '</article>'?>
        <?php echo '<article class="contentBlock fadeLoad" id="prices">' . $prices . '</article>'?>
        <?php echo '<article class="contentBlock fadeLoad" id="about">' . $about . '</article>'?>
        <?php echo '<article class="contentBlock fadeLoad" id="contact">' . $contact . '</article>'?>
        <?php echo '<article class="modal" id="contactModal" aria-hidden="true" role="dialog" aria-describedby="modalTitle">' . $contactModalForm . '</article>'?>
    </main>
</body>


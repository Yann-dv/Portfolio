
<?php
require('./vendor/composer/autoload_files.php');
require ('./app/textContent.php');
?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Yann Hagege, Hagege, Yann, site web, création de site web, développeur web, web developer, site internet, web design, webdesigner, site design, design site web, creative web, paris">
        <meta name="description" content="Yann H. vous aide à concevoir et produire différentes solutions digitales pour votre entreprise : création de site web vitrine, site e-commerce, chat/forum d'entreprise, et pleins d'autres solutions pour vous aider à vous développer grâce aux outils informatiques et la puissance du web.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

        <!--Robots meta tags-->
        <meta name="robots" content="index, follow">
        <meta property="og:title" content="Yann Hagege - Création de sites et applications Web">
        <meta property="twitter:title" content="Yann Hagege - Création de sites et applications Web">
        <meta property="og:description" content="Yann H. vous aide à concevoir et produire différentes solutions digitales pour tous vos projets de sites/applications web.">
        <meta property="twitter:description" content="Yann H. vous aide à concevoir et produire différentes solutions digitales pour tous vos projets de sites/applications web.">
        <meta property="og:image" content="https://portfolio-yh-dev.herokuapp.com/public/image/socials_micro_banner.jpg">
        <meta property="twitter:image" content="https://portfolio-yh-dev.herokuapp.com/public/image/socials_micro_banner.jpg">
        <meta property="twitter:card" content="summary_large_image">
        
        <!---->


        <title><?php echo $title ?></title>
        <link rel="icon" href="././public/image/favicon.ico">
        <link href="./public/css/style.css" rel="stylesheet"/>
        <script async defer src="https://kit.fontawesome.com/158c254b57.js"></script>
        <script defer src="./app.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async defer src="https://www.googletagmanager.com/gtag/js?id=G-JRQKGGFVH4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-JRQKGGFVH4');
        </script>
    </head>

    <?php require('./app/view/template.php'); ?>
</html>
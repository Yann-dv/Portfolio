
<?php
require('./vendor/composer/autoload_files.php');
require ('./app/textContent.php');
?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="développeur web, web developer, création de site web, site web, site internet, web design, webdesigner, site design, design site web, creative web, paris">
        <meta name="description" content="Yann H. vous aide à concevoir et produire différentes solutions digitales pour votre entreprise : création de site web vitrine, site e-commerce, chat/forum d'entreprise, et pleins d'autres solutions pour vous aider à vous développer grâce aux outils informatiques et la puissance du web.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

        <title><?php echo $title ?></title>
        <link rel="icon" href="././public/image/favicon.ico">
        <link href="./public/css/style.css" rel="stylesheet"/>
        <script src="https://kit.fontawesome.com/158c254b57.js"></script>
        <script async src="./app.js" defer></script>
    </head>

    <?php require('./app/view/template.php'); ?>
</html>
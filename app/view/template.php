<?php

$title = 'Développement Web - Yann Hagege ';
$page_title = 'Développement Web';
$description = 'Bonjour, je m\'appelle Yann ;)'

?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link href="./public/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <?php echo '<h1 class="main_title">' . $page_title. '</h1>' ?>
        <?php echo '<div class="description"><p>' . $description . '</p></div>'?>
    </body>
</html>


<?php

$title = 'Website title';
$content = '<h1>Main title</h1>';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="./public/css/style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <?= $content ?>
    </body>
</html>


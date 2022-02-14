<?php session_start(); ?>

<!DOCTYPE html>
<html id="succes_html" lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succès de la demande de contact</title>
    <link href="../../public/css/success.css" rel="stylesheet"/>
</head>
<body class="success_body">
    <h1 class="succes_ttt_title">Votre demande de contact a bien été envoyée</h1>
        <h2 class="success_subtitle">Apperçu de l'envoi : </h2>
        <section class="success_content">
            <?php echo $_SESSION['sendedContent']; ?>
        </section>
        <div class="loaderContainer">
            <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
</body>
</html>

<script>
    window.addEventListener('load', (event) => {
        //Index redirection
        setTimeout(() => {
            window.location="https://portfolio-yh-dev.herokuapp.com";  
        }, 3500);
    });
</script>



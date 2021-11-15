<?php
    if (isset($_POST['projectDescText'])) {
        $position_arobase = strpos($_POST['email'], '@'); // In case of unsupported required
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('yh-dv@protonmail.com', 'Envoi depuis la page de Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a bien été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }
?>
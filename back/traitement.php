<?php declare(strict_types=1); ?>
<?php require '../vendor/autoload.php';?>
<?php session_start(); ?>


<?php require('./captchaConf.php'); ?>

<?php use \SendGrid\Mail\Mail; ?>

<?php 

    function data_secure($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

if(check_token($_POST['g-recaptcha-response'], $reCAPTCHA_secret_key)) {
    $name = data_secure($_POST['userName']);
    $email = data_secure($_POST['email']);
    $message = data_secure($_POST['message']);

    if($_POST['compagny']) {
        $compagny = data_secure($_POST['compagny']);
    }
    else {
        $compagny = "-";
    }
    if($_POST['subject']) {
        $subject = data_secure($_POST['subject']); 
        }
    else{
        $subject = "Contact form";
    }

    if($_POST['tel']) {
        $phone = data_secure($_POST['tel']);
    }
    else {
        $phone = '-';
    }
    if($_POST['userUrl']) {
    $userUrl = data_secure($_POST['userUrl']);
    }

    if(isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['message']) 
    && !empty($_POST['userName']) && !empty($_POST['email']) && !empty($_POST['message'])
    && strlen($name) <= 30
    && filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        try{
            $mailContent = '<html><body>';
            $mailContent .= "<h3 style=\"color:blue;\">Demande de contact de : " . $name ."</h3>";
            $mailContent .= "<p style=\"font-size:16px;\">Société : " . $compagny . "</p>";
            $mailContent .= "<p style=\"font-size:16px;\">Téléphone : " . $phone . "</p>";
            $mailContent .= "<p style=\"font-size:16px;text-decoration:underline;\">Objet : " . $subject . "</p>";
            $mailContent .= "<p style=\"font-size:16px;\">Message : " . $message . "</p>";
            $mailContent .= "<p style=\"font-size:16px;\">Contact : " . $email . "</p>";
            $mailContent .= "<p style=\"font-size:12px;\">Envoyé le : " .date("r (T)") . "</p>";
            $mailContent .= '</body></html>';

            $altContent = "Demande de contact de " . $name;
            $altContent .= " .Société : " . $compagny;
            $altContent .= ". Object :  " . $subject;
            $altContent .=  ". Message : " .  $message;
            $altContent .=  ". Contact : " .  $email;

            //Sendgrid using

            $email = new Mail();

            $email->setFrom("yhagege.osteo@gmail.com", "Example Sender");
            $email->setSubject('Message de ' . $name);
            $email->addTo("yh-dev@protonmail.com", "Moi");
            $email->addContent("text/plain", $altContent);
            $email->addContent("text/html", $mailContent);
            $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
            try {
                $response = $sendgrid->send($email);
                print $response->statusCode() . "\n";
                print_r($response->headers());
                print $response->body() . "\n";
            } catch (Exception $e) {
                echo 'Caught exception: '. $e->getMessage() ."\n";
            }
        }
        catch(error $e){
            echo 'Erreur : '.$e->getMessage();
        }
    }
}
    /*}
    else{
        echo '<script type="text/javascript">alert("Veuillez remplir les champs obligatoires !");</script>';
    }
    
} else {
    echo '<script type="text/javascript">alert("Erreur lors de l\'envoi du formulaire, redirection vers la page d\'accueil!");</script>';
}*/

?>
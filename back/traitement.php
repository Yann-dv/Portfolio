<?php require('./captchaConf.php'); ?>

<?php 

//Load Composer's autoloader
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions

?>
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
            $mailContent .= '<h3 style="color:blue;">Demande de contact de ' . $name .'</h3>';
            $mailContent .= '<p style="font-size:16px;">Société : ' . $compagny . '</p>';
            $mailContent .= '<p style="font-size:16px;text-decoration:underline;">Objet : ' . $subject . '</p>';
            $mailContent .= '<p style="font-size:16px;">Message : ' . $message . '</p>';
            $mailContent .= '<p style="font-size:16px;">Contact : ' . $email . '</p>';
            $mailContent .= '<p style="font-size:12px;">Envoyé le : ' .date("r (T)") . '</p>';
            $mailContent .= '</body></html>';

            //PHPMailer config
            $mail = new PHPMailer(true);
            $to = 'yh-dev@protonmail.com';

            $mail->IsSMTP(); 
            //$mail->SMTPAuth = true;
            $mail->Username = "h.yann_pro@yahoo.fr";
            $mail->Host = 'smtp.free.fr';
            $mail->setFrom($email);
            $mail->addAddress($to);
            // For debug only
            //$mail->SMTPDebug = 3; 
            $mail->CharSet = 'UTF-8';

            //Set the subject line
            $mail->Subject = $subject;

            $mail->isHTML(true);  
            $mail->Body = $mailContent;
            //For non-html mailers
            $mail->AltBody = 'Demande de contact de ' . $name . ' , société : ' . $compagny . '. Object :  '
            . $subject . '. Message : ' . $message . '. Contact : ' . $email . '. Envoyé le : ' .date("r (T)");

            //send the message, check for errors
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                sleep(1);
                header('Location: /#success');
                exit();
            }

        }
        catch(error $e){
            echo 'Erreur : '.$e->getMessage();
        }
    }
    else{
        echo '<script type="text/javascript">alert("Veuillez remplir les champs obligatoires !");</script>';
    }
    
} else {
    echo '<script type="text/javascript">alert("Erreur lors de l\'envoi du formulaire, redirection vers la page d\'accueil!");</script>';
}

?>
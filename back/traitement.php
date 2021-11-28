<?php session_start(); ?>


<?php require('./captchaConf.php'); ?>

<?php 

//Load Composer's autoloader
require '../vendor/autoload.php';

/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';*/

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
            //$mailContent = '<html><body>';
            $mailContent = "<h3 style=\"color:blue;\">Demande de contact de : " . $name ."</h3>";
            $mailContent .= "<p style=\"font-size:16px;\">Société : " . $compagny . "</p>";
            $mailContent .= "<p style=\"font-size:16px;\">Téléphone : " . $phone . "</p>";
            $mailContent .= "<p style=\"font-size:16px;text-decoration:underline;\">Objet : " . $subject . "</p>";
            $mailContent .= "<p style=\"font-size:16px;\">Message : " . $message . "</p>";
            $mailContent .= "<p style=\"font-size:16px;\">Contact : " . $email . "</p>";
            $mailContent .= "<p style=\"font-size:12px;\">Envoyé le : " .date("r (T)") . "</p>";
            //$mailContent .= </body></html>';
            /*
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
                $_SESSION['sendedContent'] = $mailContent;
                sleep(1);
                header('Location: /Portfolio/app/view/success.php');
                exit();
            }
            */
            /// TRUSTIFI FOR HEROKU APP ///
            /*
            $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => $_ENV['TRUSTIFI_URL'] . "/api/i/v1/email",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS =>"{
                        'recipients': [{'email': 'yh-dev@protonmail.com', 'name': }],
                        'lists': [],
                        'contacts': [],
                        'attachments': [],
                        'title': 'test,
                        'html': 'test,
                        'methods': { 
                          'postmark': false,
                          'secureSend': false,
                          'encryptContent': false,
                          'secureReply': false 
                        }
                      }",
                    CURLOPT_HTTPHEADER => array(
                        "x-trustifi-key: " . $_ENV['TRUSTIFI_KEY'],
                        "x-trustifi-secret: " . $_ENV['TRUSTIFI_SECRET'],
                        "content-type: application/json"
                    )
                ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                echo $response;
            }

        }*/
            $title = 'Message de ' . $name;

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://be.trustifi.com/api/i/v1/email',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
            "recipients": [{"email": "yh-dev@protonmail.com"}],
            "lists": [],
            "contacts": [],
            "attachments": [],
            "title":"' . $title . '",
            "html": "<h3> Halallala, done </h3><p> Paragraphe </p>",
            "from":"' . $email . '",
            "methods": { 
                "postmark": false,
                "secureSend": false,
                "encryptContent": false,
                "secureReply": false 
            }
            }',
            CURLOPT_HTTPHEADER => array(
                "x-trustifi-key: " . $_ENV['TRUSTIFI_KEY'],
                "x-trustifi-secret: " . $_ENV['TRUSTIFI_SECRET'],
                "content-type: application/json"
            ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            echo $response;
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
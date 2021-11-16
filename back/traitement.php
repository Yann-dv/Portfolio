<?php require_once('./captchaConf.php'); ?>

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
    if($_POST['subject']) 
        { $subject = data_secure($_POST['subject']); 
        };
    if($_POST['phone']) {
        $phone = data_secure($_POST['phone']);
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
        ini_set("SMTP", "smtp.free.fr");

        $encoding = "utf-8";
        // Mail header

        $to = 'yh-dev@protonmail.com';
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=' . $encoding;
        $headers[] = "Content-Transfer-Encoding: 8bit";
        $headers[] = 'X-Mailer: PHP/' . phpversion();
        $headers[] = 'Date: ".date("r (T)").';
   
        // En-têtes additionnels
        $headers[] = 'To: ' . $to;
        $headers[] = 'From: ' . $email;
   
        $mailContent = '<html><body>';
        $mailContent .= '<h3 style="color:blue;">Demande de contact de ' . $name .'</h3>';
        $mailContent .= '<p style="font-size:16px;">Société : ' . $compagny . '</p>';
        $mailContent .= '<p style="font-size:16px;text-decoration:underline;">Objet : ' . $subject . '</p><br/>';
        $mailContent .= '<p style="font-size:16px;">Message : ' . $message . '</p><br/>';
        $mailContent .= '<p style="font-size:16px;">Contact : ' . $email . '</p>';
        $mailContent .= '<p style="font-size:12px;">Envoyé le : ' .date("r (T)") . '</p>';
        $mailContent .= '</body></html>';
        // Envoi
        mail($to, $subject, $mailContent, implode("\r\n", $headers));

        echo $name;
        if(!empty($compagny)) {echo $compagny;}
        if(!empty($subject)) {echo $subject;}
        echo $email;
        echo $message;
        if(!empty($phone)) {echo $phone;}
        if(!empty($userUrl)) {echo $userUrl;}
        }
        catch(error $e){
            echo 'Erreur : '.$e->getMessage();
        }
    }
    else{
        echo '<script type="text/javascript">alert("Prière de remplir les champs obligatoires !");</script>';
    }
    
} else {
    echo '<script type="text/javascript">alert("Erreur lors de l\'envoi du formulaire, vouls allez être redirigé en page d\'accueil!");</script>';
}

?>
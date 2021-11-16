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
    $compagny = data_secure($_POST['compagny']);
    if($_POST['subject']) 
        { $subject = data_secure($_POST['subject']); 
        };
    $email = data_secure($_POST['email']);
    $phone = data_secure($_POST['phone']);
    $message = data_secure($_POST['message']);
    $userUrl = data_secure($_POST['userUrl']);

    if(isset($_POST['userName']) && isset($_POST['email']) && !empty($_POST['userName']) && !empty($_POST['email'])
    && strlen($name) <= 30
    && !empty($email)
    && filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        try{
        /*$to      = 'h.yann_pro@yahoo.fr';
        $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: yh-dev@protonmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);*/
        ini_set("SMTP", "smtp.free.fr");

        $to = 'yh-dev@protonmail.com';
        $expediteur = $email;
        date("D, j M Y H:i:s"); //date
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
   
        // En-têtes additionnels
        $headers[] = 'To: yh-dev@protonmail.com';
        $headers[] = 'From: ' . $email;
   
        // Envoi
        mail($to, $subject, $message, implode("\r\n", $headers));
        
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
        echo '<script type="text/javascript">alert("Vous devez remplier les champs obligatoires !");</script>';
    }
    
} else {
    echo 'not done';
}

?>
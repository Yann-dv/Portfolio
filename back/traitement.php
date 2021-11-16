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
    $subject = data_secure($_POST['subject']);
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
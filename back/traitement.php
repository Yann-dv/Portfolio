<?php
    /*if (isset($_POST['projectDescText'])) {
        $position_arobase = strpos($_POST['email'], '@'); // In case of unsupported required
        if ($position_arobase === false)
            echo '<p>Votre email doit comporter un arobase.</p>';
        else {
            $retour = mail('yh-dev@protonmail.com', 'Envoi depuis la page de Contact', $_POST['message'], 'From: ' . $_POST['email']);
            if($retour)
                echo '<p>Votre message a bien été envoyé.</p>';
            else
                echo '<p>Erreur.</p>';
        }
    }*/
/*if($_SERVER['REQUEST_METHOD'] == 'POST'){
     
    if(isset($_POST["projectDescText"])) {
        $name = strip_tags($_POST["name"]);
        $compagny = strip_tags($_POST['compagnyName']);
        $email = strip_tags($_POST["email"]);
        $phone = strip_tags($_POST["phone"]);
        $url = strip_tags($_POST["url"]);
        $subject = strip_tags($_POST["typeProjetDevis"]);
        $message = htmlspecialchars($_POST["descDevis"]);
        
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) &&
        isset($_POST['message']) && !empty($name) && !empty($email) && !empty($phone) && !empty($subject) &&
        !empty($message)) {

            if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
                $secretAPIkey = '6LfNJTcdAAAAAChfxF7Ph6y6zatAFDE11rWjLBmX';                
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=".$secretAPIkey."&response=".$_POST["g-recaptcha-response"]');
                $response = json_decode($verifyResponse);
                    if($response->success) {
                        $toMail = "yh-dev@protonmail.com";
                        $header = "Message de: " . $name . "<". $email .">rn";
                        mail($toMail, $header, $subject, $message, $phone, $url);
                        $response = array(
                            "status" => "alert-success",
                            "message" => "Votre demande a bien étée transmise."
                        );
                    }
                    else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Robot verification failed, please try again."
                        );
                    }
            }
                else {
                    $response = array(
                    "status" => "alert-danger",
                    "message" => "Veuillez cocher la cache de reCAPTCHA."
                    );
                }
            }
        }
        else {
            $response = array(
                "status" => "alert-danger",
                "message" => "Tous les champs sont requis."
            );
        }
}else{
    http_response_code(405);
    echo "Méthode non autorisée";
}
?> */


// On vérifie que la méthode POST est utilisée
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On vérifie si le champ "recaptcha-response" contient une valeur
    if(empty($_POST['recaptcha-response'])){
        header('Location: index.php');
    }else{
        // On prépare l'URL
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=6Leq4zcdAAAAAI8wig9618_O5tBoCEaE-IUBXUdR&response={$_POST['recaptcha-response']}";

        // On vérifie si curl est installé
        if(function_exists('curl_version')){
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
        }else{
            // On utilisera file_get_contents
            $response = file_get_contents($url);
        }

        // On vérifie qu'on a une réponse
        if(empty($response) || is_null($response)){
            header('Location: index.php');
        }else{
            $data = json_decode($response);
            if($data->success){
                if(
                    isset($_POST['name']) && !empty($_POST['name']) &&
                    isset($_POST['subject']) && !empty($_POST['subject']) &&
                    isset($_POST['email']) && !empty($_POST['email']) &&
                    isset($_POST['message']) && !empty($_POST['message'])
                ){
                    // On nettoie le contenu
                    $nom = strip_tags($_POST['nom']);
                    $sujet = strip_tags($_POST['sujet']);
                    $email = strip_tags($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);

                    // Ici vous traitez vos données

                    echo "Message de {$nom} envoyé";
                }
            }else{
                header('Location: index.php');
            }
        }
    }
}else{
    http_response_code(405);
    echo 'Méthode non autorisée';
}
?>
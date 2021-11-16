<?php require_once('./captcha_k.php'); ?>

<?php
// Min score returned from reCAPTCHA to allow form submission
$g_recaptcha_allowable_score = 0.5; //Number between 0 and 1. Setting a number closer to 0 will let through more spam, closer to 1 and you may start to block valid submissions.



function check_token($token, $secret_key) {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // url prepare
        $url= "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$token";

        // is curl installed ?
        if(function_exists('curl_version')){
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
        }else{
            // if not :
            $response = file_get_contents($url);
        }

        if(empty($response) || is_null($response)){
            header('Location: .././index.php');
        } else {
                $data = json_decode($response);
                if($data->success){
                    return $data->success;
                }else{
                    header('Location: .././index.php');
                }
            }
    } else {
    http_response_code(405);
    echo 'Méthode non autorisée';
    }
}
?>
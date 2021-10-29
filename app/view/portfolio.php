<?php ob_start(); ?>

<div class="sectionHeader">
        <h3 class="sectionTitle"><?php echo strtoupper('Mes projets') ?></h3>
        <p>Aperçu des projets sur lesquels j'ai travaillé</p>
        <hr class="under_border">
</div>

<?php echo '<script type="text/javascript" src="./app.js"></script>' ?>

<?php
/*
use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://api.github.com/users/Yann-dv/repos',
    // You can set any number of default request options.
    'timeout'  => 3.0,
], ['verify' => false]);

$response = $client->request('GET', '');

// Check if a header exists.
if ($response->hasHeader('Content-Length')) {
  //echo "It exists";
  // Get a header from the response.
  //echo $response->getHeader('Content-Length')['0'];
  // Get all of the response headers.
  //foreach ($response->getHeaders() as $name => $values) {
  //echo $name . ': ' . implode(', ', $values) . "\r\n";
  //}
  $body = $response->getBody();
  // Implicitly cast the body to a string and echo it
  //echo $body;
  // Explicitly cast the body to a string
$stringBody = (string) $body;
// Read 10 bytes from the body
$tenBytes = $body->read(10);
// Read the remaining contents of the body as a string
$remainingBytes = $body->getContents();

echo $stringBody;
}




*/
?>

<?php

// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

//$url = "http://dummy.restapiexample.com/api/v1/employees"; // testing url
$url = "https://api.github.com/users/Yann-dv/repos";
// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);
curl_setopt($curl_handle, CURLOPT_HEADER, 0);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Random user');
// This option will return data as a string instead of direct output
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

// Execute curl & store data in a variable + show into browser if CURLOPT_RETURNTRANSFER = false
$curl_data = curl_exec($curl_handle);


curl_close($curl_handle);

// Decode JSON into PHP array
$projects_list = json_decode($curl_data, true); // associative to false to transform in object response
if (JSON_ERROR_NONE !== json_last_error()) {
  throw new Exception('Invalid response: '.$curl_data);
}
//var_dump($projects_list);
// Print all data if needed
//print_r($response_data);
// die();
//var_dump($response_data);

// All user data exists in 'data' object
//$user_data = $response_data->data;

//var_dump($curl_data);

// Extrac t only first 5 user data (or 5 array elements)
//$user_data = array_slice($user_data, 0, 4);

//if($projects_list != ""){
  //if (isset($projects_list['id'])) {
    //$projects_list = array();
    /*for($i = 1; $i <= 3 ; $i++) {
      echo "Project: ". $projects_list[$i]['full_name'];
      echo "<br />";
    }*/

    /*$len = count($projects_list);
    var_dump($len);
    for($i=1; $i <= $len ;$i++){
      echo 'Project:' . $projects_list[0];
    }*/
   echo '<div class="projectsContainer" id="portfolioList">'; ?>
   <?php
    foreach($projects_list as $key) {
      echo '<div class="project" id="project_'. array_search($key, $projects_list) . '">' 
      . '<p> -Project ' . $key['name'] . '</p>'
      . '</div>';
    }
    '</div>' // portfolio container end

  //}
//}
/*for ($i = 1; $i <= sizeof($response_data); $i++) {
  echo $i;
}*/

?>

<?php $portfolio= ob_get_clean(); ?>
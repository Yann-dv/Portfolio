<?php

// Initiate curl session in a variable (resource)
$curl_handle = curl_init();

$url = "https://api.github.com/users/Yann-dv/repos";
// Set the curl URL option
curl_setopt($curl_handle, CURLOPT_URL, $url);
curl_setopt($curl_handle, CURLOPT_HEADER, 0);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Portfolio user');
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

// For debugging //

//var_dump($projects_list);
// Print all data if needed

//var_dump($curl_data);

//

// Extract only first 5 datas (or 5 array elements) -> use for too much projects/page
//$data = array_slice($data, 0, 4);
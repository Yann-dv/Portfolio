<?php ob_start(); ?>

<div class="sectionHeader">
        <h3 class="sectionTitle"><?php echo strtoupper('Mes projets') ?></h3>
        <p>Aperçu des projets sur lesquels j'ai travaillé</p>
        <hr class="under_border">
</div>

<div class="projectsContainer" id="portfolioList">
</div>

<?php echo '<script type="text/javascript" src="../app.js"></script>' ?>


<?php

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://api.github.com/users/Yann-dv/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

$response = $client->request('GET', '/repos');

// Check if a header exists.
if ($response->hasHeader('Content-Length')) {
  echo "It exists";
}

// Get a header from the response.
echo $response->getHeader('Content-Length')[0];

// Get all of the response headers.
foreach ($response->getHeaders() as $name => $values) {
  echo $name . ': ' . implode(', ', $values) . "\r\n";
}

$body = $response->getBody();
// Implicitly cast the body to a string and echo it
echo $body;
// Explicitly cast the body to a string
$stringBody = (string) $body;
// Read 10 bytes from the body
$tenBytes = $body->read(10);
// Read the remaining contents of the body as a string
$remainingBytes = $body->getContents();


?>

<?php $portfolio= ob_get_clean(); ?>
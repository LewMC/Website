<?php

use Starlight\HTTP\Response;

require_once __DIR__ . '/../starlight/HTTP/Response.php';
$Response = new Response();
$Response->JsonResponse();

/*$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://hangar.papermc.io/api/v1/authenticate?apiKey=d5d39b71-3b63-4144-8470-76bfa0ac6f53.9d9a65b1-bafa-4fd7-907d-2522e6296501',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_HTTPHEADER => array(
        'Cookie: INGRESSCOOKIE=1716537070.501.74725.880498|fdc167dbfc81bf2d806dd1cf68553089'
    ),
));

$response = json_decode(curl_exec($curl));

curl_close($curl);

if (!isset($response->token)) {
    echo '{"error":500}';
    exit;
}

$token = $response->token;*/

if (isset($_GET['versions'])) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://hangar.papermc.io/api/v1/projects/Kryptonite/versions',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
} else {
    echo '{"error":404,"message":"No endpoint selected."}';
}
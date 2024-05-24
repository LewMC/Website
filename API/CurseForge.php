<?php

require_once __DIR__ . '/../settings.php';

if (isset($_GET['overview'])) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.curseforge.com/v1/mods/'.htmlspecialchars($_GET['overview']),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'x-api-key: '.CURSEFORGE_API_KEY
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
} elseif (isset($_GET['description'])) {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.curseforge.com/v1/mods/'.htmlspecialchars($_GET['description']).'/description',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'x-api-key: '.CURSEFORGE_API_KEY
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
}
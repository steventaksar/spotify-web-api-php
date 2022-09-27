<?php
require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'c4ba264bb5164e8f86e5d222f4a6f504',
    '54741742278047aaa9b05d141ae1aae3',
    'https://spotify.silvesterintegel.de'
);

$api = new SpotifyWebAPI\SpotifyWebAPI();

if (isset($_GET['code'])) {
    $session->requestAccessToken($_GET['code']);
    $api->setAccessToken($session->getAccessToken());

    print_r($api->me());
} else {
    $options = [
        'scope' => [
            'user-read-email',
        ],
    ];

    header('Location: ' . $session->getAuthorizeUrl($options));
    die();
}

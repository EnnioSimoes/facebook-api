<?php

$fb = require __DIR__ . '/../bootstrap.php';
$helper = $fb->getRedirectLoginHelper();
$accessToken = $helper->getAccessToken();

$oAuth2Client = $fb->getOAuth2Client();
$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
$_SESSION['fb_access_tokem'] = (string) $accessToken;

$response = $fb->get('/me?fields=id, name, email', $accessToken);

dd($response->getDecodedBody());
<?php

$fb = require __DIR__ . '/bootstrap.php';
$response = $fb->get('/me?fields=id, name, email', $accessToken);

dd($response->getDecodedBody());
<?php

$fb = require __DIR__ . '/bootstrap.php';

$response = $fb->get('me/accounts?fields=picture,cover,name,perms,access_token,manage_pages');
$response = $response->getDecodedBody();

echo '<ul>';
foreach($response['data'] as $page) {
    echo '<li>';
        echo '<img src="' . $page['picture']['data']['url'] . '" />';
        echo $page['name'];
        echo ' - ';
        echo $page['access_token'];
        echo ' - ';
        echo $page['id'];
    echo '</li>';
}
echo '</ul>';
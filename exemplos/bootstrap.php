<?php
function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
require_once __DIR__ . '/vendor/autoload.php';

if (!session_id()) {
    session_start();
}

$accessToken = (isset($_SESSION['fb_access_tokem'])) ? $_SESSION['fb_access_tokem'] : null;


$page_id = '151234878936617';
$app_id = '1584535514956213';
$app_secret = '700fe3c8fe60c6e6e4a9154cf46216d4';

$fbData = [
    'app_id' => $app_id,
    'app_secret' => $app_secret,
    'default_graph_version' => 'v2.10',
];

if ($accessToken) {
    $fbData['default_access_token'] = $accessToken;
}

$fb = new \Facebook\Facebook($fbData);

return $fb;


<?php

require_once __DIR__ . '/vendor/autoload.php';

$page_id = '151234878936617';
$app_id = '1584535514956213';
$app_secret = '700fe3c8fe60c6e6e4a9154cf46216d4';

$fbData = [
    'app_id' => $app_id,
    'app_secret' => $app_secret,
    'default_graph_version' => 'v2.10',
];

$fb = new \Facebook\Facebook($fbData);

$response = $fb->post("/{$pageid}/feed", ['message' => $message], $access_token);
$response = $response->getDecodedBody();

dd($response);
// PAGEID 151234878936617
// TOKEN PAGE EAAWhIGyAwbUBAPtpoSLO0SqF0tXZCUrVzfzBl9oEOd8ZA3dXPuiQB4G8xBR5oOU3lpMghY5sBdSjNN2mojCRBlsAvicsaZCbpKlOg1LeIZCZC2ZCPtE1HWPlNjsorvaOlV4B07WU3ntZAsFX94JYsmFhCtZCPX72rQH9yqEGhNIyMwZDZD
// POST PAGE localhost:8080/pages.post.php?pageid=151234878936617&access_token=EAAWhIGyAwbUBAPtpoSLO0SqF0tXZCUrVzfzBl9oEOd8ZA3dXPuiQB4G8xBR5oOU3lpMghY5sBdSjNN2mojCRBlsAvicsaZCbpKlOg1LeIZCZC2ZCPtE1HWPlNjsorvaOlV4B07WU3ntZAsFX94JYsmFhCtZCPX72rQH9yqEGhNIyMwZDZD&message="Teste Postagem!"
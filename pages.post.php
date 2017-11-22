<?php

$fb = require __DIR__ . '/bootstrap.php';

$pageid = filter_input(INPUT_GET, 'pageid');
$message = filter_input(INPUT_GET, 'message');
$access_token = filter_input(INPUT_GET, 'access_token');

if (!$pageid || !$message || !$access_token) {
    throw new Exception('Por favor, informe todo os campos.');
    die;
}

$response = $fb->post("/{$pageid}/feed", ['message' => $message], $access_token);
$response = $response->getDecodedBody();

dd($response);
// PAGEID 151234878936617
// TOKEN PAGE EAAWhIGyAwbUBAPtpoSLO0SqF0tXZCUrVzfzBl9oEOd8ZA3dXPuiQB4G8xBR5oOU3lpMghY5sBdSjNN2mojCRBlsAvicsaZCbpKlOg1LeIZCZC2ZCPtE1HWPlNjsorvaOlV4B07WU3ntZAsFX94JYsmFhCtZCPX72rQH9yqEGhNIyMwZDZD
// POST PAGE localhost:8080/pages.post.php?pageid=151234878936617&access_token=EAAWhIGyAwbUBAPtpoSLO0SqF0tXZCUrVzfzBl9oEOd8ZA3dXPuiQB4G8xBR5oOU3lpMghY5sBdSjNN2mojCRBlsAvicsaZCbpKlOg1LeIZCZC2ZCPtE1HWPlNjsorvaOlV4B07WU3ntZAsFX94JYsmFhCtZCPX72rQH9yqEGhNIyMwZDZD&message="Teste Postagem!"
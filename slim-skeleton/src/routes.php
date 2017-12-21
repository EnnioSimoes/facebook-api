<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/login', function (Request $request, Response $response, array $args) {
    $name = '/login';
    return $this->renderer->render($response, 'index.phtml', compact('name'));
});

$app->get('/me', function (Request $request, Response $response, array $args) {
    $name = '/me';
    return $this->renderer->render($response, 'index.phtml', compact('name'));
});

$app->get('/', function (Request $request, Response $response, array $args) {
    $name = '/';
    return $this->renderer->render($response, 'index.phtml', compact('name'));
});

$app->get('/posts', function (Request $request, Response $response, array $args) {
    $name = '/posts';
    return $this->renderer->render($response, 'index.phtml', compact('name'));
});

$app->post('/posts', function (Request $request, Response $response, array $args) {

    return $this->renderer->render($response, 'index.phtml', compact());
});

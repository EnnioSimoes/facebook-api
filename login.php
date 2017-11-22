<?php

$fb = require __DIR__ . '/bootstrap.php';
$helper = $fb->getRedirectLoginHelper();
$permission = ['email'];
$loginUrl = $helper->getLoginUrl('http://localhost:8080/me', $permission);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Login com Facebook</a>';
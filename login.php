<?php

$fb = require __DIR__ . '/bootstrap.php';
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_birthday', 'pages_show_list, publish_pages'];
$loginUrl = $helper->getLoginUrl('http://localhost:8080/me', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Login com Facebook</a>';
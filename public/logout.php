<?php

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../src/AuthService.php';

$auth = new AuthService();
$auth->logout();

header('Location: login.php');
exit;

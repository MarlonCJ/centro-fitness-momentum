🧱 PASO 8 — Crear public/process_login.php
📄 public/process_login.php
<?php

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../src/AuthService.php';

$auth = new AuthService();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if ($auth->intentarLogin($email, $password)) {
    header('Location: dashboard.php');
    exit;
}

header('Location: login.php');
exit;

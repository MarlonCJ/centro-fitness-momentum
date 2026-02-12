<?php

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../src/AuthService.php';

$auth = new AuthService();

if ($auth->estaAutenticado()) {
    header('Location: dashboard.php');
    exit;
}

ob_start();
?>

<h2>Área de Entrenadores</h2>

<form method="POST" action="process_login.php">
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Ingresar</button>
</form>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/../templates/layout.php';

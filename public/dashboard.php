<?php

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../src/AuthService.php';
require_once __DIR__ . '/../src/MiembroRepository.php';

$auth = new AuthService();

if (!$auth->estaAutenticado()) {
    header('Location: login.php');
    exit;
}

$repo = new MiembroRepository();
$miembros = $repo->obtenerTodos();

ob_start();
?>

<h2>Panel de Entrenadores</h2>

<a href="logout.php">Cerrar sesión</a>

<h3>Miembros registrados</h3>

<?php foreach ($miembros as $miembro): ?>
    <p>
        <?= $miembro->getNombre() ?> -
        <?= $miembro->getPlan() ?> -
        <?= $miembro->getEstado() ?>
    </p>
<?php endforeach; ?>

<?php
$content = ob_get_clean();
require_once __DIR__ . '/../templates/layout.php';

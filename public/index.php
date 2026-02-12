<?php

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../src/MiembroRepository.php';

$repo = new MiembroRepository();
$miembros = $repo->obtenerTodos();

ob_start();
?>

<h2>Listado de Miembros</h2>

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

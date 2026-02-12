<?php

require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../src/Miembro.php';

$miembro = new Miembro('Juan Pérez', 30, 'Mensual');

ob_start();
?>

<h2>Prueba de entidad Miembro</h2>

<p>Nombre: <?= $miembro->getNombre() ?></p>
<p>Edad: <?= $miembro->getEdad() ?></p>
<p>Plan: <?= $miembro->getPlan() ?></p>
<p>Estado: <?= $miembro->getEstado() ?></p>

<?php
$content = ob_get_clean();

require_once __DIR__ . '/../templates/layout.php';

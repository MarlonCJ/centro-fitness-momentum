<?php

require_once __DIR__ . '/../bootstrap.php';

ob_start();
?>

<h2>Bienvenido al Centro Fitness Momentum</h2>
<p>Tu salud es nuestra prioridad.</p>

<?php
$content = ob_get_clean();

require_once __DIR__ . '/../templates/layout.php';

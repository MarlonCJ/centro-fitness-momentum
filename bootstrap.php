<?php

declare(strict_types=1);

// =====================================
// Bootstrap del sistema
// =====================================

// Cargar configuración
require_once __DIR__ . '/config/app.php';

// -------------------------------------
// Configuración de entorno
// -------------------------------------
if (APP_ENV === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(0);
    ini_set('display_errors', '0');
}

// -------------------------------------
// Iniciar sesión
// -------------------------------------
session_start();

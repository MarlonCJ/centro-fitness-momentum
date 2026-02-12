<?php

declare(strict_types=1);

require_once __DIR__ . '/Miembro.php';

class MiembroRepository
{
    private array $miembros = [];

    public function __construct()
    {
        // Datos simulados (más adelante vendrán de BD)
        $this->miembros = [
            new Miembro('Juan Pérez', 30, 'Mensual'),
            new Miembro('Ana Gómez', 25, 'Trimestral'),
            new Miembro('Carlos Ruiz', 40, 'Anual', 'Suspendido'),
        ];
    }

    public function obtenerTodos(): array
    {
        return $this->miembros;
    }

    public function agregar(Miembro $miembro): void
    {
        $this->miembros[] = $miembro;
    }
}

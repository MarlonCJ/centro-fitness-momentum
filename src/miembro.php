<?php

declare(strict_types=1);

class Miembro
{
    private string $nombre;
    private int $edad;
    private string $plan;
    private string $estado;

    public function __construct(
        string $nombre,
        int $edad,
        string $plan,
        string $estado = 'Activo'
    ) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->plan = $plan;
        $this->estado = $estado;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function getPlan(): string
    {
        return $this->plan;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function estaActivo(): bool
    {
        return $this->estado === 'Activo';
    }
}

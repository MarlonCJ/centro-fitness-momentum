<?php

declare(strict_types=1);

class AuthService
{
    private array $entrenadores;

    public function __construct()
    {
        // Simulación de entrenadores (luego será BD)
        $this->entrenadores = [
            [
                'email' => 'trainer@momentum.com',
                'password' => '1234'
            ]
        ];
    }

    public function intentarLogin(string $email, string $password): bool
    {
        foreach ($this->entrenadores as $entrenador) {
            if (
                $entrenador['email'] === $email &&
                $entrenador['password'] === $password
            ) {
                $_SESSION['auth'] = true;
                $_SESSION['user'] = $email;

                return true;
            }
        }

        return false;
    }

    public function estaAutenticado(): bool
    {
        return isset($_SESSION['auth']) && $_SESSION['auth'] === true;
    }

    public function logout(): void
    {
        session_destroy();
    }
}

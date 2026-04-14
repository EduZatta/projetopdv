<?php

class Usuario {
    // Simulando um banco de dados
    private $usuarioDB = "admin";
    private $senhaDB = "123";

    public function validar($nome, $senha) {
        if ($nome === $this->usuarioDB && $senha === $this->senhaDB) {
            return true;
        }
        return false;
    }
}
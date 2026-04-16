<?php
// src/Controllers/autenticacao.php
session_start();

// importa o Model do Usuário
require_once "../Models/Usuario.php";

// captura os dados do formulário
$nomeDigitado  = $_POST['nome'] ?? '';
$senhaDigitada = $_POST['senha'] ?? '';

// Instancia o Model e faz a validação
$usuarioModel = new Usuario();
$loginSucesso = $usuarioModel->validar($nomeDigitado, $senhaDigitada);

if ($loginSucesso) {
    // Se estiver tudo certo:
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $nomeDigitado; 
    
    // Redireciona para o Dashboard
    header("Location: ../../views/abertura_caixa.php");
    exit();
} else {
    // Caso falhe:
    header("Location: ../../views/login_view.php?erro=dados_invalidos");
    exit();
}
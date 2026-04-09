<?php
// src/Controllers/autenticacao.php
session_start();

// Importa o Model do Usuário
require_once "../Models/Usuario.php";

// Captura os dados do formulário
$nomeDigitado  = $_POST['nome'] ?? '';
$senhaDigitada = $_POST['senha'] ?? '';

// Instancia o Model e faz a validação
$usuarioModel = new Usuario();
$loginSucesso = $usuarioModel->validar($nomeDigitado, $senhaDigitada);

if ($loginSucesso) {
    // Se estiver tudo OK:
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $nomeDigitado; // Agora a variável existe para o Dashboard!
    
    // Redireciona para o Dashboard
    header("Location: ../../views/abertura_caixa.php");
    exit();
} else {
    // Se falhar:
    header("Location: ../../views/login_view.php?erro=dados_invalidos");
    exit();
}
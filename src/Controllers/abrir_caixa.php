<?php
session_start();
require_once "trava.php"; // garante que usuário está logado

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // pega o valor digitado pelo usuário
    $valor = floatval($_POST['valor_inicial'] ?? 0);

    // marca o caixa como aberto
    $_SESSION['caixa_aberto'] = true;
    $_SESSION['valor_suprimento'] = $valor;

    // redireciona direto para dashboard
    header("Location: ../../views/dashboard.php");
    exit();
}

// se acessar sem POST, apenas mostra a tela de abertura
require_once "../../views/abertura_caixa.php";
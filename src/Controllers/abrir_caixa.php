<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valor = $_POST['valor_inicial'];

    // Guardamos o valor na sessão para usar depois
    $_SESSION['caixa_aberto'] = true;
    $_SESSION['valor_suprimento'] = $valor;

    // Depois de salvar, manda para o Dashboard
    header("Location: ../../views/dashboard.php");
    exit();
}
<?php
session_start();
require_once "trava.php"; 

// Se o caixa não estiver aberto, barra e manda abrir
if (!isset($_SESSION['caixa_aberto']) || $_SESSION['caixa_aberto'] !== true) {
    header("Location: abrir_caixa.php");
    exit();
}

// Dados para a View exibir
$nomeUsuario = $_SESSION['usuario']['nome'] ?? 'Operador';
$saldoEmCaixa = $_SESSION['saldo_atual'];

// Carrega a View da Dashboard
require_once "../../views/dashboard.php";
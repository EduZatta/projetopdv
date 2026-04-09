<?php
// Verifica se a sessão já não foi iniciada por outro arquivo
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// O resto da sua validação...
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: login_view.php");
    exit();
}
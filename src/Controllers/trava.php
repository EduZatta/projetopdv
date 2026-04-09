<?php
if (!isset($_SESSION['usuario'])) {
    // Se não estiver logado, volta para login
    header("Location: ../../views/login_view.php");
    exit();
}
<?php
session_start();

// Garante que o usuário está logado
require_once "trava.php"; // middleware que impede acesso sem login

// Chama a view
require_once "../../views/venda.php";
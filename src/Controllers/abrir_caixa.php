<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $valor = floatval($_POST['valor_inicial'] ?? 0);

    // VALIDAÇÕES
    if ($valor <= 0) {

        echo "<h3>⚠️ Informe um valor válido.</h3>";
        echo "<a href='../../views/abertura_caixa.php'>Voltar</a>";
        exit();

    } elseif ($valor < 50) {

        echo "<h3>⚠️ Valor mínimo é R$ 50,00.</h3>";
        echo "<a href='../../views/abertura_caixa.php'>Voltar</a>";
        exit();

    }

    // SE PASSAR NA VALIDAÇÃO
    $_SESSION['caixa_aberto'] = true;
    $_SESSION['valor_suprimento'] = $valor;

    header("Location: ../../views/dashboard.php");
    exit();
}
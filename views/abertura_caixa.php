<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: login_view.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/abertura_caixa.css">
    <title>Abertura de caixa</title>
</head>

<body>
    <form action="../src/Controllers/abrir_caixa.php" method="POST">
        <h3>Abertura de caixa</h3>
        <label for="text">Digite o valor</label>
        <input type="number" step="0.01" name="valor_inicial" required placeholder="R$ 0,00">
        <button type="submit">Abrir Caixa</button>

    </form>

</body>

</html>
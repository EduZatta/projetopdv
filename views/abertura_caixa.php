<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/abertura_caixa.css">
<title>Abertura de Caixa</title>
</head>
<body>

<form action="../src/controllers/abrir_caixa.php" method="POST">
    <h3>Abertura de Caixa</h3>

    <label>Digite o valor</label>
    <input type="number" step="0.01" name="valor_inicial" required placeholder="R$ 0,00">
    <button type="submit">Abrir Caixa</button>
</form>

</body>
</html>
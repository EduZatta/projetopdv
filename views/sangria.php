<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PDV - Realizar Sangria</title>
    <link rel="stylesheet" href="css/estilo.css"> </head>
<body>

    <header>
        <h2>Fluxo de Caixa: Sangria</h2>
        <a href="venda.php" class="btn-voltar">Voltar para Vendas</a>
    </header>

    <main class="container">
        <div class="card-sangria">
            <form action="index.php?controller=Caixa&action=executarSangria" method="POST">
                
                <div class="form-group">
                    <label for="valor">Valor da Retirada (R$):</label>
                    <input type="number" step="0.01" name="valor" id="valor" placeholder="0,00" required autofocus>
                </div>

                <div class="form-group">
                    <label for="observacao">Motivo / Observação:</label>
                    <textarea name="observacao" id="observacao" rows="4" placeholder="Ex: Sangria de segurança ou pagamento de fornecedor" required></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-confirmar">Confirmar Sangria</button>
                    <button type="reset" class="btn-cancelar">Limpar</button>
                </div>

            </form>
        </div>
    </main>

</body>
</html>
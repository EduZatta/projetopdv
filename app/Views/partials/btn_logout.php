<?php
/**
 * Partial: botão de sair do sistema.
 * Se o caixa estiver aberto, exibe aviso e bloqueia o logout.
 */
$caixaAbertoLogout = isset($_SESSION['caixa_aberto']) && $_SESSION['caixa_aberto'] === true;
?>

<?php if ($caixaAbertoLogout): ?>
    <div class="logout-bloqueado">
        <div class="logout-aviso">
            🔒 Feche o caixa para sair
        </div>
        <a href="<?= BASE_URL ?>/?page=fechamento_caixa" class="btn-fechar-caixa-logout">
            Fechar Caixa
        </a>
    </div>
<?php else: ?>
    <a href="<?= BASE_URL ?>/?page=logout" class="btn-logout">Sair do Sistema</a>
<?php endif; ?>

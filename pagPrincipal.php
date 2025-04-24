<?php require_once ('verificarAcesso.php');?>
<?php require_once ('cabecalho.php');?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
        <form action="logoutAction.php" class="w3-container" method='post'>
            <button name="btnLogout" class="w3-button w3-red w3-cell w3-round-large"> 
                <i class="w3-xxlarge fa fa-times-rectangle"> </i>Logout</button>
        </form>
</div>

<?php require_once ('rodape.php'); ?>
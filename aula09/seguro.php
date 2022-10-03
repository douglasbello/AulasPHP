<?php
session_start();
if ( isset($_SESSION['ativa']) ) {
    echo "bem vindo " . $_SESSION['nome'] . ".";
} else {
    echo "você não tem acesso a essa página.";
}
?>
<p>
    <a href="deslogar.php">deslogar</a>
</p>
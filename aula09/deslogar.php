<?php
//inicia a sessão
session_start();
//limpar caches
session_unset();
//encerrar a sessão
session_destroy();
header("location:logar.php")
?>
<a href="admin.php">
    Tente voltar na página para ver que não funciona!
</a>
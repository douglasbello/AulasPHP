<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularios html</title>
</head>
<body>
    <form action="" method="post"> <!-- method="get" mostra as informações no url, method="post", é mais usado, não mostra na url -->
        <div>
            <input required type="text" name="nome" placeholder="seu nome">
        </div>
        <div>
            <input required type="email" name="email" placeholder="seu email">
        </div>
        <div>
            <input required type="number" name="idade" placeholder="seu idade">
        </div>
        <input type="submit" name="enviar">
    </form>
<?php 

// print_r($_POST);
if ( isset($_POST['enviar']) ) {
    if ( !empty($_POST['nome'])) {
        echo $_POST['nome'] . "<br>";
        echo $_POST['email'] . "<br>";
        echo $_POST['idade'] . "<br>";
    } else {
        echo "Preencha o campo nome.";
    }
    if ($_POST['idade'] >= 18) {
        echo $_POST['idade'] . "<br>";
    } else {
        echo "Você precisa ser maior de idade.";
    }
}


?>
</body>
</html>
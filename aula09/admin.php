<?php session_start(); ?>

]<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>área administrativa</title>
</head>
<body>
	<?php if ( isset($_SESSION['ativa']) ) { ?>
		<h1>área adminstrativa</h1>
		<p>bem vindo a área administrativa do site <?php echo $_SESSION['usuario']; ?>
		</p>
		<a href="deslogar.php">Deslogar</a>

	<?php } else {?>]
		<p>Sem acesso a página</p>
		<a href="logar.php">Voltar</a>
	<?php }  ?>
</body>
</html>
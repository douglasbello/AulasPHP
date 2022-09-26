<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/index.css" />
    <title>Layout em PHP</title>
</head>
<body>
	<?php include_once 'layout/topo.php'; ?>
	<?php include_once 'layout/menu.php'; ?>
	<?php
		$x = 10;
		$soma = $x + 15; 
	?>
	<main>
		<h1>bem vindo</h1>
		<p>página inicial</p>
		<h2><?php echo $soma;?></h2>
	</main>
	<?php include_once 'layout/rodape.php'; ?>
</body>
</html>
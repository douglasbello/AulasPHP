<!DOCTYPE html>
<html>
<head>
    <title>empresa</title>
</head>
<body>
    <?php include_once 'layout/topo.php'; ?>
	<?php include_once 'layout/menu.php'; ?>
	<?php
		$x = 10;
		$soma = $x + 15; 
	?>
	<main>
		<h1>empresa</h1>
		<p>página da empresa</p>
		<h2><?php echo $soma;?></h2>
	</main>
	<?php include_once 'layout/rodape.php'; ?>
</body>
</html>
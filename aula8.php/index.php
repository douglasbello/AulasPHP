<!DOCTYPE html>
<html>
<head>
	<title>Layout Sala 7</title>
</head>
<body>
    <?php include_once 'layout/topo.php'; ?>
    <?php include_once 'layout/menu.php'; ?>
    <section>Banner</section>
    <main>
        <h1>Bem vindo!</h1>
        <?php
            $x = 10;
            $soma = 10 + $x;
        ?>
        <p>Paragráfo de teste</p>
        <h2><?php echo $soma; ?></h2>
    </main>
    <?php include 'layout/rodape.php'; ?>
</body>
</html>	
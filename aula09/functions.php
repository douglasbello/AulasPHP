<?php
$user = 'a';
$pass = '1';

$senhas = ["teste","456","teste123"];

if ($_POST['user'] == $user) { // verifica se usuário está correto
	if (in_array($_POST['password'],$senhas)) { //verifica se a senha passada no formulário existem no array $senhas
		session_start();
		$_SESSION['ativa'] = TRUE;
		$_SESSION['usuario'] = $_POST['user'];
		header("location:admin.php"); // se o login for aceito redireciona para a página admin.php
	} else {
		echo "Usuário ou senha incorretos.";
	}
} else {
	echo "Usuário ou senha errados. Voltar a página de login." . '<a href="logar.php">Voltar para a página de login.</a>';
}
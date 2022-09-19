<?php

function welcome() {
	echo "welcome";
}
welcome();
echo"<hr>";

function add_some_extra(&$string)
{
    $string .= ' e alguma coisa mais.';
}
$str = 'Isto é uma string,';
add_some_extra($str);
echo $str;    // imprime 'Isto é uma string, e alguma coisa mais.'
echo "<hr>";

function boas_vindas($nome) {
	echo "bem vindo " . $nome . ".";
}
$name = "joão";
boas_vindas($name); 		// pode colocar o valor direto na função, exemplo: boas_vindas("douglas");
echo "<hr>";

function media($trimestre1,$trimestre2,$trimestre3) {
	$calculo = ($trimestre1 + $trimestre2 + $trimestre3) / 3;
	$calculo = round($calculo, 2);			// arredonda para 2 casas decimais depois da vírgula
	return $calculo;
}

$nota1 = 10;
$nota2 = 5;
$nota3 = 7;
$notaMedia = media($nota1,$nota2,$nota3);
echo $notaMedia;
echo "<hr>";
function aprovado_ou_reprovado($notaAluno) {
	if ($notaAluno >= 7) {
		$retorno = "aprovado";
	} else {
		$retorno = "reprovado";
	}
	return $retorno;
}

echo aprovado_ou_reprovado($notaMedia);
echo "<hr>";
function lista($lista) {
	$resultado = "<ul>";
	foreach ($lista as $value) {
		$resultado .= "<li>" . $value . "</li>";

	}
	$resultado .= "</ul>";
	return $resultado;
}
$lista = ["Pão","Café","Queijo"];
echo lista($lista);
?>
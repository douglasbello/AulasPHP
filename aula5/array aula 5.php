<?php


$dragonBall = ["Goku", "Vegeta", "Trunks", "Piccolo", "Gohan"];

in_array("Vegeta", $dragonBall);
$busca = "Trunks";
if (in_array($busca, $dragonBall)) {
	echo "Encontrei o valor:" .$busca;
} else {
	echo "Valor não encontrado";
}
echo "<hr>";

$juntar = implode("-", $dragonBall);
echo $juntar;

$frase = "Hoje no almoço eu comi:"

?>
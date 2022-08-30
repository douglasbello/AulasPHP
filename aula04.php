<?php
if (5 > 10) {
    echo "Sim, verdadeiro!";
}else {
    echo "Falso";
}
echo "<hr>";

$aluno = "Pedro";

if ($aluno == "Pedro") {
    echo "Nome correto.";
}else {
    echo "Nome incorreto.";
}

echo "<hr>";

$nota = 10;
$media = 7;

if ($nota >= $media) {
    echo "Aprovado!";
} elseif ($nota <= 5) {
    echo "Reprovado!";
} else {
    echo "Recuperação!";
}
echo "<hr>";

$aluno = "Pedro";
$curso = "ADS";
// & - AND
// || - OR
if ($aluno == "Pedro" OR $aluno == "Thiago" AND $curso == "ADS") {
    echo "Passar na secretária!";
}else {
    echo "Aluno incorreto!";
}
echo "<hr>";
$posicao = 1;
// Igualdade(==)
// Valor e tipo(===)


if ($posicao == 1) {
    echo "Medalha de ouro!";
} elseif ($posicao == 2) {
    echo "Medalha de prata!";
} elseif ($posicao == 3) {
    echo "Medalha de bronze!";
} else {
    echo "Sem medalha!";
}
echo "<hr>";
$lado1 = 10;
$lado2 = 5;
$lado3 = 3;

if ($lado1 == $lado2 AND $lado1 == $lado3) {
    echo "O triângulo é um equilátero.";
} elseif ($lado1 != $lado2 AND $lado1 != $lado3 AND $lado2 != $lado3) {
    echo "O triângulo é um escaleno.";
} else {
    echo "O triângulo é um isósceles";
}
echo "<hr>";

// Switch case
$nome = "Eduardo";
switch ($nome) {
    case "Renato":
        echo "Bem vindo " . $nome . "!";
        break;
    case "Rafael":
        echo "Bem vindo " . $nome . "!";
        break;
    case "Renata":
        echo "Bem vindo " . $nome . "!";
        break;
    case "Eduardo":
        echo "Bem vindo " . $nome . "!";
        break;
    default:
        echo "Aluno inválido!"; // ------>>>>> ELSE
        break;
}
echo "<hr>";

$nota = 7;
$resultado = $nota > 7 ? "Aprovado" : "Reprovado";
echo $resultado;
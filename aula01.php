<?php

$aluno = "Leonardo";
$idade = 22;
$altura = 1.78;
$matriculado = TRUE;
$anoMatricula = 2022;

// echo 'Bem vindo $aluno' ---->>>> Variável dentro da String não funciona com aspas simples.
// echo "Bem vindo $aluno" ---->>>> Já variável dentro de aspas duplas funciona.
echo "Bem vindo <br>" . $aluno; // ------>>>> Quebra de linha;
echo " ";
echo $aluno;

$x = 10;
$y = 5;

$result = $x + $y;
echo "<br>" . $result;
echo "<p>" . $result . "</p>";

// Constantes ------>>>> Padrão é escrever o nome das constantes sempre em maiúsculo.
// define("NOME",VALOR);
define("ALUNO" , "Thiago");
echo ALUNO;
echo "<br>";

// Array simples.
echo "<hr>";
$cardapio = array("arroz" , "feijão" , "batata" , 10, "bife", 5.2); 

print_r($cardapio);
// var_dump($cardapio);

echo $cardapio[0] . "<br>"; // ---->>>> Acessando um item do Array usando o índice.
echo $cardapio[4] . "<br>";

// Novo jeito de setar um Array.
$cafeManha = ["Torrada","Queijo","Salame","Café preto sem açúcar."];
echo "<hr>";
print_r($cafeManha);

echo $cafeManha[1];

// Array Associatvo
$turmaADS = array(
    "aluno" => "Leonardo",
    "idade" => 22,
    "cidade" => "Porto Alegre",
    "masculino" // ---->>>> Índice não nomeado é definido como índice 0,1,2,3 etc...
);
echo "<hr>";
print_r($turmaADS);

echo "<br>";
echo $turmaADS["cidade"];
?>
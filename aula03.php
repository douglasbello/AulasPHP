<?php

// Array Multidimensional

$turmaAds = array(
    "nome" => ["Thiago","Lucas","Fernando"],
    "idade" => [25,18,22],
    "cidade" => ["Porto Alegre","Canoas","Alvorada"]
);
print_r($turmaAds);
/* echo $turmaAds["nome"][1];
echo "<br>";
echo $turmaAds["cidade"][1]; */

// Loopings

for ( $i=1; $i < 5; $i++) {
    echo "$i<br>";
}
for ($i=0; $i <= 10; $i += 2) {
    echo "Números pares: $i <br>";
}
for ($i=1; $i <= 10; $i +=2) {
    echo "Números impares: $i <br>";
}

$cafe = array(
    "bacon","torrada","pão de queijo","café","cuca de uva","bolo de cenoura"
);

$contagem = count($cafe);

for ($i=0; $i < $contagem ; $i++) {
    echo $cafe[$i]. " - ";
}
// while
$i = 0;
while ($i <= 10) {
    echo $i . " - ";
    $i++;
}
$i = 0;
while ($i < $contagem) {
    echo $cafe[$i] . "<br>";
    $i++;
}

// Foreach 
foreach ($cafe as $item) {
    echo $item . " - ";
}

$dadosPessoais = [
    array(
        "nome" => "Arthur",
        "curso" => "ADS",
        "nota" => "A"
    ),
    array(
        "nome" => "Leonardo",
        "curso" => "CC",
        "nota" => "B"
    ),
    array(
        "nome" => "Thiago",
        "curso" => "SI",
        "nota" => "C"
    )
];
echo "<hr>";

// echo $dadosPessoais[2]["nome"];

foreach ($dadosPessoais as $item) {
    echo "O aluno " . $item["nome"] . " é do curso de " . $item["curso"] . "<br>";
}
?>
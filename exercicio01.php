<?php

for ($i = 1; $i <= 6; $i++) {
    echo "<h$i>Título $i </h$i>";
}
$cadastroAlunos = [
    array(
        "nome" => "Lucas",
        "nome_curso" => "ADS",
        "nota" => 8
    ),
    array(
      "nome" => "João",
      "nome_curso" => "Design",
      "nota" => 10
    ),
    array(
      "nome" => "Gabriel",
      "nome_curso" => "Advocacia",
      "nota" => 3
    ),
    array(
        "nome" => "Rafaela",
        "nome_curso" => "Veterinária",
        "nota" => 7
    ),
    array(
        "nome" => "Marcos",
        "nome_curso" => "Ciber-segurança",
        "nota" => 9
    )
];
foreach ($cadastroAlunos as $aluno) {
    echo "O aluno " . $aluno["nome"] . " do curso de " . $aluno["nome_curso"] . " tirou nota " . $aluno["nota"] . ".<br>";
}
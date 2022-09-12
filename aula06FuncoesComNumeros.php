<?php
$precos = array(50,40,32,10);
echo $maior = max($precos); // max() maior número de um array
echo "<br>";
echo $menor = min($precos); // min() menor número de um array
echo "<hr>";

// ROUND
$numero = 4.56;
echo round($numero) . "<br>"; // arredonda float para número inteiro.
$numero2 = 3.12456;
$testeRound = round($numero2,2); // arredonda para quantas casas decimais você definir, nesse caso eu defini para 2 casas decimais
echo str_replace(".",",", $testeRound) . "<hr>"; // substituí o "." das casas decimais por vírgula

$aleatorio = rand(); // gera número aleatório  -- parametros: rand(min,max)
echo $aleatorio . "<hr>";


// DATAS
date_default_timezone_set('America/Sao_Paulo'); // seta o fuso horário para o de São Paulo
$hoje = date("d/m/Y"); // mostra a data do dia atual. d = day, m = month, Y = year, é possível mudar a ordem.
echo $hoje . "<br>";
$dia = date("l"); // mostra o dia atual, segunda, terça etc...
echo $dia . "<br>";
$horario = date("h:i:s"); // h = hora, i = minutos, s = segundos.
echo $horario . "<br>";

<?php
$usuario = "Leonardo";
echo "--" . $usuario . "--";
// funcao trim retira espaços antes e depois de uma String, no meio não retira os espaços
$limpar = trim($usuario);
echo "<br>";
echo $limpar;
echo "<hr>";

$senha = "teste";
// STR_PAD_RIGHT - STR_PAD_LEFT - STR_PAD_BOTH -- right preenche à direita
// left preenche à esquerda, both preenche dos dois lados, se for número impar, ele preenche a direita com mais caracteres
echo str_pad($senha,11, "-",STR_PAD_BOTH) . "<hr>"; // aumenta a String para o valor desejado(length)

// repete a string ou variável quantas vezes você colocar
echo str_repeat("-=" ,4) . "<hr>";

// str_word_count conta quantas palavras tem em uma string
$teste_count = "hoje vai chover";
echo str_word_count($senha);
// colocando dentro de um print_r printa a string como um array, pode também colocar de quanto em quanto seu índice vai aumentar
print_r(str_word_count($senha,1)); // índice de 1 em 1
print_r(str_word_count($senha, 2)); // índice de 2 em 2
echo "<hr>";

// str_replace substituí uma palavra por outra dentro de uma string
// síntaxe: str_replace(palavra_a_ser_substituída,palavra_que_vai_substituir,$nome_da_variável)
$grupo = "thiago douglas bello";
echo str_replace("thiago","jão",$grupo) . "<hr>";

// https://www.php.net/manual/en/function.substr.php
$rest = "abcdef";
echo substr($rest, 0) . "<br>"; // bcdef
echo substr($rest,0,-4) . "<br>"; // ab
echo substr($rest, -3,-1) . "<br>"; // de
echo substr($rest,0,1); // a
echo substr($rest,0,null) . "<hr>"; // retorna string vazia

// https://www.php.net/manual/en/function.substr-replace.php
// faz a substituícão como você definir de uma string, exemplos abaixo
$tteste = "ABCDEFGHIJKL";
echo substr_replace($tteste,"bob",0,0) . "<br>"; // bobABCDEFGHIJKL
echo substr_replace($tteste,"jao",0,1) . "<br>"; // jaoBCDEFGHIJKL --- retira o "A", se colocar 2 retira o "B" etc...
echo substr_replace($tteste,"xis",-3) . "<br>"; // ABCDEFGHIxis -- retira os três últimos caracteres
// ABCDEFGHIJdgL -- nesse caso retira só 1 caracterer, e não retira o último por que o length é -1
echo substr_replace($tteste,"dg",-2,-1) . "<hr>";

// conta quantos caracteres tem em uma string, exemplos abaixo
$text = "This is a test";
echo substr_count($text,"t") . "<br>"; // conta quantos "t" tem na String.
echo substr_count($text, "is",3)."<br>";// começa a contar do terceiro caracter, então o texto é "s is a test", só tem um "is"
// reduz o texto a "s i", por que começa a contar em 3 e termina 3 caracteres depois.
echo substr_count($text,"is",3,3) . "<hr>";

// substr_compare conta quantas vezes tal string tem dentro de outra string
echo substr_compare("abcde","bc",1,3) . "<hr>";


//strtolower() -- strtoupper()
echo ucfirst($text) . "<br>"; // transforma a primeira letra de uma String em maiúscula, ** só a primeira
echo ucwords($text) . "<br>"; // transforma todas as primeiras letras de uma palavra na String em maiúscula.

// strlen() conta quantos caracteres tem em uma String

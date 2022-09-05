<?php
$dogs = ["Pastor alemão", "Husky", "Pitbull", "Poodle"];
print_r($dogs);
echo "<hr>";
// adiciona novo item no array
$dogs[] = "Rottweiler";
print_r($dogs);

$carro = [
    "ano" => 2006,
    "fabricante" => "VW"
];
echo "<hr>";
print_r($carro); // usado pra printar arrays, comando echo não funciona para printar arrays.
$carro["modelo"] = "Gol"; // adiciona novo índice 'modelo' e adiciona variável 'Gol'.
print_r($carro);

echo "<hr>";
$indices = array_keys($carro); // array_keys pega os índices de um array especifíco e transforma em um novo array. ----. igual o Arrays.copyOf do Java
print_r($indices); // print dos indices do array especifíco.
echo "<hr>";
echo $indices[2] . "<hr>"; // print do índice 2 do array $indices.

$ultimo = array_pop($dogs); // pega o último elemento de um array, *RETIRA O ÚLTIMO ELEMENTO DE UM ARRAY.
echo $ultimo . "<hr>";
print_r($dogs);
echo "<hr>";

// * array_pop retira o último elemento de um array específico, mas salva esse elemento em nova variável, se declarar $var = array_pop($x);
$ultimo_carro = array_pop($carro); // retira o último elemento de um array relativo, não mexe nos índices *RETIRA O ÚLTIMO ELEMENTO DE UM ARRAY.
echo $ultimo_carro . "<hr>";
print_r($carro);
echo "<hr>";

// * array_shift retira o primeiro elemento de um array específico, também salva em nova variável se assim for declarado.
$primeiro = array_shift($dogs);
echo $primeiro . '<hr>';
print_r($dogs);
echo "<hr>";

// array_unshift faz o contrário de array_shift, ele adiciona elementos no início de um array.
$cores = array("Verde","Amarelo");
array_unshift($cores,"Azul");
print_r($cores);
echo "<hr>";

// array_push adiciona valores no final de um array, pode adicionar mais de um elemento -- * sintaxe: array_push(array,novoselementos)
// ******** array_merge usado para adicionar elementos em um array associativo

array_push($dogs, "Pinscher","Bull Terrier");
print_r($dogs);
echo "<hr>";

//array_sum $precos = [18,5.5,20,17,39,"15teste"]
//                                          |
//                                          |
//// --->> Nesse exemplo ele soma o 15 dentro de teste também, se fosse teste15, ele não somava o 15
$precos = [18,5.5,20,17,39];
$total = array_sum($precos); // faz a soma de todos elementos inteiros de um array, se tiver String dentro do array, ele ignora a string.
echo $total . "<hr>";


// in_array(palavra,array) verifica se existe X palavra dentro de um array, pode ser usado com arrays associativos também
$valorprocurado = "Poodle";
// $busca = in_array("Poodle",$dogs);
$busca = in_array($valorprocurado,$dogs); // busca a variável de $valorprocurado em $dogs, retorna valor booleano, true ou false
echo $busca ? "elemento " . $valorprocurado . " encontrado<hr>" : "elemento " . $valorprocurado . " não encontrado<hr>";//verifica se $busca é verdadeiro

// ordenar os arrays 1. * arsort() -- ordem decrescente
// ordena números antes das palavras, e ordena palavras minúsculas antes das minúsculas
print_r($dogs);
echo "<hr>";
arsort($dogs); // ordena o array de Z a A, ordem decrescente, os índices não mudam, a ordem do array sim * funciona com arrays de números também
print_r($dogs);
echo '<hr>';

$numerais = [2,5,6,7,1,3,4,9,10,8];
arsort($numerais);
print_r($numerais);
echo "<hr>";

// ordenar os arrays 2. * asort() ordem crescente
// ordena números antes das palavras, e ordena palavras minúsculas antes das minúsculas
asort($dogs);
print_r($dogs); // ordena em ordem crescente, de A a Z. * funciona com arrays de números também
echo "<hr>";

$numerais = [2,5,6,7,1,3,4,9,10,8];
asort($numerais);
print_r($numerais);
echo "<hr>";

// ordenar os arrays 3. ksort() ordena pelo índice em ordem asc. |||| asc = ascendent (crescente)
ksort($dogs);
print_r($dogs);
echo "<hr>";


// ordenar os arrays 4. krsort() ordena pelo índice em ordem desc.
krsort($dogs);
print_r($dogs);
echo "<hr>";

// implode - junta elementos de um array em uma string (array -> string)
// sintaxe: implode(separador,array) -- separador é como você quer que os elementos do array sejam separados. com - vírgulas ou <br> <hr> etc...
$caes = implode(" <br> ", $dogs);
echo $caes . "<hr>";

// explode - transforma uma string em um array (string -> array)
$frase = "Hoje, no, café, da, manhã, comi, pão";
$arrayfrase = explode(" ",$frase); // delimitador = espaço em branco, vai separar as palavras em um array.
print_r($arrayfrase);

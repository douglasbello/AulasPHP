<?php
$pastel = array(
	'calabresa', 
	'frango com catupiry', 
	'bacon', 
	'bombom',
	'pizza',
	'banana com canela');
print_r($pastel);
echo "<hr>";
$pastel[] = 'caldo de cana';
print_r($pastel);
echo "<hr>";
$pedidos = [
		'bebida' => 'fanta uva',
		'maionese' => 'bacon',
		'acompanhamento' => 'batata frita'
];
$pedidos['condimentos'] = 'ketchup';
$pedidos[] = 'mostarda';
$pedidos['maionese'] = ['verde', 'bacon'];
print_r($pedidos);
echo "<hr>";
array_push($pastel, 'lombo canadense', 'frango com requeijão');
print_r($pastel);
echo "<hr>";

$last = array_pop($pastel);
print_r($pastel);
echo "<hr>";
echo $last;
echo "<hr>";

$first = array_shift($pastel);
echo $first;
echo "<hr>";
print_r($pastel);
echo "<hr>";

$indices = array_keys($pedidos);
print_r($indices);
echo "<hr>";

$total = [10,5,'elias',33.5,50/5,11,20];
echo array_sum($total);








// $array[] = “Adiciona elemento no array”;
// array_push() - Add elementos no array
// array_pop() - extrai e retorna o último elemento de array, diminuindo array em um elemento
// array_shift() - extrai e retorna o 1º elemento de array.

// array_keys($array) = retorna as chaves, numéricas e string;

//array_sum — Calcula a soma dos elementos de um array

//asort — Ordena um array mantendo a associação entre índices e valores
//arsort — Ordena um array em ordem descrescente
//ksort e krsort - ordena pelas chaves

//in_array — Checa se um valor existe em um array

//implode — Junta elementos de uma matriz em uma string (array -> string).

//explode — Divide uma string em strings (string -> array)


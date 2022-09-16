<?php

$pastel = array('calabresa',
                'frango com catupiry',
                'bacon',
                'bombom', 
                'pizza', 
                'banana com canela');
print_r($pastel);                
$pastel[] = 'chocolate';
echo "<hr>";
print_r($pastel);
echo "<hr>";

$pedidos = [
    'bebida' => 'coca cola',
    'maionese' => 'verde',
    'acompanhamento' => 'batata frita'
];

echo $pedidos['bebida'];
echo "<hr>";

$pedidos['condimentos'] = 'ketchup';
print_r($pedidos);
echo "<hr>";

array_push($pastel, 'lombo canadense', 'frango');
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







?>
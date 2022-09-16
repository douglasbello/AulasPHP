<?php 
//Array Multidimensional
$turmaAds = array(
	"nome" => ["Thiago","Lucas","Fernando"],
	"idade" => [25, 18, 22],
	"cidade" => ["PoA", "Canoas", "PoA"]
);

//print_r($turmaAds);
//echo $turmaAds["nome"][1];
//echo $turmaAds["cidade"][1];

// Loopings (laços de repetição)
// $i = $i + 1 é a mesma coisa que $i++
for ($i = 1; $i <= 5; $i++ ) { 
	echo "teste <br>";
}
for ($i = 1; $i <= 10; $i += 2 ) { 
	echo "Posição $i <br>";
}
$cafe = array( "Bacon", "Torrada", "Pão de Queijo", "Café Preto", "Cuca de Uva", "Bolo de Cenoura", "Tapioca" );
$contagem = count($cafe);

for ($i=0; $i < $contagem; $i++) { 
	echo $cafe[$i] . " - ";
}
echo "<hr>";
//While
$i = 0;
while ($i <= 10) {
	echo "Posição $i - ";	
	$i++;
}
echo "<hr>";
$i = 0;
while ( $i < $contagem ) {
	echo $cafe[$i] . "<br>";
	$i++;
}
// Foreach
foreach ($cafe as $item) {
	echo $item . " , ";
}
echo "<hr>";
$compras = array(
	"produtos" => ['teclado','mouse','monitor'],
	"quantidades" => [1, 2, 1],
	"precos" => [90.9 , 35, 629]
);

$dadosPessoais = [ 
	array(
	 	"Nome" => "Arthur",
		"Curso" => "ADS",
		"Nota" => "A"
	), 
	array(
		"Nome" => "Carlos",
		"Curso" => "Administração",
		"Nota" => "C"
	),
	array(
		"Nome" => "Thiago",
		"Curso" => "ADS",
		"Nota" => "B"
	)
];
foreach($dadosPessoais as $dado){
	echo "O aluno " . $dado["Nome"] . " é do curso de ". $dado['Curso'] ."<br>";
}
echo "<hr>";
$compras = array(
	array(
		"produto" => "teclado",
		"quantidade" => 1,
		"preco" => 90.9
	),
	array(
		"produto" => "mouse",
		"quantidade" => 2,
		"preco" => 39
	)
);
foreach ($compras as $compra) {
	echo $compra['produto'] . "<br>";
}

//echo $dadosPessoais[2]['Nome'];


?>
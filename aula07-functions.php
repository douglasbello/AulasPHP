<?php

function welcome() {
	echo "welcome";
}
welcome();
echo"<hr>";

function add_some_extra(&$string)
{
    $string .= ' e alguma coisa mais.';
}
$str = 'Isto é uma string,';
add_some_extra($str);
echo $str;    // imprime 'Isto é uma string, e alguma coisa mais.'
echo "<hr>";

function boas_vindas($nome) {
	echo "bem vindo " . $nome . ".";
}
$name = "joão";
boas_vindas($name); 		// pode colocar o valor direto na função, exemplo: boas_vindas("douglas");
?>
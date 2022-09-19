<?php
date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y h:i:s");
echo $data;
echo "<hr>";

setlocale (LC_ALL, 'pt_BR','pt_BR.utf-8','pt_BR.utf-8','portuguese');

echo strtotime("2022-09-20");
echo "<hr>";
$teste = strftime("%A, %d de %B de %Y", "1663642800" );
echo utf8_encode($teste);
echo "<hr>";

echo strftime("%A, %d de %B de %Y", "1663642800" );
echo "<hr>";

echo strftime("%A,%d de %B de %Y",strtotime('today'));
?>
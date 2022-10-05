<?php
function triangulo($lado1,$lado2,$lado3)
{
    if ($lado1 == $lado2 AND $lado2 == $lado3) {
        return 'O triângulo é um Equilátero';
    } elseif ($lado1 == $lado2 AND $lado3 != $lado2) {
        return 'O triângulo é um Escaleno';
    } elseif ($lado3 == $lado2 AND $lado1 != $lado2) {
        return 'O triângulo é um Escaleno';
    } elseif ($lado1 == $lado3 AND $lado1 != $lado2) {
        return 'O triângulo é um Escaleno';
    } else {
        return 'O triângulo é um Isóceles';
    }
}
echo triangulo(15,15,15) . '<hr>';
echo triangulo(12,12,3) . '<hr>';
echo triangulo(12,3,3) . '<hr>';
echo triangulo(12,3,12) . '<hr>';
echo triangulo(0,2,3);
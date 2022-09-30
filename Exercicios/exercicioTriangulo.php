<?php
function triangulo($lado1,$lado2,$lado3) {
    if ($lado1 == $lado2 AND $lado2 == $lado3) {
        return "O triângulo é um Equilátero";
    } elseif ($lado1 == $lado2 AND $lado3 != $lado2) {
        return "O triângulo é um Escaleno";
    } elseif ($lado3 == $lado2 AND $lado1 != $lado2) {
        return "O triângulo é um Escaleno";
    } elseif ($lado1 == $lado3 AND $lado1 != $lado2) {
        return "O triângulo é um Escaleno";
    } else {
        return "O triângulo é um Isóceles";
    }
}
echo triangulo(15,15,15) . "<hr>"; // três lados iguais, retorna Equilátero.
echo triangulo(12,12,3) . "<hr>"; // lado1 e lado2 iguais,lado3 diferente retorna Escáleno
echo triangulo(12,3,3) . "<hr>"; // lado2 e lado3 iguais, lado1 diferente, retorna Escáleno
echo triangulo(12,3,12) . "<hr>"; // lado1 e lado3 iguais,lado2 diferente, retorna Escáleno
echo triangulo(0,2,3); // três lados diferentes,retorna Isóceles
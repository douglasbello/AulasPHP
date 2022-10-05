<?php

function media_geral($a,$b)
{
    $vetor = [$a,$b];
    return ($a + $b) / count($vetor);
}
echo media_geral(100,100) . PHP_EOL;

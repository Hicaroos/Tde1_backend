<?php

$c = 10;
$a = 20;

$alunos = $c - 1;


$viagens = intval($a / $alunos);


if ($a % $alunos != 0) {
    $viagens++;
}

echo $viagens . "\n";
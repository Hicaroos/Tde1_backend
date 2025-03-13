<?php

$c = intval(trim(fgets(STDIN)));
$a = intval(trim(fgets(STDIN)));


$alunos = $c - 1;


$viagens = intval($a / $alunos);


if ($a % $alunos != 0) {
    $viagens++;
}

echo $viagens . "\n";
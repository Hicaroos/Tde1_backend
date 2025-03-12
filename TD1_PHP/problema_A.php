<?php

$quantidadeDeBrinquedos = 6;
$alturaDeCarlitos = 120;
$alturasDosBrinquedos = [200, 90, 100, 123, 120, 169];

$contador = 0;

for ($i = 0; $i < $quantidadeDeBrinquedos; $i++) {
    if ($alturaDeCarlitos >= $alturasDosBrinquedos[$i]) {
        $contador++;
    }
}

echo "Carlitos pode ir em $contador brinquedos.\n";

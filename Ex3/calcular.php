<?php

$base = rand(0, 100);

$numeroGerados = [];
$quantidadeTentativas = 0;

do {
    $numeroAleatorio = rand(0, 100);
    $numeroGerados[] = $numeroAleatorio;
    $quantidadeTentativas++;
} while ($numeroAleatorio != $base);

echo "Número base: $base <br><br>";
echo "Quantidade de números gerados: $quantidadeTentativas <br><br>";
echo "Números gerados:";
foreach ($numeroGerados as $numero) {
    echo "$numero<br>";
}
?>
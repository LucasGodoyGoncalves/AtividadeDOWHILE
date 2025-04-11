<?php

if (isset($_POST['valor'])) {
    $valor = intval($_POST['valor']);

    $notas = [100, 50, 20, 10, 5, 2, 1];
    $quantidadeNotas = [];
    $i = 0;

    do {
        $nota = $notas[$i];
        $quantidadeNotas[$nota] = intdiv($valor, $nota);
        $valor %= $nota;
        $i++;
    } while ($i < count($notas) && $valor > 0);

    echo "Quantidade de notas necessárias:";
    foreach ($quantidadeNotas as $nota => $quantidade) {
        echo "R$ $nota,00: $quantidade<br>";
    }
}
?>
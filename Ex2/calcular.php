<?php

if (isset($_POST['n'])) {
    $numero = intval($_POST['n']);
    $contador = 0;

    echo "Processo de subtração: $numero <br><br> ";

    do {
        $numeroAleatorio = rand(1, 10);
        $numero -= $numeroAleatorio;
        $contador++;

        echo "Número aleatório gerado: $numeroAleatorio<br>";
        echo "Valor restante: $numero<br><br>";
    } while ($numero > 0);

    echo "O processo foi executado $contador vezes até o valor ser igual ou menor que zero.";
}
?>
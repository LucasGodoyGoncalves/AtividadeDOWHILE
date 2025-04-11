<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculando</title>
    </head>
    <body>
    <?php
    
    $ns = intval($_POST['ns']);
    $numeroAleatorio = intval($_POST['Sorteado']);
    $contador = intval($_POST['contador']);
    $acertou = 0;

    $contador++;
    
    if ($ns > $numeroAleatorio)
    {
        echo "O número aleatório sorteado é menor do que o escolhido.<br>";
    }
    
    elseif ($ns < $numeroAleatorio)
    {
        echo "O número aleatório sorteado é maior do que o escolhido.<br>";
    }
    
    else
    {
        echo "Você acertou o número sorteado!!<br>E precisou de $contador tentativas.<br>";
        $acertou++;
    }

    ?>

    <?php if($acertou == 0){?>
        <form action="calcular.php" method="post">
            <label for="valor">Digite outro número:</label><br>
            <input type="text" id="ns" name="ns" required><br><br>

            <input type="hidden" name="Sorteado" value="<?= $numeroAleatorio; ?>">
            <input type="hidden" name="contador" value="<?= $contador; ?>">
         <input type="submit" value="Tentar novamente">
    <?php } else{}?>
    
        </form>
    </body>
</html>
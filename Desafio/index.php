<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número da Sorte</title>
</head>
<body>

    <?php $numeroAleatorio = rand(0, 100); ?>

    <form action="calcular.php" method="post">
        <label for="valor">Digite um número da sorte entre 0 e 100:</label><br>
        <input type="text" id="ns" name="ns" required><br><br>
        
        <input type="hidden" name="Sorteado" value="<?= $numeroAleatorio; ?>">
        <input type="hidden" name="contador" value="0">

        <input type="submit" value="Sortear">
    </form>
</body>
</html>
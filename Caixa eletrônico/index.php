<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>
</head>
    <style>
        img.nota{
            height: 50px;
        }
        li{
            margin: 10px;
        }
    </style>

<body>
    <?php
    $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Qual valor deseja sacar?</label>
            <input type="number" name="valor" id="valor" required step="5" value="<?= $valor ?>">
            <p style="font-size: 0.7em;"><sub>*</sub>Notas disponíveis: R$100 R$50 R$10 R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?= number_format($valor,2,",",".") ?> realizado</h2>
        <?php
        $resto = $valor;

        $n100 = floor($resto / 100);
        $resto %= 100;

        $n50 = floor($resto / 50);
        $resto %= 50;

        $n10 = floor($resto / 10);
        $resto %= 10;

        $n5 = floor($resto / 5);
        $resto %= 5;
        ?>
        <p>O caixa Eletrônico irá te entrgar:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="nota de 100" class="nota"> x <?= $n100 ?> </li>
            <li><img src="imagens/50-reais.jpg" alt="nota de 50" class="nota"> x <?= $n50 ?> </li>
            <li><img src="imagens/10-reais.jpg" alt="nota de 10" class="nota"> x <?= $n10 ?> </li>
            <li><img src="imagens/5-reais.jpg" alt="nota de 5" class="nota"> x <?= $n5 ?> </li>
        </ul>
    </section>
</body>

</html>
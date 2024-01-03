<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $salario = $_GET["salario"] ?? 0;
    $minimo = 1300;

    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?= $salario ?>">
            <p>*Considere o salário mínimo como:<strong>R$<?= number_format($minimo, 2, ",", '.') ?></strong></p>
            <button type="submit">Calcular</button>
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php
        $resultado = intdiv($salario,$minimo); // mesma coisa que --> $quantidade = (int)$resultado;
        $resto = $salario % $minimo;
        echo "<p>A pessoa ganha que ganha ". number_format($salario,2,",",".") . " recebe <strong>$resultado saláros mínimos</strong> +  R\$". number_format($resto, 2,",",".") ."</p>"
        ?>
    </section>

</body>

</html>
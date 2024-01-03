<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias aritiméticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $p1 = $_GET['p1'] ?? 1;
    $v1 = $_GET['v1'] ?? ' ';
    $v2 = $_GET['v2'] ?? ' ';
    $p2 = $_GET['p2'] ?? 1;

    ?>
    <main>
        <h1>Médias aritiméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" required value="<?= $v1 ?>">
            <label for="p1">Peso 1</label>
            <input type="number" name="p1" id="p1" min="1" required value="<?= $p1 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" required value="<?= $v2 ?>">
            <label for="p2">Peso 2</label>
            <input type="number" name="p2" id="p2" min="1" required value="<?= $p2 ?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php
        $media = ((int)$v1 + (int)$v2) / 2;
        $ponderada = (((int)$v1 * (int)$p1) + ((int)$v2 * (int)$p2)) / ((int)$p1 + (int)$p2);

        echo "<ul><li>A Média Aritimética: ". number_format($media,2,",",".") ."</li><li>A média ponderada: " . number_format($ponderada,2,",","."). "</li></ul>"
        ?>
    </section>
</body>

</html>
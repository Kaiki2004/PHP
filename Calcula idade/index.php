<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $atual = date('Y');
        $nasce = $_GET['nasce'] ?? '';
        $ano = $_GET['ano'] ?? '';
    ?>
    <main>
        <h1>Calcular sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasce">Em que ano você nasceu?</label>
            <input type="number" name="nasce" id="nasce" min="1900" max="<?=$atual?>" value="<?=$nasce?>">
            <label for="ano">Quer saber sua idade em qual ano?(atualmenente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
            <input type="submit" value="Qual sua idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $resultado = (int)$ano - (int)$nasce;

            echo "Você terá <strong>$resultado</strong> anos"
        ?>
    </section>
</body>

</html>
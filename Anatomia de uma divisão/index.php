<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 1;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
           $quociente = intdiv($dividendo,$divisor); //divide um pelo o outro e pega só a parte inteira
           $resto = $dividendo % $divisor;
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$quociente?></td>
                <td><?=$resto?></td>
            </tr>
        </table>
    </section>

</body>

</html>
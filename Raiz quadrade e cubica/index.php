<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes - quadrada e cúbica</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $num = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
           
            $quadrada = sqrt($num);//mesma coisa que --> ($num** (1/2))
            $cubica =  $num** (1/3);

            echo "<ul><li>A raiz quadrada de $num é: <strong>" . number_format($quadrada,2,",","."). "</strong> </li><li>A raiz  cúbica de $num é: <strong>". number_format($cubica,2,",","."). "</strong></li></ul>";
        ?>
    </section>

</body>

</html>
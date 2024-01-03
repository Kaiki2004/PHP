<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php 
        $total_seg = $_GET['seg'] ??0;
    ?>
    <main>
        <h1>Calcular tempo</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Total de segundos</label>
            <input type="number" name="seg" min="0" id="seg" step="1" required value="<?=$total_seg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
    <section>
        <?php 
            $sobra = $total_seg;
            $semana = (int)($sobra/604_800);
            $sobra = $sobra % 604_800;
        
            $dia = (int)($sobra/86_400);
            $sobra = $sobra % 86_400;

            $hora = (int)($sobra/3_600);
            $sobra = $sobra % 3_600;

            $min = (int)($sobra/60);
            $sobra = $sobra % 60;

            $seg = $sobra;
        
        ?>

        <h2>Resultado</h2>
       <ul>
        <p><?php echo "Total: <strong>" .number_format($total_seg,0,",",".")." </strong> segundos" ?></p>
        <li><?= $semana?> Semanas</li>
        <li><?= $dia?> Dias</li>
        <li><?= $hora?> Horas</li>
        <li><?= $min?> minutos</li>
        <li><?= $seg?> segundos</li>
       </ul>
    </section>

</html>
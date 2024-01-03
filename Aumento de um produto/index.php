<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajuste de preço</title>
</head>

<body>
    <?php 
        $produto = $_GET['produto'] ?? '';
        $reajuste = $_GET['reajuste']  ?? 0;
    ?>
    <main>
        <h1>Calcular aumento</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="produto">Qual o valor do produto?</label>
            <input type="number" name="produto" id="produto" min="0.10" step="0.01" value="<?=$produto?>">

            <label for="reajuste">Qual a porcentagem de aumento? <strong>(<span id="p">0</span>%)</strong></label>
            <!--<input type="number" name="aumento" id="aumento" value="">-->
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" 
            value="<?=$reajuste?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php 
            $aumento = ((int)$produto * (int)$reajuste) /100;
            $novo = (int)$produto + (int)$aumento;

            echo "O reajuste do produto será de: <strong>R$" . number_format($novo,2,",",".") . " </strog>com porcentagem de <strong>(%$reajuste)</strong>"
        ?>
    </section>
<script>
    mudaValor()
    function mudaValor(){
        p.innerText = reajuste.value
    }
</script>
</body>

</html>
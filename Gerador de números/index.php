<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerador denúmeros aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $num = mt_rand(1, 100);
        echo "<p>Gerando um número entre 1 e 100... <br>O valor gerado foi <strong>$num</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro valor</button>
    </main>
</body>

</html>
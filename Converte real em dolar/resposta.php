<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
        $real = $_GET["num"] ?? 0;
        $dolar = $real/5.22;
        // tem que ativar a biblioteca $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus R$". $real . " equivalem a US$" . number_format($dolar,2);
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
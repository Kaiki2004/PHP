<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Respostas dos exercícios</title>
</head>
<body>
<main>
    <p>
        <h1>Resultado final</h1>
        <?php
            //var_dump($_GET);
            $n = $_GET["num"] ?? 0;
            $sucessor = $n + 1;
            $antecessor = $n - 1;
            echo "<br>o sucessor de $n é: $sucessor"."<br>". "o antecessor de $n é: $antecessor";
            ?>
    </p>
    <button onclick="javascript:window.location.href='index.html'">&#x2b05 Voltar</button>
</main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cotação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y"); 
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        //var_dump($dados);
        $cotacao = $dados["value"][0]["cotacaoCompra"];


        $real = $_GET["num"] ?? 0;
        $dolar = $real/$cotacao;
        // tem que ativar a biblioteca intl (internallization PHP) $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus R$". $real . " equivalem a US$" . number_format($dolar,2);
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
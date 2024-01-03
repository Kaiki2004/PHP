<?php 
// API do banco Central do Brasil --> https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/recursos/CotacaoDolarPeriodo#eyJmb3JtdWxhcmlvIjp7IiRmb3JtYXQiOiJqc29uIiwiJHRvcCI6MSwiZGF0YUluaWNpYWwiOiIxMS0yOC0yMDIzIiwiZGF0YUZpbmFsQ290YWNhbyI6IjEyLTA1LTIwMjMiLCIkb3JkZXJieSI6IgQyBCBkZXNjIn0sInByb3ByaWVkYWRlcyI6WzAsMl19

    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y"); 
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    $dados = json_decode(file_get_contents($url), true);
    //var_dump($dados);
    $cotacao = $dados["value"][0]["cotacaoCompra"];

    echo "A cotação do dolar é:" . number_format($cotacao,2);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor = $_GET["valor"] ?? null;

        if (!$valor) {
            echo "Valor invalido";
            return ;
        }

        $data = '2025-05-14';
        $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='2025-05-14'&top=1&format=json";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        if (isset($data['value'][0])) {
            $cotacao = $data['value'][0];
            echo "Data: " . $cotacao['dataHoraCotacao'] . "\n";
            echo "Compra: " . $cotacao['cotacaoCompra'] . "\n";
            echo "Venda: " . $cotacao['cotacaoVenda'] . "\n";
        }
    ?>
</body>
</html>
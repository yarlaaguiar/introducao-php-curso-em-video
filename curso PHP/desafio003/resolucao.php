<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Convertendo moedas</h1>
        <?php 
        // cotação copiada do Google 
            $cotação = 5.75;
        //Quanto $$ você tem ?
            $real = $_REQUEST["din"] ?? 0;
        // Equivalência em dólar
            $dolar = $real / $cotação;
        // Mostrar resultado 
        //    $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        //    echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") .  "equivalem a " . numfmt_format_currency($padrão, $dolar, "USD") . "</p>";
        echo "Seus R\$$real equivalem a US\$$dolar ."
    
    ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>
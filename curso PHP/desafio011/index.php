<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preço = $_REQUEST['preço'] ?? 0;
        $reajust = $_REQUEST['reajust'] ?? 0;
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preço">Preço do produto <strong>(R$)</strong></label>
            <input type="number" name="preço" id="preço" min="0.10" step="0.01" value="<?=$preço?>">
            <label for="reajust">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajust" id="reajust" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajust?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
        <?php 
        $aumento = $preço * $reajust / 100;
        $novo = $preço + $aumento;
        ?>
    <section>
            <h2>Resultado do reajuste</h2>
            <p>O produto que custava <?=number_format($preço, 2, ",", ".")?>, com o <strong><?=$reajust?>% de aumento</strong> vai passar a custar <strong><?=number_format($novo, 2, ",", ".")?></strong> a partir de agora.</p>
        </section>
        <script>
            mudaValor();

            function mudaValor() {
            p.innerText = reajust.value;

            }
        </script>
</body>
</html>
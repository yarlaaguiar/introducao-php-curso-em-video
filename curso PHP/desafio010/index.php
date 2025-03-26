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
        $atual = date("Y");
        $nasc = $_GET['nasc'] ?? '2000';
        $ano = $_GET['ano'] ?? $atual ;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>" value="<?=$nasc?>">
            <label for="ano">Quer saber a sua idade em que ano? (atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
        </main>
        <section>
            <h2>Resultado</h2>
            <?php 
            $idade = $ano - $nasc;
            ?>
            <p>Quem nasceu em <?=$nasc?> vai ter <?=$idade?> <strong>anos</strong> em <?=$ano?>!</p>
        </section>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Resultado final</h1>
        <p>
        <?php 
        $numero = $_REQUEST["num"] ?? 0;

        $ant = $numero - 1;
        $suc = $numero + 1;

        echo "O número escolhido foi $numero ";
        echo " <br> O seu antecessor é $ant " ;
        echo " <br> O seu sucessor é $suc ";
        ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>
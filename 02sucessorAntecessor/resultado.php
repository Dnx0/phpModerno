<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../01form/style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php         
           // var_dump($_POST);
        $numero = $_POST["numero"] ;
        $ant = $numero - 1;
        $suc = $numero + 1;
        echo "<p>Seu número é <strong>$numero</strong> o antecessor é  <strong>$ant</strong> e o sucessor é <strong>$suc</strong>!</p> ";
        ?>
        <button onclick="javascript:history.go(-1)">← Voltar</button>
    </main>
</body>
</html>
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
        $valor = $_GET["real"] ;
        $conv = $_GET["convercao"];
        $dolar = $valor / $conv;               
        echo "<p>O valor de <strong>$valor</strong> convertido para dólar com a taxa de <strong>$conv</strong> da o total de  <strong>$dolar</strong> dólares!</p> ";
        ?>
        <button onclick="javascript:history.go(-1)">← Voltar</button>
    </main>
</body>
</html>
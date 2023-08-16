<?php include'../02sucessorAntecessor/header.php'?>
<head>    
    <title>Resultado</title>   
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
        
        $valorFormatado = number_format($valor, 2, ',', '.');
        $dolarFormatado = number_format($dolar, 2, ',', '.');
        $convFormatado = number_format($conv, 2, ',', '.');

        echo "<p>O valor de <strong>$valorFormatado</strong> convertido para dólar com a taxa de <strong>$convFormatado</strong> da o total de  <strong>$dolarFormatado</strong> dólares!</p> ";
        ?>
        <button onclick="javascript:history.go(-1)">← Voltar</button>
    </main>
</body>
</html>
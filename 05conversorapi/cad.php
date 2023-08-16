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
        include '../testeapi.php';     
           // var_dump($_POST);
        $valor = $_GET["real"] ;        
        $dolar = $valor / $cotação;

        $valorFormatado = number_format($valor, 2, ',', '.');
        $cotacaoFormatada = number_format($cotação, 2, ',', '.');
        $dolarFormatado = number_format($dolar, 2, ',', '.');

        echo "<p>O valor de <strong>$valorFormatado</strong> convertido para dólar com a taxa de <strong>$cotacaoFormatada</strong> da o total de  <strong>$dolarFormatado</strong> dólares!</p> ";
        ?>
        <button onclick="javascript:history.go(-1)">← Voltar</button>
    </main>
</body>
</html>
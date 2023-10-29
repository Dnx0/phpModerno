<?php include '../02sucessorAntecessor/header.php' ?>

<head>
    <title>Reajuste de preço</title>
</head>

<body>
<?php
#Definindo as variaveis
$precoOriginal=$_GET["preco"] ?? 100;
$porcentagem=$_GET["porcentagem"] ?? 20;
?>

<main>
    <h1>Calculadora de reajuste de preço</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num1">Digite o preço inicial</label>
        <input type="number"  name="preco" id="num1">
        <label for="num2">Digite a porcentagem que quer reajustar</label>
        <input type="number"  name="porcentagem" id="num2">
        <input type="submit" value="Calcular">
    </form>
</main>

<section id="resultado">
    <h2>Resultado da media</h2>
    <!-- calculo do resultado -->
    <?php
    $reajustado = ($precoOriginal * $porcentagem) / 100 ;
    $valorFinal = $precoOriginal + $reajustado;
    echo"<p>O $precoOriginal aumentado na porcentagem de $porcentagem é igual a  <strong>$valorFinal</strong></p>   " ;
    ?>
</section>
</body>

</html>


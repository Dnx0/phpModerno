<?php include '../02sucessorAntecessor/header.php' ?>

<head>
    <title>Média Aritmetica</title>
</head>

<body>
<?php
#Definindo as variaveis
$numero1=$_GET["num1"] ?? 0;
$numero2=$_GET["num2"] ?? 0;
?>

<main>
    <h1>Calculadora de média aritmetica</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num1">Digite um numero</label>
        <input type="number" step="0.01" name="num1" id="num1">
        <label for="num2">Digite outro numero</label>
        <input type="number" step="0.01" name="num2" id="num2">
        <input type="submit" value="Calcular">
    </form>
</main>

<section id="resultado">
    <h2>Resultado da media</h2>
<!-- calculo do resultado -->
    <?php
    $media = ($numero1 + $numero2) / 2;
    echo"<p>A media de $numero1 e $numero2 é  <strong> $media</strong></p>   " ;
    ?>
</section>
</body>

</html>

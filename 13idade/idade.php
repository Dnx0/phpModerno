<?php include '../02sucessorAntecessor/header.php' ?>

<head>
    <title>Média Aritmetica</title>
</head>

<body>
<?php
#Definindo as variaveis
$anoAtual = date("Y");
$numero1=$_GET["ano1"] ?? 2007;
$numero2=$_GET["ano2"] ?? 2023;
?>

<main>
    <h1>Calculadora de idade</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num1">Digite o ano inicial</label>
        <input type="number"  name="ano1" id="num1">

        <label for="num2">Digite o ano final. (Atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
        <input type="number"  name="ano2" id="num2">
        <input type="submit" value="Calcular">
    </form>
</main>

<section id="resultado">
    <h2>Resultado da media</h2>
    <!-- calculo do resultado -->
    <?php
    $media = $numero2 - $numero1 ;
    echo"<p>A idade de $numero1 até $numero2 é  <strong> $media</strong></p>   " ;
    ?>
</section>
</body>

</html>

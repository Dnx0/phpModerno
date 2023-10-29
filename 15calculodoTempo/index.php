<?php include '../02sucessorAntecessor/header.php' ?>

<head>
    <title>Calculadora de segundos</title>
</head>

<body>
<?php
#Definindo as variaveis
$segundos=$_GET["segundos"] ?? 100;
$minuto = 60;
$hora = 3600;

?>

<main>
    <h1>Calculadora de segundos</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num1">Digite os segundos</label>
        <input type="number"  name="segundos" id="num1">
        <input type="submit" value="Calcular">
    </form>
</main>

<section id="resultado">
    <h2>Resultado da media</h2>
    <!-- calculo do resultado -->
    <?php
    $segundoMinuto = $segundos/ $minuto;
    $segundoHora = $segundos / $hora;
    echo"<p> Esses $segundos é o equivalente a <strong>$segundoMinuto</strong> minutos e equivalente a  <strong>$segundoHora horas</strong></p>   " ;
    ?>
</section>
</body>

</html>


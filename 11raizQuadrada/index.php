<?php include '../02sucessorAntecessor/header.php' ?>

<head>
    <title>Raiz Quadrada</title>
</head>

<body>
<?php
#Definindo as variaveis
$numero=$_GET["num"] ?? 64;
?>

<main>
    <h1>Calculadora de raiz quadrada</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num">Digite um numero</label>
        <input type="number" name="num" id="num">

        <input type="submit" value="Calcular">
    </form>
</main>

<section id="resultado">
    <h2>Resultado da divisão</h2>

    <?php
    $res= sqrt($numero);
    $raiz_cubica=pow($numero,1.0/3.0);
    echo"<p>A raiz de $numero  <strong>igual a ". number_format($res,3,",","."). "</strong></p>  e a raiz cubica é igual a $raiz_cubica " ;
    ?>
</section>
</body>

</html>

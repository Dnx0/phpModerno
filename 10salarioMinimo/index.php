<?php include '../02sucessorAntecessor/header.php' ?>

<head>
    <title>Salário mínimo</title>
</head>

<body>
<?php
#Definindo as variaveis
$minimo= 1302;
$salario=$_GET["num"] ?? 1302;
?>

<main>
    <h1>divisor de salario mínmimo</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num">Digite o seu Salario R$</label>
        <input type="number" name="num" id="num">

        <input type="submit" value="Calcular">
    </form>
</main>

<section id="resultado">
    <h2>Resultado da divisão</h2>

    <?php
    $res= $salario/$minimo;
    $resto = $salario % $minimo;
    echo"<p>O seu salario de $salario divido por $minimo é <strong>igual a ". number_format($res,3,",","."). " salarios minimos </strong></p> + $resto" ;
    ?>
</section>
</body>

</html>

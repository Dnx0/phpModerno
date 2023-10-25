<?php include '../02sucessorAntecessor/header.php' ?>

<head>
    <title>Divisão</title>
</head>

<body>
<?php
#Capturando os dados do formulario retroalimentado
$dividendo=$_GET["num1"] ?? 45;
$divisor=$_GET["num2"] ?? 5;
?>

<main>
    <h1>Anatomia de uma divisão</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num1">Digite o dividendo</label>
        <input type="number" name="num1" id="num1" min="0" value="<?= $dividendo ?>">
        <label for="num2">Digite o divisor</label>
        <input type="number" name="num2" id="num2" min="1" value="<?= $divisor ?>">
        <input type="submit" value="Dividir">
    </form>
</main>

<section id="resultado">
    <h2>Resultado da divisão</h2>

    <?php
    $res= $dividendo/$divisor;
    $resto = $dividendo % $divisor;
    echo"<p>A divisão de $dividendo por $divisor é <strong>igual a ". number_format($res,2,",","."). "</strong></p> e a sobra é igual a $resto" ;
    ?>
</section>
</body>

</html>
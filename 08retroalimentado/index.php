<?php include '../02sucessorAntecessor/header.php' ?>

<head>
    <title>Formulario PhP</title>
</head>

<body>
    <?php
        #Capturando os dados do formulario retroalimentado
         $valor1=$_GET["num1"] ?? 35;
         $valor2=$_GET["num2"] ?? 34;
         ?>

        <main>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                <label for="num1">Digite o primeiro numero</label>
                <input type="number" name="num1" id="num1" value="<?= $valor1 ?>">
                <label for="num2">Digite o segundo numero</label>
                <input type="number" name="num2" id="num2" value="<?= $valor2 ?>">
                <input type="submit" value="Somar">
            </form>
        </main>

        <section id="resultado">
            <h2>Resultado da soma</h2>

            <?php
            $res= $valor1 + $valor2;
            echo"<p>A soma de $valor1 + $valor2 é <strong>igual a $res</strong></p>" ;
            ?>
        </section>
</body>

</html>
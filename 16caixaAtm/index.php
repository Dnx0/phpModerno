<?php include '../02sucessorAntecessor/header.php' ?>

<head>
    <title>caixa eletronica</title>
</head>

<body>
<?php
#Definindo as variaveis
$valor_saque=$_GET["deposito"] ?? 100;
$nota100 = 100;
$nota50 = 50;
$nota10 = 10;
$nota5 = 5;

?>

<main>
    <h1>CAIXA ELETRONICO</h1>
    <p>Estão disponiveis notas de 100, 50, 10 e 5 reais</p>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num1">Digite o valor a ser sacado</label>
        <input type="number"  name="deposito" id="num1">
        <input type="submit" value="Calcular">
    </form>
</main>

<section id="resultado">
    <h2>Extrato</h2>
    <!-- calculo do resultado -->
    <?php
    if ($valor_saque % 5 != 0 || $valor_saque <= 0) {
        $valor_proximo_superior = ceil($valor_saque / 5) * 5;
        $valor_proximo_inferior = floor($valor_saque / 5) * 5;

        echo "Valor digitado é inválido. Tente " . $valor_proximo_superior . " ou " . $valor_proximo_inferior;
    } else {
        $cem = 0;
        $cinquenta = 0;
        $dez = 0;
        $cinco = 0;

        // Calcula as notas a serem sacadas
        while ($valor_saque > 0) {
            if ($valor_saque >= $nota100) {
                $cem++;
                $valor_saque -= $nota100;
            } elseif ($valor_saque >= $nota50) {
                $cinquenta++;
                $valor_saque -= $nota50;
            } elseif ($valor_saque >= $nota10) {
                $dez++;
                $valor_saque -= $nota10;
            } else {
                $cinco++;
                $valor_saque -= $nota5;
            }
        }

        // Exibe as notas sacadas
        echo "<p>Foram sacadas $cem notas de 100 reais, $cinquenta notas de 50 reais, $dez notas de 10 reais e $cinco notas de 5 reais.</p>";
    }
    ?>
</section>
</body>

</html>



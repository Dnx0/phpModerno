<?php include'../02sucessorAntecessor/header.php'?>

<main>
    <h1>Analisador de Número Racional</h1>
    <?php 
    #Está pegando do formulario o valor que está no numero e colocando na variavel num, caso não tenha nada vai ser 0, com os ??
    //REQUEST pega tanto Post ou o Get
        $num = $_REQUEST["numero"] ?? 0;

        # number fomart está colocando o número sempre com 3 casas decimais separando os milhares por virgula e o decimal por ponto
        echo "<p> Analisando o número <strong>". number_format($num,3,",",".") ."</strong> passado pelo usuário </p>";

        $int = (int) $num;
        $frac = $num - $int;

        echo "<ul><li>A parte inteira do número é: <strong>". number_format($int,0,",",".") ." </strong></li>";
        echo "<li>A parte decimal do número é: <strong>". number_format($frac,3,",",".") ." </strong></li></ul>";
    ?>
    <button onclick="javascript:history.go(-1)">← Voltar</button>
</main>
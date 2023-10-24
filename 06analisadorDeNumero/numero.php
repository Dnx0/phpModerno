<?php include'../02sucessorAntecessor/header.php'?>

<main>
    <h1>Analisador de Número Racional</h1>
    <?php 
    #Está pegando do formulario o valor que está no numero e colocando na variavel num, caso não tenha nada vai ser 0, com os ??
        $num = $_POST["numero"] ?? 0;

        echo "<p> Analisando o número $num passado pelo usuário </p>";
    ?>
</main>
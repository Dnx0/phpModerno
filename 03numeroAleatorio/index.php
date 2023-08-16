<?php
$num = rand(0, 100);
include'../02sucessorAntecessor/header.php'
    ?>


<head>
    <title>Número aleatório</title>
</head>

<body>
    <main>
        <h1>Gerador de números aleatórios</h1>
        <h3>Clique no botão e ele vai gerar um número aleatório!</h3>
        <?php echo "<p> O número gerado foi <strong>$num</strong></p>" ?>  
        <button onclick="javascript:document.location.reload()"> Gerar outro número</button>
    </main>
</body>

</html>
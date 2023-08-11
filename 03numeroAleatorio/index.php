<?php
$num = rand(0, 100)
    ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatório</title>
    <link rel="stylesheet" href="../01form/style.css">
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
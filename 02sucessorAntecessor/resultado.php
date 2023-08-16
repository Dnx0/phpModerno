<?php include 'header.php' ?>
<head> 
<title>Resultado</title>    
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php         
           // var_dump($_POST);
        $numero = $_POST["numero"] ;
        $ant = $numero - 1;
        $suc = $numero + 1;
        echo "<p>Seu número é <strong>$numero</strong> o antecessor é  <strong>$ant</strong> e o sucessor é <strong>$suc</strong>!</p> ";
        ?>
        <button onclick="javascript:history.go(-1)">← Voltar</button>
    </main>
</body>
</html>
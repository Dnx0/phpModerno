<?php include'header.php' ?>
<head>
<title>Antecessor e sucessor</title>
</head>
<body>
    <header><h1>Digite um número</h1></header>
    <section>
        <form action="resultado.php" method="post">
            <label for="Número">Digite um número que darei o sucessor e o antecessor:</label>             
            <input type="number" name="numero" id="Número" placeholder="Digite um número">               
            <input type="submit" value="Enviar" >
        </form>
    </section>
</body>
</html>
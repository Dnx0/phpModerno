<?php include'../02sucessorAntecessor/header.php'?>
<head>
    <title>Conversor de moeda</title>
</head>
<body>
    <header><h1>Conversor de para dolar v2.0!</h1></header>
    <section>
        <form action="cad.php" method="get">
            <label for="real">Digite o valor em reais:</label>             
            <input type="number" name="real"  placeholder="Insira em reais o valor">             
            <input type="submit" value="Enviar" >  
            <p>Dados atualizados com a API do Banco Central</p>          
        </form>
        
    </section>
</body>
</html>
<!DOCTYPE html>
<?php include'../02sucessorAntecessor/header.php'?>
<head>   
    <title>Conversor de moeda</title>    
</head>
<body>
    <header><h1>Conversor de para dolar v1.0!</h1></header>
    <section>
        <form action="cad.php" method="get">
            <label for="real">Digite o valor em reais:</label>             
            <input type="number" name="real"  placeholder="Insira em reais o valor">  
            <label for="convercao"> Taxa de conversão</label>     
            <input type="number" step="0.01" name="convercao" placeholder="Digite a taxa de conversão">                          
            <input type="submit" value="Enviar" >
        </form>
    </section>
</body>
</html>
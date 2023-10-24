<!--Include adiciona todo cabeçalho de outro código sem precisar fica repetindo, inclusive puxando as configurações de CSS -->
<?php include'../02sucessorAntecessor/header.php'?>

<head>
    <title>Analisador de número racional</title>
</head>

<body>
    <header>
        <h1>Analisador de Número Racional</h1>
    </header>
    <main>
        <section>
            <form action="numero.php" method="post">
                <label for="numero">Digite um numero racional com até 3 casas decimais:</label>
                <!-- O step permite decimais no caso até 3, mas pode colocar mais 0 para adicionar mais casas decimais -->
                <input type="number" name="numero" id='n' step="0.001" placeholder="Insira um numero racional">
                <input type="submit" value="Analisar">
            </form>
        </section>
    </main>
</body>

</html>
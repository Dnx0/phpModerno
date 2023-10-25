<?php include '../02sucessorAntecessor/header.php' ?>

<head>
    <title>Formulario PhP</title>
</head>

<body>

    <main>
        <form action="superglobal.php?tipo=Aluno&turno=Noite" method="post">
            <label for="user">Digite o Usuário</label>
            <input type="text" name="user">
            <label for="password">Digite a senha</label>
            <input type="password" name="password">
            <input type="submit" value="Enviar">
        </form>
    </main>
</body>

</html>
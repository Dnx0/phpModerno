<!--Cad de cadastro -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php         
           // var_dump($_POST);
        $nome = $_GET["nome"] ?? "fulano";
        $snome = $_GET["sobrenome"] ?? "dos nossos" ;
        echo "<p>Bem vindo <strong>$nome $snome</strong>!</p> ";
        ?>
        <button onclick="javascript:history.go(-1)">← Voltar</button>
    </main>
</body>
</html>
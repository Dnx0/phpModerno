<!--Include adiciona todo cabeçalho de outro código sem precisar fica repetindo, inclusive puxando as configurações de CSS -->
<?php include'../02sucessorAntecessor/header.php'?>

<main> 
    <pre>
        <?php 
            #pegando os valores da superGlobal get
            echo "<h1>Super Global GET</h1>";
            var_dump($_GET);

            #pegando os valores da superGlobal POST
            echo "<h1>Super Global POST</h1>";
            var_dump($_POST);

            #Usando cookies, 3600 são segundo o mesmo que 2 horas
            setcookie("dia-da-semana","Terça", time()+3600);

            #Iniciando um Session
            session_start();
            $_SESSION["Teste"] = "Funcionou!";

            #Var_dump do cookie
            echo "<h1>Super Global COOKIE</h1>";
            var_dump($_COOKIE);

            #var_dump do session
            echo "<h1>Super Global Session</h1>";
            var_dump($_SESSION);

            #var_dump do server
            echo "<h1>Super Global Server</h1>";
            var_dump($_SERVER);

             #var_dump do Global
             echo "<h1>Super Global GLOBALS</h1>";
             var_dump($GLOBALS);

        ?>        
    </pre>
</main>
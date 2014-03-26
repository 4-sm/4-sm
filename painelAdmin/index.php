<?php 
    session_start();
    include_once '../src/validaLogin.php';
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>4WS - Web Designer | Developper</title>
    </head>
    <body>
        <h1>Login Efetuado com Sucesso, Logado com <strong><?php echo $_SESSION['user'];?></strong></h1>
        <h5><a href="logout.php">SAIR</a></h5>
    </body>
</html>

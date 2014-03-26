<?php
 include_once '../connection/connection.php';
 session_start();
 
 $login = $_POST['user'];
 $senha = $_POST['senha'];
 
 $query = "select * from usuario where login = '$login' AND senha = '$senha'";
 $consulta = $conn ->query($query);
 if($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
     $_SESSION['id'] = $linha['id'];
     $_SESSION['user'] = $linha['nome'];
     header ("location: ../painelAdmin");
     }else{
     ?>
    <script type="text/javascript">
        alert("Login ou senha incorreto!");
        location.href = "../";
    </script>
<?php
    }
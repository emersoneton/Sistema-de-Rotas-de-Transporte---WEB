<?php
    session_start();

    //Incluir a conexão do BD
    include_once("conexao.php");

      $email = $_POST['email'];
      $senha = $_POST['senha'];


    $sql = "SELECT email,senha FROM usuario where email = '$email' and senha = '$senha'";

   $result = $pdo->query($sql);
   while ($row = $result->fetch()) {
       echo "Usuario: ".$row['email']." - Senha:".$row['senha']."\n";
   }

/*    if ((isset($_POST['email'])) && ((isset($_POST['senha']))) {



    }else{
      $_SESSION['loginErro'] = "Usuario ou Senha inválido!";
      header("Location: login.html")
    }
*/
 ?>

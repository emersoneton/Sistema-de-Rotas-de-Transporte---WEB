<?php
    session_start();

    //Incluir a conexão do BD
    include_once("conexao.php");

      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $valida = false;


    $sql = "SELECT email,senha FROM usuario where email = '$email' and senha = '$senha'";

   $result = $pdo->query($sql);
   while ($row = $result->fetch()) {
       echo "Usuario: ".$row['email']." - Senha:".$row['senha']."\n";
       $valida = true;
   }

   if ($valida == false) {

     $_SESSION['loginErro'] = "Usuario ou Senha inválido!";
     header("Location: login.php");

   } else {
     session_start();
     $_SESSION['email'] = $email;
     $_SESSION['senha'] = $senha;
     header("Location: index0.php");
   }

 ?>

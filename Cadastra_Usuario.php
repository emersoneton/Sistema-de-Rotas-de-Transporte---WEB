<?php
session_start();

  //Incluir a conexão do BD
  include_once("conexao.php");


    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $cep = $_POST['cep'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $cidade = $_POST['cidade'];
    $estado= $_POST['estado'];

    echo $email;
    echo $senha;

    //Aplica os resultados recebidos no banco
  //  $resultado_usuarioParada = $pdo->query("INSERT INTO usuario (email,senha,) VALUES (
  //    '$email', '$senha')");

      $SQL = "INSERT INTO usuario (email,senha,endereco,numero,cep,rg,cpf,cidade,estado) VALUES ('$email', '$senha',
      '$endereco', '$numero', '$cep', '$rg', '$cpf', '$cidade', '$estado');";

       $stmt = $pdo->prepare($SQL);

       $stmt->execute($valor);


  $_SESSION['msg'] = "<p style='color: red;'><b>USUARIO CADASTRADO, PODE FAZER LOGIN!</b></p>";
  header("location: login.php");
 ?>

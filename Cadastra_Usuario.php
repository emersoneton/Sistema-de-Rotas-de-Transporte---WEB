<?php
session_start();

  //Incluir a conexão do BD
  include_once("conexao.php");


    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo $email;
    echo $senha;

    //Aplica os resultados recebidos no banco
    $resultado_usuarioParada = $pdo->query("INSERT INTO usuario (email,senha) VALUES (
      '$email', '$senha')");



  $_SESSION['msg'] = "<p style='color: green;'>Usuario Cadastrado com Sucesso!</p>";
  header("location: login.php");
 ?>

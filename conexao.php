<?php

 $dsn = 'mysql:host=localhost;dbname=transporte';
 $user = 'root';
 $pass = '';

 try {

   $pdo = new PDO($dsn, $user, $pass);

 } catch (PDOException $e) {
   echo 'Erro: '.$e->getMessage();
 }




//  $servidor =  "localhost";
//  $usuario =  "root";
//  $senha =  "";
//  $dbnome =  "teste";

  //Criar Conexão
//  $conn = mysqli_connect($servidor, $usuario, $senha, $dbnome);

 ?>

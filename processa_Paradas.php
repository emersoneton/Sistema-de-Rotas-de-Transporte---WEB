<?php
session_start();

  //Incluir a conexão do BD
  include_once("conexao.php");

  //Receber dados da rotas
  //$arquivo = $_FILES['arquivo'];
  //var_dump($arquivo);
//  $arquivo_tmp = $_FILES['arquivo']['tmp_name'];

  //Ler todo arquivo para um array
//  $dados = file($arquivo_tmp);
  //var_dump($dados);

  $arquivo = file('Rotas/stops.txt');

  foreach ($arquivo as $linha) {
    echo $linha;

    $linha = trim($linha);
    $valor = explode(',', $linha);


  $SQL = "INSERT INTO stops (stop_id,stop_code,stop_name,stop_desc,
   stop_lat,stop_lon) VALUES (?,?,?,?,?,?);";

   $stmt = $pdo->prepare($SQL);

   $stmt->execute($valor);

  }

  $_SESSION['msg'] = "<p style='color: green;'>Inserido os dados com sucesso!</p>";
//  header("location: importacao.php");
 ?>

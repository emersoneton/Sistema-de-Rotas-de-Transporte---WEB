<?php
session_start();

  //Incluir a conexão do BD
  include_once("conexao.php");

  ini_set('memory_limit', '6000m');

$arquivo = file('Rotas/stop-times.txt');
  foreach ($arquivo as $linha) {
    echo $linha;

    $linha = trim($linha);
    $valor = explode(',', $linha);


  $SQL = "INSERT INTO stoptimes (trip_id,arrival_time,departure_time,stop_id,
   stop_sequence) VALUES (?,?,?,?,?);";
   $stmt = $pdo->prepare($SQL);

   $stmt->execute($valor);

  }

  $_SESSION['msg'] = "<p style='color: green;'>Inserido os dados com sucesso!</p>";
//  header("location: importacao.php");
echo $_SESSION['msg'];
 ?>

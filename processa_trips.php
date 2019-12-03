<?php
session_start();

  //Incluir a conexão do BD
  include_once("conexao.php");

  $arquivo = file('Rotas/trips.txt');
  foreach ($arquivo as $linha) {
    echo $linha;

    $linha = trim($linha);
    $valor = explode(',', $linha);


  $SQL = "INSERT INTO trips (route_id,service_id,trip_id,trip_headsign,
   trip_short_name,direction_id,block_id,shape_id,wheelchair_accessible,trip_time) VALUES (?,?,?,?,?,?,?,?,?,?);";

   $stmt = $pdo->prepare($SQL);

   $stmt->execute($valor);

  }

  $_SESSION['msg'] = "<p style='color: green;'>Inserido os dados com sucesso!</p>";
  header("location: importacao.php");
 ?>

<?php
session_start();

  //Incluir a conexão do BD
  include_once("conexao.php");

  //Receber dados da rotas
  //$arquivo = $_FILES['arquivo'];
  //var_dump($arquivo);
  $arquivo_tmp = $_FILES['arquivo']['tmp_name'];

  //Ler todo arquivo para um array
  $dados = file($arquivo_tmp);
  //var_dump($dados);

  foreach ($dados as $linha) {
    $linha = trim($linha);
    $valor = explode(',', $linha);
    //var_dump($valor);

    //Recebe os dados do arquivo em cada posição de Virgula(,)
  /*  $stop_id = $valor[0];
    $stop_code = $valor[1];
    $stop_name = $valor[2];
    $stop_desc = $valor[3];
    $stop_lat = $valor[4];
    $stop_lon = $valor[5]; */



    //faz a inserção no BD
  //  $result_usuario = "INSERT INTO usuarios (nome,dados,tipo,numero) VALUES ('$nome', '$dados', '$tipo', '$numero')";
    //Aplica os resultados recebidos no banco
  //  $resultado_usuarioParada = $pdo->query("INSERT INTO stops (stop_id,stop_code,stop_name,stop_desc,
  //  stop_lat,stop_lon) VALUES (
  //    '$stop_id', '$stop_code', '$stop_name', '$stop_desc', '$stop_lat', '$stop_lon')");

  $SQL = "INSERT INTO stoptimes (trip_id,arrival_time,departure_time,stop_id,
   stop_sequence) VALUES (?,?,?,?,?);";
   $stmt = $pdo->prepare($SQL);

   $stmt->execute($valor);

  }

  $_SESSION['msg'] = "<p style='color: green;'>Inserido os dados com sucesso!</p>";
//  header("location: importacao.php");
echo $_SESSION['msg'];
 ?>

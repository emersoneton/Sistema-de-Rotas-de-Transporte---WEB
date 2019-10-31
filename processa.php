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
  /*  $route_id = $valor[0];
    $agency_id = $valor[1];
    $route_short_name = $valor[2];
    $route_long_name = $valor[3];
    $route_desc = $valor[4];
    $route_type = $valor[5];
    $route_url = $valor[6];
    $route_color = $valor[7];
    $route_text_color = $valor[8]; */


    //faz a inserção no BD
  //  $result_usuario = "INSERT INTO usuarios (nome,dados,tipo,numero) VALUES ('$nome', '$dados', '$tipo', '$numero')";
    //Aplica os resultados recebidos no banco
  /*  $resultado_usuario = $pdo->query("INSERT INTO routes (route_id,agency_id,route_short_name,route_long_name,
    route_desc,route_type,route_url, route_color,route_text_color) VALUES (
      '$route_id', '$agency_id', '$route_short_name', '$route_long_name', '$route_desc', '$route_type',
      '$route_url', '$route_color', '$route_text_color')"); */

      $SQL = "INSERT INTO routes (route_id,agency_id,route_short_name,route_long_name,
      route_desc,route_type,route_url, route_color,route_text_color) VALUES (?,?,?,?,?,?,?,?,?);";

       $stmt = $pdo->prepare($SQL);

       $stmt->execute($valor);


  }

  $_SESSION['msg'] = "<p style='color: green;'>Inserido os dados com sucesso!</p>";
  header("location: importacao.php");
 ?>

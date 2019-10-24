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
    $nome = $valor[0];
    $dados = $valor[1];
    $tipo = $valor[2];
    $numero = $valor[3];

    //faz a inserção no BD
    $result_usuario = "INSERT INTO usuarios (nome,dados,tipo,numero) VALUES ('$nome', '$dados', '$tipo', '$numero')";
    //Aplica os resultados recebidos no banco
    $resultado_usuario = mysqli_query($conn, $result_usuario);

  }

  $_SESSION['msg'] = "<p style='color: green;'>Inserido os dados com sucesso!</p>";
  header("location: importacao.php");
 ?>

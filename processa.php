<?php

  include_once("conexao.php");

$arquivo = file('Rotas/routes.txt');

foreach ($arquivo as $linha) {
   echo $linha;




    $linha = trim($linha);
    $valor = explode(',', $linha);
    //var_dump($valor);



      $SQL = "INSERT INTO routes (route_id,agency_id,route_short_name,route_long_name,
      route_desc,route_type,route_url, route_color,route_text_color) VALUES (?,?,?,?,?,?,?,?,?);";

       $stmt = $pdo->prepare($SQL);

       $stmt->execute($valor);

}


//  $_SESSION['msg'] = "<p style='color: green;'>Inserido os dados com sucesso!</p>";
//  header("location: importacao.php");

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    //Incluir a conexão do BD
    include_once("conexao.php");

    $sql = "SELECT * FROM usuario";

    $result = $pdo->query($sql);
    while ($row = $result->fetch()) {

    //    echo "matricula: ".$row['email']." - Nome:".$row['senha']."\n";

        $email = $row['email'];
        $senha = $row['senha'];

        $_POST['consultas'] = $email;

        echo $_POST['consultas'];

      }
  //   header("location: index.html");
     ?>
  </body>
</html>

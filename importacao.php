<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Importa TXT</title>
  </head>
  <body>
    <h1>Importar dados do arquivos de rotas</h1>

    <?php

      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }

     ?>

    <form class="" action="processa.php" method="post" enctype="multipart/form-data">
      <label for="">Arquivo</label>
      <input type="file" name="arquivo" value=""><br><br>

      <input type="submit" name="" value="Importar">
    </form>
  </body>
</html>

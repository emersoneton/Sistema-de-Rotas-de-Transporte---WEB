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

    <!-- IMPORTAR ROTAS -->
    <h1>Importar dados do arquivo de "ROTAS"</h1>

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
    <br><br>








      <!-- IMPORTAR STOPS -->
    <h1>Importar dados do arquivo de "PARADAS"</h1>

    <?php

      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }

     ?>

    <form class="" action="processa_Paradas.php" method="post" enctype="multipart/form-data">
      <label for="">Arquivo</label>
      <input type="file" name="arquivo" value=""><br><br>

      <input type="submit" name="" value="Importar">
    </form>










      <!-- IMPORTAR TRIPS -->
    <br><br>
    <h1>Importar dados do arquivo de "VIAGENS"</h1>

    <?php

      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }

     ?>

    <form class="" action="processa_trips.php" method="post" enctype="multipart/form-data">
      <label for="">Arquivo</label>
      <input type="file" name="arquivo" value=""><br><br>

      <input type="submit" name="" value="Importar">
    </form>










      <!-- IMPORTAR STOP_TIMES -->
      <br><br>
      <h1>Importar dados do arquivo de "TEMPO DE PARADAS"</h1>

      <?php

        if (isset($_SESSION['msg'])) {
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }

       ?>

      <form class="" action="processa_stop_times.php" method="post" enctype="multipart/form-data">
        <label for="">Arquivo</label>
        <input type="file" name="arquivo" value=""><br><br>

        <input type="submit" name="" value="Importar">
      </form>




    <br><br>

    <form class="" action="index0.php" method="post">
      <input type="submit" name="" value="VOLTAR">
    </form>
  </body>
</html>

<?php

  session_start();
  if (isset($_SESSION['email']) != ($_SESSION['senha'])) {
    header("Location: login.php");
  }

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Transporte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="consulta.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <form class="" action="login.php" method="post">
            <li class="nav-item active">
              <button type="submit" class="btn btn-secondary btn-sm">
                LOGIN
              </button>
            </li>
          </form>
          <form class="" action="importacao.php" method="post">
            <li class="nav-item">
              <button type="submit" class="btn btn-secondary btn-sm">
                IMPORTAÇÃO
              </button>
            </li>
            </form>
            <form class="" action="" method="get">
              <li class="nav-item">
                <button type="submit" name="sair" class="btn btn-secondary btn-sm">
                  SAIR
                </button>
              </li>
            </form>
        </ul>
      </div>
    </nav>
  <br><br><br>

<div class="container">

  <div class="row">
    <div class="col-sm-3">
      <div class="card">
        <div class="card-body">
          <form class=""  action=""  method="get">
            <div class="input-group mb-1">
              <input type="text" required name="busca" class="form-control" id="onibus" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="1213">Pesquisar</button>
              </div>
            </div>
          </form>
          <br>
          <div class="input-group mb-1">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">pesq</button>
            </div>
          </div>
          <br>
          <div class="input-group mb-1">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">

        <!--  <input type="text" name="" value="<?php if(isset($_GET["busca"])){ echo $_GET['busca']; }?>"> -->
          <div>
            <?php

              if(isset($_GET["busca"])){

                include_once("conexao.php");

                $sql = "SELECT * FROM usuario";

                $result = $pdo->query($sql);

                while ($row = $result->fetch()) {

                    $email = $row['email'];
                    $senha = $row['senha'];

                echo "EMAIL: ".$email."<br>";
                echo "SENHA: ".$senha."<br>";
                echo "<br>";
                }
            }


              if(isset($_GET["sair"])){
                  session_destroy();
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
<!-- Scripts do bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
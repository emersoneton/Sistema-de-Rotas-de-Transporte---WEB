<?php
  session_start();
  if (isset($_SESSION['email']) != ($_SESSION['senha'])) {
    session_destroy();
    header("Location: login.php");
  }
  if (isset($_SESSION['email']) == null) {
    session_destroy();
    header("Location: login.php");
  }
  if(isset($_SESSION['senha']) == null){
      session_destroy();
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



    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li>
          <a class="navbar-brand" href="#Passagens">Passagens</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#empresas">Empresas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#atendimento">Suporte</a>
      </li>
      <button id="btnGroupDrop1" type="button" style="color: white" class=" dropdown-toggle btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SAIR
      </button>
      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <form class="" action="" method="get">
          <li class="nav-item">
            <button type="submit" name="EXIT" class="btn btn-link">
              SAIR
            </button>
          </li>
        </form>
        <form class="" action="" method="get">
          <li class="nav-item">
            <button type="submit" name="logof" class="btn btn-link">
              LOGOF
            </button>
          </li>
        </form>

  </div>
  </ul>
  </nav>

    <div class="">
      <?php

      if(isset($_GET["EXIT"])){
        session_destroy();
        header('Location: index.html');
      }
      if(isset($_GET["logof"])){
          session_destroy();
          header("Location: login.php");
      }

       ?>
    </div>

    
    <div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">

    <div class="container col-md-8 order-md-4">
    <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <form class=""  action=""  method="get">
            <div class="input-group mb-1">
              <input type="text" required name="busca" class="form-control" id="onibus" placeholder="Informações do Onibus" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="1213">Pesquisar</button>
              </div>
            </div>
          </form>
          <br>
          <form class="" action="" method="get">
            <div class="input-group mb-1">
              <input type="text" class="form-control" required name="busca_paradas" placeholder="Nome da Parada" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Pesquisar</button>
              </div>
            </div>
          </form>
          <br>
          <form class=""  action=""  method="get">
            <div class="input-group mb-1">
              <input type="text" required name="busca_onibus" class="form-control" id="onibus" placeholder="Trajeto do Onibus" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="1213">Pesquisar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <div>
            <?php

            include_once("conexao.php");

              if(isset($_GET["busca"])){

                $busca = $_GET["busca"];

                $sql = "SELECT * FROM `routes` where route_long_name LIKE'%$busca%'";

                $result = $pdo->query($sql);

                while ($row = $result->fetch()) {

                    $nome = $row['route_long_name'];
                    $numero = $row['route_id'];

                echo "Onibus: ".$nome."<br>";
                echo "Número do Onibus: ".$numero."<br>";
                echo "<br>";
                }
            }


            if(isset($_GET["busca_paradas"])){

              $busca_paradas = $_GET["busca_paradas"];

              $sql = "SELECT * FROM `stops` where stop_name LIKE'%$busca_paradas%'";

              $result = $pdo->query($sql);

              while ($row = $result->fetch()) {

                  $id = $row['stop_id'];
                  $nome = $row['stop_name'];
                  $latitude = $row['stop_lat'];
                  $longitude = $row['stop_lon'];

              echo "ID: ".$id."<br>";
              echo "Parada do Onibus: ".$nome."<br>";
              echo "Parada Latitude: ".$latitude."<br>";
              echo "Parada Longitude: ".$longitude."<br>";
              echo "<br>";
              }
          }


          if(isset($_GET["busca_onibus"])){

                  $busca_onibus = $_GET["busca_onibus"];

                  $sql = "SELECT distinct route_short_name,route_long_name, stop_name,stop_lon,stop_lat from routes r
                            inner JOIN trips t on r.route_id = t.route_id
                            inner join stoptimes st on st.trip_id = t.trip_id
                            inner JOIN stops s on s.stop_id = st.stop_id
                            where r.route_id LIKE '$busca_onibus'
                            order by stop_name";

                  $result = $pdo->query($sql);

                  while ($row = $result->fetch()) {

                      $id = $row['route_short_name'];
                      $nome = $row['route_long_name'];
                      $stopnome = $row['stop_name'];
                      $latitude = $row['stop_lat'];
                      $longitude = $row['stop_lon'];

                  echo "Abreviatura do Onibus: ".$id."<br>";
                  echo "Nome do Onibus: ".$nome."<br>";
                  echo "Nome da Parada: ".$stopnome."<br>";
                  echo "Parada Latitude: ".$latitude."<br>";
                  echo "Parada Longitude: ".$longitude."<br>";
                  echo "<br>";
                  }
              }

            ?>
          </div>
        </div>
      </div>
    </div>
    </div>


    </div>


    </div>
    </div>








  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Imagens\Prefeitura.jpg" class="d-block w-100" width="200" height="500">
          <div class="carousel-caption d-none d-md-block">
            <h3>VERGONHA</h3>
            <p><b>Prefeitura de Viamão faz promessas de arrumar as ruas e a 10 anos não cumpriu com o acordado</b></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Imagens\OnibusPelotas.jpg" class="d-block w-100" width="200" height="500">
          <div class="carousel-caption d-none d-md-block">
            <h3>Baixa de Preços</h3>
            <p><b>Onibus de Pelotas tem baixas de tarifas a partir do dia 15 de Novembro</b></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <br>



















  <div class="media container">
  <img src="Imagens\AumentodePreço.jpg" class="mr-3" width="80" height="80">
  <div class="media-body">
    <h5 class="mt-0">Aumento de Diesel</h5>
      Conforme o aumento experado pela tabela de Preço pauta de Novembro, alguns locais terão o aumento da tarifa de Onibus!
    <div class="media mt-5">
      <a class="mr-3">
        <img src="Imagens\buracos.png" class="mr-3" width="80" height="80">
      </a>
      <div class="media-body">
        <h5 class="mt-0">Promeças não Cumpridas</h5>
          Prefeitura promete tapar buracos desde Janeiro em Guaiba mas até agora eles só tem aumentado!
      </div>
    </div>
  </div>
  </div>
  </div>

  <br><br>

  <div class="row container-fluid">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="Passagens" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Onibus</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Lotação</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <br>
          <div class="row">
              <div class="col-lg-2 border border-dark cor_tabela">
                VALOR
              </div>
              <div class="col-lg-2 border border-dark cor_tabela">
                DATA
              </div>
              <div class="col-lg-4 border border-dark cor_tabela">
                LOCALIZAÇÃO
              </div>
          </div>

          <div class="row">
            <div class="col-lg-2 border border-dark">
            R$ 3,70
            </div>
            <div class="col-lg-2 border border-dark">
              01/01/2020
            </div>
            <div class="col-lg-4 border border-dark">
              Porto Alegre - Porto Alegre
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2 border border-dark">
            R$ 3,80
            </div>
            <div class="col-lg-2 border border-dark">
              01/01/2020
            </div>
            <div class="col-lg-4 border border-dark">
              Alvorada - Porto Alegre
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2 border border-dark">
            R$ 4,15
            </div>
            <div class="col-lg-2 border border-dark">
              01/01/2020
            </div>
            <div class="col-lg-4 border border-dark">
              Viamão - Porto Alegre
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2 border border-dark">
            R$ 57,30
            </div>
            <div class="col-lg-2 border border-dark">
              01/01/2020
            </div>
            <div class="col-lg-4 border border-dark">
              Porto Alegre - Litoral
            </div>
          </div>

          <br><br><br>
        </div>

      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <br>
          <div class="row">
              <div class="col-lg-2 border border-dark cor_tabela">
                VALOR
              </div>
              <div class="col-lg-2 border border-dark cor_tabela">
                DATA
              </div>
              <div class="col-lg-4 border border-dark cor_tabela">
                LOCALIZAÇÃO
              </div>
          </div>

          <div class="row">
            <div class="col-lg-2 border border-dark">
              R$ 4,70
            </div>
            <div class="col-lg-2 border border-dark">
              01/01/2020
            </div>
            <div class="col-lg-4 border border-dark">
              Porto Alegre - Porto Alegre
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2 border border-dark">
              R$ 5,20
            </div>
            <div class="col-lg-2 border border-dark">
              01/01/2020
            </div>
            <div class="col-lg-4 border border-dark">
              Alvorada - Porto Alegre
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2 border border-dark">
              R$ 8,90
            </div>
            <div class="col-lg-2 border border-dark">
              01/01/2020
            </div>
            <div class="col-lg-4 border border-dark">
              Viamão - Porto Alegre
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2 border border-dark">
              R$ 97,50
            </div>
            <div class="col-lg-2 border border-dark">
              01/01/2020
            </div>
            <div class="col-lg-4 border border-dark">
              Porto Alegre - Litoral
            </div>
          </div>

          <br><br><br>
      </div>
    </div>
  </div>
  </div>



<br><br><br><br><br><br>










    <br><br><br><br><br><br>

    <div class="container">
      <h2 id="empresas">Empresas Prestadores de Serviço</h2>
      <hr/>
      <div class="row">
        <img src="Imagens/carris.jpg" class="rounded float-left width="80" height="80"" alt="...">
        <img src="Imagens/soul.png" class="rounded mx-auto d-block width="100" height="100"" alt="...">
        <img src="Imagens/citral.png" class="rounded float-right width="60" height="60"" alt="...">
      </div>
      <br>
      <div class="row">
        <img src="Imagens/central.jpg" class="rounded float-left width="100" height="100"" alt="...">
        <img src="Imagens/turis.jpg" class="rounded mx-auto d-block width="60" height="60"" alt="...">
        <img src="Imagens/palmares.png" class="rounded float-right width="40" height="40"" alt="...">
        <br><br><br><br><br><br><br><br><br>
      </div>
    </div>


    <div class="container">
      <h2 id="atendimento">Atendimento</h2>
      <hr/>
      <div class="">
        <h5 style="text-align: left;">Suporte: (51) 3365-1137</h5>
          <h5 style="text-align: center;">Duvidas: (51) 3365-1138</h5>
            <h5 style="text-align: right;">Reclamações: (51) 3365-1139</h5>
              <br>
      </div>
    </div>















<!-- Scripts do bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Cadastro de Usuario</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/Transporte/layout.css">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>Cadastro</h2>
  </div>
  <div class="card-header">
    <u title="PREENCHA TODOS OS CAMPOS ASTERISCADOS ANTES DE SALVAR!">Campos com <b>*</b> são Obrigatórios</u>
  </div>

  <div class="row">

    <div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate method="post" action="Cadastra_Usuario.php">
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control" id="firstName" name="nome" placeholder="* Nome" value="" required>
            <div class="invalid-feedback">
              Informe o Nome Completo
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-8 mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="* Email" required>
            <div class="invalid-feedback">
              Informe o Email
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="address">Senha</label>
            <input type="text" class="form-control" id="address" name="senha" placeholder="* Senha" required>
            <div class="invalid-feedback">
              Informe a Senha
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-7 mb-3">
            <label for="lastName">Endereço</label>
            <input type="text" class="form-control" id="lastName" name="endereco" placeholder="* Endereço" value="" required>
            <div class="invalid-feedback">
              Informe o Endereço
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="lastName">Numero</label>
            <input type="text" class="form-control" id="lastName" name="numero" placeholder="* Numero" value="" required>
            <div class="invalid-feedback">
              Informe o Numero
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="firstName">CEP</label>
            <input type="text" class="form-control" id="firstName" name="cep" placeholder="* CEP" value="" required>
            <div class="invalid-feedback">
              Informe o CEP
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="lastName">CPF</label>
            <input type="text" class="form-control" id="lastName" name="cpf" placeholder="* CPF" value="" required>
            <div class="invalid-feedback">
              Infome o CPF
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="lastName">RG</label>
            <input type="text" class="form-control" id="lastName" name="rg" placeholder="* RG" value="" required>
            <div class="invalid-feedback">
              Informe o RG
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="country">Cidade</label>
            <select class="custom-select d-block w-100" id="country" name="cidade" required>
              <option value="">Informe a Cidade...</option>
              <option>Alvorada</option>
              <option>Canoas</option>
              <option>Cachoerinha</option>
              <option>Guaiba</option>
              <option>Gravatai</option>
              <option>Viamão</option>
              <option>Porto Alegre</option>
            </select>
            <div class="invalid-feedback">
              Selecione a Cidade.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" name="estado" id="state" required>
              <option value="">Estado...</option>
              <option>RS</option>
              <option>SP</option>
              <option>RJ</option>
              <option>BH</option>
              <option>MG</option>
            </select>
            <div class="invalid-feedback">
              Selecione o Estado.
            </div>
          </div>
        </div>

        <div class="card-header">
          <button class="btn btn-primary btn-lg btn-block" type="submit">SALVAR</button>
        </div>
      </form>
    </div>
  </div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro dee Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/Transporte/layout.css">
  </head>
  <body>

    <br><br>

      <div class="cor">
        <h2>CADASTRO</h2>
      </div>
  <form class="" action="Cadastra_Usuario.php" method="post">
      <div class="card text-center">
  <div class="card-header">
    <u>Campos com <b>*</b> são Obrigatórios</u>
  </div>
  <div class="card-body">
    <form>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="* Email">
      </div>
      <div class="form-group col-md-4">
        <label for="inputPassword4">Senha</label>
        <input type="password" class="form-control" name="senha" id="inputPassword4" placeholder="* Password">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputPassword4">RG</label>
        <input type="password" class="form-control" name="rg" id="inputPassword4" placeholder="* RG">
      </div>
      <div class="form-group col-md-3">
        <label for="inputPassword4">CPF</label>
        <input type="password" class="form-control" name="cpf" id="inputPassword4" placeholder="* CPF">
      </div>
      <div class="form-group col-md-2">
        <label for="inputPassword4">CEP</label>
        <input type="password" class="form-control" name="cep" id="inputPassword4" placeholder="* CEP">
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-7">
      <label for="inputAddress">Endereço</label>
      <input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="* Endereço">
    </div>
    <div class="form-group col-md-1">
      <label for="inputEmail4">Numero</label>
      <input type="email" class="form-control" id="inputEmail4" name="numero" placeholder="* Numero">
    </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Estado</label>
        <select id="inputState" class="form-control" name="estado">
          <option selected>Selecione o Estado...</option>
          <option>RS</option>
          <option>SP</option>
          <option>SC</option>
          <option>RJ</option>
          <option>GO</option>
        </select>
      </div>
    </div>
    <div class="form-group">
    </div>

  </form>
  </div>
  <div class="card-footer text-muted cor2">

      <button type="submit" class="btn btn-primary">Cadastrar</button>

  </div>
</div>
</form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

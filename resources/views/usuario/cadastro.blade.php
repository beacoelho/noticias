<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
  <div class="container">
    <form>
      <br>
      <h4>Cadastro de Usuários</h4>
      <div class="form-row pt-5">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nome</label>
            <input type="email" class="form-control" id="nome" placeholder="Informe seu nome completo">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Cpf</label>
            <input type="cpf" class="form-control" id="cpf" placeholder="Informe seu Cpf">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">E-mail</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Informe seu e-mail">
          </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Senha</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Informe sua senha">
        </div>
      </div> 
      <button type="submit" class="btn btn-success">Cadastrar</button>
  </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
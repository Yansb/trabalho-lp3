<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> MYB-Cadastro Técnico </title>

  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/MYB.css">
  <?php
  require_once '../Model/class.php';
  require_once '../Model/classUsuarios.php';
  $Setor = new Setor();
  $Tecnico = new Tecnico(); 
  ?>
</head>

<body>
  <!-- um form pra todos ou forms individuais?!-->
  <!-- LEMBRETE : link primeiro,img depois. -->


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">



    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="btn btn-info btn-lg">Menu</div>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="Chamados.php">Chamados</a>
            <a class="dropdown-item" href="cadastroSetor.php">Cadastro Setor</a>
            <a class="dropdown-item" href="#">Cadastro Técnico</a>
            <a class="dropdown-item" href="problemas.php">Cadastro Problemas</a>
            <a class="dropdown-item" href="relatorios.php">Relatórios</a>
            <a class="dropdown-item" href="ListaTec.php">Administrador</a>
          </div>
        </li>
        <li>



        </li>
      </ul>
    </div>
    <div>
      <a href="login.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-log-out"></span> Logout
      </a>
    </div>
  </nav>
  <br>
  <div class="formTecnico">

    <form method="POST" action="../Controller/ControladorTecnico.php" class="needs-validation">
      <h2>Cadastro Técnico </h2>
      <br>
      <div class="form-row">
        <div class="col-md-30">
          <p>

            <p>Selecione o Cargo</p>
            <select class="custom-select custom-select-lg mb-3" name="Cargo" required>
              <option value="Tecnico">Técnico</option>
              <option value="Gerente">Gerente</option>
              <option value="Admin">Administrador</option>
            </select>
          </p>
          <p>
            CPF<input class="form-control" id="CPF" type="text" name="CPF" size="20px" maxlength="9">
          </p>

          <p>
            Nome<input class="form-control" id="Nome" type="text" name="Nome" size="20px" maxlength="100">
          </p>
          <p>
            Login<input class="form-control" id="Login" type="text" name="Login" size="20px" maxlength="9">
          </p>
          <p>
            Email<input class="form-control" id="Email" type="email" name="Email" size="20px" maxlength="50">
          </p>

          <p>
            Telefone<input class="form-control" id="Telefone" type="tel" name="Telefone" size="30px" maxlength="11">
          </p>


          <p>Setor</p>
          <?php
          $Setor->Select();
          ?>
          <p>
            Senha<input class="form-control" id="Senha" type="password" name="Senha" size="20px" maxlength="9">
          </p>
          <input type="hidden" id="Acao" name="Acao" value="Adicionar">
          <div class="botoes">
            <p>
              <a><button class="btn btn-info" >Cadastrar</button></a>
            </p>

          </div>


        </div>
      </div>

    </form>

    <form method="POST" action="../Controller/ControladorTecnico.php" class="needs-validation">
      <div class="form-row">
        <div class="col-md-30">
          <h3>Remover Tecnico</h3>
          <p>
            Tecnico:
            <?php
              $Tecnico->Select(); 
            ?>
          </p>
          <input type="hidden" id="Acao" name="Acao" value="Remover">

          <div class="botoes">
            <button class="btn btn-info">Remover</button>
          </div>


        </div>
      </div>
    </form>

    <div>
      <form method="POST" action="../Controller/ControladorTecnico.php" class="needs-validation">
        <h3>Alterar Tecnico </h3>
        <p>
          Técnico:
          <?php
              $Tecnico->Select(); 
            ?>
        </p>

        <p>
          Gostaria de alterar ?:
          <p>
            <select class="custom-select custom-select-lg mb-3" name="alterar" id="">
              <option value="">Nome</option>
              <option value="">Telefone</option>
              <option value="">Email</option>
              <option value="">Cargo</option>
              <option value="">Login</option>
              <option value="">Senha</option>
            </select>
          </p>

        </p>
        <p>
          Novo Campo<input class="form-control" value="" type="text" id="" name="Nome" size="25px" maxlength="100">
        </p>
        <input type="hidden" id="Acao" name="Acao" value="Alterar">
        <div class="botoes">
          <button class="btn btn-info">Alterar</button>
        </div>

      </form>
    </div>
  </div>












  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    crossorigin = "anonymous" >
  </script>
</body>

<footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="js/validacao.js"></script>
</footer>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> MYB-Cadastro do Setor </title>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/MYB.css">

</head>


<body>

  <!-- LEMBRETE : link primeiro,img depois. -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <div class="btn btn-info btn-lg">Menu</div>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="Chamados.php">Chamados</a>
            <a class="dropdown-item" href="#">Cadastro Setor</a>
            <a class="dropdown-item" href="CadastroTecnico.php">Cadastro Técnico</a>
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


  <div class="formArea" style=" height: auto;">
    <form id="box" method="POST" action="../Controller/ControladorSetor.php">
      <h3>Cadastro Setor </h3>
      <div class="form-row">
        <div class="col-md-30">
          <br>
          
          <p>
            Nome do Setor<input class="form-control" value="" type="text" id="NomeSetor" name="Nome" size="25px"
              maxlength="100"> </p>
          <p>
            Telefone<input class="form-control" value=""  type="text" id="Telefone" name="Telefone" size="25px" maxlength="100">
          </p>
          <p>
            Email<input class="form-control" value="" type="email" id="Email" name="Email" size="25px" maxlength="100">
          </p>
          <input type="hidden" id="Acao" name="Acao" value="Adicionar">
          <div class="botoes">
              <button class="btn btn-info" type="submit" name="validar"  onclick="return valida();"> Cadastrar</button>
              
            </div>
        </div>
      </div>
     
      <br>
    </form>
    <form id="box" method="POST" action="../Controller/ControladorSetor.php">
      <h3>Remover Setor</h3>
      <p>
        Setor: 
        <select class="custom-select custom-select-lg mb-3" name="problemas" id="">
          <option value="">problemacadastrado1</option>
          <option value="">problemacadastrado2</option>
          <option value="">problemacadastrado3</option>
        </select>

      </p>
      
      <input type="hidden" id="Acao" name="Acao" value="Remover">
      <p>
        <div class="botoes">
            <button class="btn btn-info">Remover</button>
        </div>
     </p>
      
      
    </form>

    <form id="box" method="POST" action="../Controller/ControladorSetor.php">
          <h3>Alterar Setor</h3>
          <p>
            Setor:
            <select class="custom-select custom-select-lg mb-3" name="alterar" id="">
              <option value="">problemacadastrado1</option>
              <option value="">problemacadastrado2</option>
              <option value="">problemacadastrado3</option>
            </select>
          </p>
          
          <p>
            Gostaria de alterar ?:
            <select class="custom-select custom-select-lg mb-3" name="alterar" id="">
              <option value="">Nome</option>
              <option value="">Telefone</option>
              <option value="">Email</option>
            </select>
          </p>
          <p>
            Novo Campo:<input class="form-control" value="" type="text" id="" name="Nome" size="25px" maxlength="100">
          </p>
          <input type="hidden" id="Acao" name="Acao" value="Alterar">
          <div class="botoes">
              <button class="btn btn-info">Alterar</button>
          </div>
    </form>
        
  </div>

  




</body>


<footer>
      

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
      <script src="js/validacao.js"></script>
  </footer>


</html>
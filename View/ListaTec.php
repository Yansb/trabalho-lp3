<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MYB-ADM</title>
 
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/MYB.css">

</head>

<body>
  <!--Só ADM tem acesso a esta tela!-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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
            <a class="dropdown-item" href="cadastroSetor.php">Cadastro Setor</a>
            <a class="dropdown-item" href="CadastroTecnico.php">Cadastro Técnico</a>
            <a class="dropdown-item" href="problemas.php">Cadastro Problemas</a>
            <a class="dropdown-item" href="relatorios.php">Relatórios</a>
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

  <br> <br>





  <div class="ajusteTable" style="   width: 50%; left: 27%;">
    <section class="chamados">
      <h1 style="color:rgb(41, 33, 24)">Tabela de Perfis </h1>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Login</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Delete</th>
            <th>Cadastrar</th>
          </tr>
        </thead>
        <tr>
          <th>078245685</th>
          <th>Carlos Almeida</th>
          <th>Técnico da Acadêmica</th>
          <th> <button class="btn btn-info" type="submit" name="validar"> Excluir</button></th>
          <th> <a href="CadastroTecnico.php"> <button class="btn btn-info" type="submit" name="validar"> ADD</button></th></a>

        </tr>
        <tr>
          <th>078245621</th>
          <th>Matheus souza</th>
          <th>Técnico de Informática</th>
          <th> <button class="btn btn-info" type="submit" name="validar"> Excluir</button></th>
          <th> <a href="CadastroTecnico.php"> <button class="btn btn-info" type="submit" name="validar"> ADD</button></th></a>
        </tr>
        <tr>
          <th>078245222</th>
          <th>Yan Barreiro</th>
          <th>Coordenador</th>
          <th> <button class="btn btn-info" type="submit" name="validar"> Excluir</button></th>
          <th> <a href="CadastroTecnico.php"> <button class="btn btn-info" type="submit" name="validar"> ADD</button></th></a>
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        </thead>
        <tbody></tbody>
      </table>
    </section>

  </div>

  <div class="ajusteTable" style="  margin-top: 30%; width: 50%; left: 27%;">
    <section class="chamados">
      <h1 style="color:rgb(41, 33, 24)">Tabela de Setores </h1>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Código</th>
            <th>Setor</th>
            <th>Email</th>
            <th>Ramal</th>
            <th>Delete</th>
            <th>Cadastrar</th>
          </tr>
        </thead>
        <tr>
          <th>15</th>
          <th>Financeiro</th>
          <th>Exemple</th>
          <th>Exemple</th>
          <th> <button class="btn btn-info" type="submit" name="validar"> Excluir</button></th>
          <th> <a href="cadastroSetor.php"> <button class="btn btn-info" type="submit" name="validar"> ADD</button></th></a>

        </tr>
        <tr>
          <th>16</th>
          <th>Acadêmico</th>
          <th>Exemple</th>
          <th>Exemple</th>
          <th> <button class="btn btn-info" type="submit" name="validar"> Excluir</button></th>
          <th> <a href="cadastroSetor.php"> <button class="btn btn-info" type="submit" name="validar"> ADD</button></th></a>

        </tr>
        <tr>
          <th>17</th>
          <th>Comunicação</th>
          <th>Exemple</th>
          <th>Exemple</th>
          <th> <button class="btn btn-info" type="submit" name="validar"> Excluir</button></th>
          <th> <a href="cadastroSetor.php"> <button class="btn btn-info" type="submit" name="validar"> ADD</button></th></a> 
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        </thead>
        <tbody></tbody>
      </table>
    </section>

  </div>


  <div class="ajusteTable" style="  margin-top: 60%; margin-bottom: 35%">
    <section class="chamados">
      <h1 style="color:rgb(41, 33, 24)">Tabela de Problemas </h1>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Delete</th>
            <th>Cadastrar</th>
          </tr>
        </thead>
        <tr>
          <th>07</th>
          <th>Exemple</th>
          <th> <button class="btn btn-info" type="submit" name="validar">Excluir</button></th>
          <th> <a href="problemas.php"> <button class="btn btn-info" type="submit" name="validar"> ADD</button></th></a> 

        </tr>
        <tr>
          <th>08</th>
          <th>Exemple</th>
          <th> <button class="btn btn-info" type="submit" name="validar"> Excluir</button></th>
          <th> <a href="problemas.php"> <button class="btn btn-info" type="submit" name="validar"> ADD</button></th></a> >
        </tr>
        <tr>
          <th>02</th>
          <th>Exemple</th>

          <th> <button class="btn btn-info" type="submit" name="validar"> Excluir</button></th>
          <th> <a href="problemas.php"> <button class="btn btn-info" type="submit" name="validar"> ADD</button></th></a> 
        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        </thead>
        <tbody></tbody>
      </table>
    </section>

  </div>





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

  </footer>

</body>

</html>
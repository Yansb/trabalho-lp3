<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/MYB.css">

  <title>MYB-Consulta</title>
  <?php 
      include_once "../Model/ClasseChamados.php";
      include_once "../Model/ClassUsuarios.php";
   ?>

</head>

<body>
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
            <a class="dropdown-item" href="index.php">Voltar</a>
          </div>
        </li>

      </ul>
    </div>
    <div>
      <a href="index.php" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-log-out"></span> Logout
      </a>
    </div>
  </nav>
  <br>

  <div class="pesquisa id=">

    <form action="../Controller/ControladorChamados.php" method="POST">
        <!--Javascript aqui para quando eu selecionar um tipo de consulta, preencher a especificação dela -->



        <div class="divEsquerda">
            <p>
                <p>Pesquisar por:</p>
                <select class="custom-select custom-select-lg mb-3" id="ids" onchange="mostraOculta('ids');" >
                    
                    <option value="Numero">Numero do Chamado</option>
                    <option value="Setor">Setor</option>
                    <option value=""></option>

                </select>
            </p>
        </div>


        <div class="divDireita" id="Numero" style="display:none;">
            <p>Digite o Numero</p> <input class="form-control" type="number" name="Numero"  />
        </div>

        <div class="divDireita" id="Periodo" style="display:none;">
            <p> Inicia em:</p><input class="form-control" type="date" name="inicio" >
            <p>Termina em:</p><input class="form-control" type="date" name="fim" >
        </div>

        <div  class="divDireita" id="Setor" style="display:none;">
            <p>Selecione o Setor</p>
                <select class="custom-select custom-select-lg mb-3" name="area" >

                    <option value="rh">Recusos Humanos </option>
                    <option value="ti">Tecnologia da Informação</option>
                    <option value="comunicacao">Comunicação</option>
                    <option value=">administrativo">Administrativo</option>
                    <option value=">">Financeiro</option>
                    <option value=">">Acadêmico</option>
                    <option value=">"></option>

                </select>
        </div>
        <div class="divDireita" id="Qtdias" style="display:none;">
            <p>Quantos dias?</p><input class="form-control" type="number" name="Numero"  />
        </div>


        <div class="divBotao">
            <input class="btn btn-info" type="submit" value="Pesquisar">
        </div>



    </form>

</div>

  <br><br><br><br>
 
        
<?php     session_start();
  ?> 
  <div>

    <div class="chamados">
      <h1 style="color:rgb(41, 33, 24)">Chamados: <?php echo $_SESSION["Usuario"]->getNome(); ?> </h1>
      <section>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Numero chamado</th>
              <th scope="col">Descrição</th>
              <th scope="col">Atendente</th>
              <th scope="col">Setor</th>
              <th scope="col">Situação</th>
              <th scope="col">Prioridade</th>
              <th scope="col">Abertura</th>
              <th scope="col">Quantidade de dias </th>

            </tr>
          </thead>
          <?php
            $Chamado = new Chamado();
           $Resultado = $Chamado->BuscarUsuario($_SESSION["Usuario"]); 
           $quant = Count($Resultado); 
           for($i=0;$i<$quant;$i++){ 
       
               echo "<tr>"; 
               echo "<td scope='row'><a href='../Controller/ControladorChamados.php?Numero=".$Resultado[$i][0]."&Acao=Busca'>".$Resultado[$i][0]."</a></td>";
               echo "<td><a href='../Controller/ControladorChamados.php?Numero=".$Resultado[$i][0]."&Acao=Busca'>".$Resultado[$i][1]." </a></td>"; 
               echo"<td>".$Resultado[$i][2]."</td>";
               echo"<td>".$Resultado[$i][4]."</td>";  
               echo"<td class='bg-danger'>".$Resultado[$i][5]."</td>"; 
               echo"<td>".$Resultado[$i][6]."</td>";  
               echo"<td>".$Resultado[$i][7]."</td>"; 
               echo"<td>tem que fazer</td>";  
              echo "</tr>"; 
     
   
           }
          ?>
          </tbody>
        </table>
      </section>

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
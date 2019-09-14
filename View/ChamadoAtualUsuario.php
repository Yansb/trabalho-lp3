<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>MYB-Chamado</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/MYB.css">
   <?php require_once "function.php";

    session_start();
    
    
    $Chamado = $_SESSION['Chamado'];
    $Usuario  =  $_SESSION['Usuario'];
    
    

    ?>


  
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
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
                           <a class="dropdown-item" href="usuario.php">Chamados</a>
                         
                        </div>
                      </li>
                      <li>
                        
                   
                      
                      </li>
                    </ul>
                  </div>
      
        
        <div> 
            <a href="index.php" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-log-out"></span> Logout
            </a>
        </div>
    </nav>
    


<br><br><br>
  <h1 style="margin-top:0%" >MYB Chamado </h1>

<div class="chamado">
    <div style=" align-content: center; text-align: center;"> 
        <h2>Descrição do Chamado </h2>
    </div>
     
    <form method="POST" action="">
            
            <div class=" itens"> 
                <div class="arrumar"> 
                <p>Descrição <input class="form-control" type="text" name="defeito" size="25px" maxlength="100" value=" <?php echo $Chamado->getDescricao(); ?>" readonly="readonly"></p>
                        <p>Solicitante <input class="form-control" type="text" name="Nome" size="25px" maxlength="100" value=" <?php echo $Usuario->getNome(); ?>" readonly="readonly">
                        </p>
                        <p>Setor <input class="form-control" type="text" name="setor" size="25px" maxlength="100" value=" <?php echo $Chamado->getSetor(); ?>" readonly="readonly" ></p>
                        <p>
                            Prioridade
                            <input class="form-control" type="text" name="prioridade" size="0" value=" <?php echo $Chamado->getPrioridade(); ?>" readonly="readonly">
                        </p>

                        <p>Situação <input class="form-control" type="text" name="informe" size="25px" maxlength="100" value=" <?php echo $Chamado->getStatus(); ?>" readonly="readonly">
                        </p>

                        <p>Data de Abertura <input class="form-control" type="text" name="data" size="25px" maxlength="100" value=" <?php echo $Chamado->getDataHoraAbertura(); ?>" readonly="readonly"></p>
                        <p> Técnico Responsável <input class="form-control" type="text" name="data" size="25px" maxlength="100" value=" <?php echo $Chamado->getTecnico(); ?>" readonly="readonly"></p>
                        <p>
                            Observações <textarea name="OBS" rows="4" cols="50" size="50px" maxlength="99999"  readonly="readonly"><?php echo $Chamado->getOBS();?></textarea>
                        </p>

            </form>
            <div class="direita"> 

                <form action="" method="POST">

                <p>Número do chamado <input class="form-control" type="text" name="chamado" value=" <?php echo $Chamado->getNumero(); ?>" size="25px" maxlength="100" readonly="readonly"></p>
                    <p>Email <input class="form-control" type="email" name="email" size="25px" maxlength="100" value=" <?php echo $Usuario->getEmail(); ?>" readonly="readonly"></p>
                    <p>Telefone do cliente <input class="form-control" type="text" name="Telefone" size="25px" maxlength="100" value=" <?php echo $Usuario->getTelefone(); ?>" readonly="readonly"></p>
                    <p>Problema <input class="form-control" type="text" name="defeito" size="25px" maxlength="100" value=" <?php  echo $Chamado->getProblema(); ?>" readonly="readonly"></p>
                    <p> Data Fechamento <input class="form-control" type="text" name="defeito" size="25px" maxlength="100" value=" <?php echo $Chamado->getDataHoraFechamento(); ?>" readonly="readonly"></p>
                    <p><a class="form-control" href="imagem que vai estar no banco ">Ver imagem </a></p>   
                      
                </form>
            </div>
            

    <div class="esquerda">
        <div class="list-group" id="list-tab" role="tablist">
                
        <a class="list-group-item list-group-item-action" id="Cancelar"  href="../Controller/ControladorChamadoAtual.php?Acao=Cancelar&Numero=<?php echo $Chamado->getNumero(); ?>" role="tab" aria-controls="Atender">Cancelar Chamado</a>
                <a class="list-group-item list-group-item-action" id="Retornar"  href="usuario.php" role="tab" aria-controls="Retornar">Retornar</a>
 
        </div>

    </div>

    
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


<footer></footer>
</html>
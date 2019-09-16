<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!--Técnico só vê os chamados em aberto para aqueles da área dele-->

    <title>MYB-Chamados</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/MYB.css">
    <?php
    require_once "../Model/ClasseChamados.php";
    require_once "../Model/ClassUsuarios.php";
    require_once "function.php";
    session_start();
    ?>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-primary bg-Secondary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuPrimary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="btn btn-info btn-lg">Menu</div>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php Menu($_SESSION['Tecnico']->getCargo()); ?>
                    </div>
                </li>
            </ul>

           
        </div>




        <div class="collapse navbar-collapse" id="textoNavbar">
                <ul class="navbar-nav" >
                   
                    <span class="navbar-text">
                    <h5 class="text-white h4">Nome:  <?php echo  $_SESSION['Tecnico']->getNome() ?></h5>
                 
                    </span>
                    <span class="navbar-text">
                    <h5 class="text-white h4">Setor:  <?php echo $_SESSION['Tecnico']->getSetor() ?></h5>
                 
                    </span>
                </ul>
                <span class="navbar-text">
                <h5 class="text-white h4">Cargo:  <?php echo $_SESSION['Tecnico']->getCargo() ?></h5>
                </span>
            </div>



        <div>
            <a href="login.php" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-log-out"></span> Logout
            </a>
        </div>
    </nav>



    <div class="pesquisa id=">

        <form action="../Controller/ControladorChamados.php" method="post">
            <!--Javascript aqui para quando eu selecionar um tipo de consulta, preencher a especificação dela -->



            <div class="divEsquerda">
                <p>
                    <p>Pesquisar por:</p>
                    <select class="custom-select custom-select-lg mb-3" id="Pesquisar" name="Pesquisar" onchange="mostraOculta('Pesquisar');">

                        <?php selectPesquisa($_SESSION['Tecnico']->getCargo()); ?>

                    </select>
                </p>
            </div>

            <div class="divDireita" id="Numero" style="display:none;">
                <p>Digite o Numero</p> <input class="form-control" type="number" name="Numero" id="Numero" />
            </div>

            <div class="divDireita" id="Periodo" style="display:none;">
                <p> Inicia em:</p><input class="form-control" type="date" name="Inicio" id="Inicio" />
                <p>Termina em:</p><input class="form-control" type="date" name="Fim" id="Fim" />
            </div>

            <div class="divDireita" id="Problema" style="display:none;">
                <p> Qual Problema?</p>
                <?php Select("Problema"); ?>

            </div>
            <div class="divDireita" id="Solicitante" style="display:none;">
                <p>Digite o Nome</p><input class="form-control" type="text" name="Solicitante" />

            </div>
            <div class="divDireita" id="Estado" style="display:none;">
                <p>Qual?</p>
                <select class="custom-select custom-select-lg mb-3" id="Estado" name="Estado">
                    <option value=""></option>
                    <option value="Em Aberto">Em Aberto </option>
                    <option value="Em Atendimento">Em Atendimento</option>
                    <option value="FInalizado">Finalizado</option>

                </select>


            </div>
            <div class="divDireita" id="Prioridade" style="display:none;">
                <p>Qual?</p>
                <select class="custom-select custom-select-lg mb-3" name="Prioridade">
                    <option value=""></option>
                    <option value="Baixa">Baixa </option>
                    <option value="Normal">Normal</option>
                    <option value="Alta">Alta</option>
                    <option value="Muito Alta">Muito Altao</option>

                </select>

            </div>
            <div class="divDireita" id="Atendente" style="display:none;">
                <p>Selecione o Nome</p>

                <?php Select("Tecnico"); ?>

            </div>
            <div class="divDireita" id="Setor" style="display:none;">
                <p>Selecione o Setor</p>


                <?php Select("Setor"); ?>

            </div>
            <div class="divDireita" id="Qtdias" style="display:none;">
                <p>Quantos dias?</p><input class="form-control" type="number" name="Qtdias" />
            </div>

            <div class="divBotao">
                <input class="btn btn-info" type="submit" value="Pesquisar">
            </div>



        </form>

    </div>


    <br><br><br><br><br>
    <div class="chamados">
        <section>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Numero chamado</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Atendente</th>
                        <th scope="col">Solicitante</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Situação</th>
                        <th scope="col">Prioridade</th>
                        <th scope="col">Abertura</th>
                        <th scope="col">Quantidade de dias </th>

                    </tr>
                </thead>
                <?php

                $Resultado = $_SESSION['Chamado']->Pesquisar($_SESSION['Tipo']);
                $quant = Count($Resultado);

                for ($i = 0; $i < $quant; $i++) {
                    if ($Resultado[$i][5] === "Finalizado") {
                        $cor = 'bg-success';
                    } else {
                        if ($Resultado[$i][5] === "Em Atendimento") {
                            $cor = 'bg-warning';
                        } else {
                            $cor = 'bg-danger';
                        }
                    }

                    echo "<tr>";
                    echo "<td scope='row'><a href='../Controller/ControladorChamados.php?Numero=" . $Resultado[$i][0] . "&Pagina=2&Acao=Busca'>" . $Resultado[$i][0] . "</a></td>";
                    echo "<td><a href='../Controller/ControladorChamados.php?Numero=" . $Resultado[$i][0] . "&Pagina=2&Acao=Busca'>" . $Resultado[$i][1] . " </a></td>";
                    echo "<td>" . $Resultado[$i][2] . "</td>";
                    echo "<td>" . $Resultado[$i][3] . "</td>";
                    echo "<td>" . $Resultado[$i][4] . "</td>";
                    echo "<td class='" . $cor . "'>" . $Resultado[$i][5] . "</td>";
                    echo "<td>" . $Resultado[$i][6] . "</td>";
                    echo "<td>" . $Resultado[$i][7] . "</td>";
                    echo "<td>" . $Resultado[$i][8] . "</td>";
                    echo "</tr>";
                }
                /*0['numero']1['descricao']2['atendente']3['solicitante']4['setor']
                  5['situacao']6['prioridade']7['abertura']*/


                ?>

                </tbody>
            </table>
        </section>

    </div>


</body>

<footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/validacao.js"></script>




</footer>


</html>
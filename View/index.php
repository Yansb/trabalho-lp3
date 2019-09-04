<!DOCTYPE html>
<html lang="pt-br">

<head>
        <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->
        <title>MIB-CadastroPedidos</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/MYB.css">
        <?php
        require_once '../Model/class.php';
        $Setor = new Setor();
        $Problema = new Problema();
        ?>
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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
                                                <a class="dropdown-item" href="login.php">Login Técnico</a>

                                        </div>
                                </li>
                                <li>



                                </li>
                        </ul>
                </div>

        </nav>

        <br><br>
        <div class="logoUneb">
                <img src="https://portal.uneb.br/ascom/wp-content/themes/tema_assessoria/inc/image/logo.png" alt="">
        </div>

        <br><br>
        <div id="exterior">
                <h1> Abertura de chamado</h3> <br>

                        <!-- implementar data e horário automático da postagem-->
                        <!--gerar um número para protocolo-->
                        <!--Enviar email dizendo que foi aberto-->
                        <!--Tem que mandar email toda vez que mudar status do chamado-->
                        <div id="interior">
                                <form method="POST" action="../Controller/ControladorIndex.php">
                                        <p>Nome: <input class="form-control" type="text" id="Nome" value="" name="Nome" size="25px" maxlength="100" value=""></p>

                                        <p>CPF:<input class="form-control" type="text" id="CPF" name="CPF" size="25px" maxlength="11" value=""></p>

                                        <p> Email: <input class="form-control" type="email" id="Email" name="Email" size="25px" maxlength="100" value=""></p>

                                        <p>Telefone(opcional): <input class="form-control" type="text" id="Telefone" name="Telefone" size="25px" maxlength="11"></p>

                                        <p>Setor
                                                <?php
                                                $Setor->Select();
                                                ?></p>
                                        <p>
                                                Problema
                                                <?php
                                                $Problema->Select();
                                                ?>

                                        </p>

                                        <p>Descrição: <input class="form-control" type="text" id="Descricao" value="" name="Descricao" size="25px" maxlength="100" value=""></p>
                                        <p>
                                                Upload de arquivos:
                                                <input type="hidden" name="MAX_FILE_SIZE" value="4194304">
                                                <!-- tamanho max de 4mb-->
                                                <input type="file" name="Arquivo" id="Arquivo">
                                        </p>

                                        <p>
                                                Observação:
                                                <textarea class="form-control" name="OBS" id="OBS" rows="4" cols="50" size="50px" maxlength="99999" required>Detalhe do  problema</textarea>

                                        </p>

                                        <p>
                                                <div>
                                                        <input class="btn btn-info" type="submit" value="Enviar Chamado" onclick="cadastropedido()">
                                                        <input class="btn btn-info" type="reset" value="cancelar">
                                                </div>
                                        </p>
                                        <input type="hidden" name="Acao" id="Acao" value="NovoChamado">
                                </form>
                                <div>
                                        <a href="usuario.php"><button class="btn btn-info" onclick="pedecpf()">consulta</button></a>
                                        <a href="Software.php"><button class="btn btn-info">Sofware de
                                                        Instalação</button></a>

                                </div>



                        </div>
        </div>


</body>

<footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/validacao.js"></script>

</footer>

</html>
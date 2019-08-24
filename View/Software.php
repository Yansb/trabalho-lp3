<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- referenciar os arquivos css e javascript-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" /> -->

    <meta charset="UTF-8">
    <title>MYB-Software</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/MYB.css">
</head>

<body>
    <div class="logoUneb">
        <img src="https://portal.uneb.br/ascom/wp-content/themes/tema_assessoria/inc/image/logo.png" alt="">
    </div>


    <div id="exterior">
        <h1>Instalação do Software</h3> <br> <br>

            <!-- implementar data e horário automático da postagem-->
            <!--gerar um número para protocolo-->
            <!--Enviar email dizendo que foi aberto-->
            <!--Tem que mandar email toda vez que mudar status do chamado-->
            <div id="interior">
                <form method="POST" action="../Controller/ControladorIndex.php">
                    <p>Nome: <input class="form-control" type="text" id="Nome" name="Nome" size="25px" maxlength="100"
                            value="">
                    </p>
                    <p>CPF:<input class="form-control" type="text" id="CPF" name="CPF" size="25px"
                                                        maxlength="11" value=""></p>
                    <p>Email: <input class="form-control" type="email" id="Email" name="Email" size="25px"
                            maxlength="100" value=""></p>
                    <p>Telefone: <input class="form-control" type="text" id="Telefone" name="Telefone" size="25px"
                            maxlength="11" value=""> </p>

                    <p>Software para Instalação<input class="form-control" id="Software"" type="text" name="Software"
                            size="25px" maxlength="100" value="">
                    </p>

                    <p> Data de uso<input type="date" value="" id="data" name="data" size="25px" maxlength="11"> </p>


                    <p>Link para Download<input class="form-control" value="" id="Link" type="url" name="Link"
                            size="25px" maxlength="100"></p>

                    <p>Plugin Necessário(opcional)<input class="form-control" type="text" id="Plugin" name="Plugin" size="25px"
                            maxlength="11"></p>

                    <p> Selecione o Laboratório
                        <select class="custom-select custom-select-lg mb-3" name="Lab" size="0" id="Lab" name="Lab">

                            <option value="Lab1">Laboratório 1</option>
                            <option value="Lab2">Laboratório 2</option>
                        </select>
                    </p>
                    <input type="Hidden" id="Acao" name="Acao" value="AdicionarFT">

                    <p> <input class="btn btn-info" type="submit" value="Enviar Chamado" onclick="software()"></p>
                </form>
                <div>
                    <p><a href="index.php"><button class="btn btn-info">Voltar</button></a> </p>
                    <a href="usuario.php"><button class="btn btn-info" onclick="pedecpf()">consulta</button></a>
                </div>


            </div>
    </div>
    <script type="text/javascript" src="js/materialize.min.js"></script>

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
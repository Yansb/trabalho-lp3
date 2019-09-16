<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> MYB-Autenticação</title>
    <!-- referenciar os arquivos css e javascript-->

    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/MYB.css">

<?php require_once "function.php";
    session_start();
    $_SESSION['Alerta'];
?>
</head>

<body>

    <!-- LEMBRETE : link primeiro,img depois. -->

    <nav>
        <div class="nav-wrapper" style=" background-color: #3A5693">

            <ul class="right hide-on-med-and-down">

                <li><a href="index.php" waves-effect waves-light btn-small"><i class="material-icons left">cloud</i>Novo Chamado</a></a></li>
            </ul>
        </div>
    </nav>
    <?php            //  if($_SESSION['Alerta']===true)
                        //        mensagem("Verifique Login e Senha ", "Login"); 
                ?>
            </div>

    <header class="header">

        <div class="titulo">
            <h1>MYB </h1>
            <h5> Sistema de chamados</h5>
        </div>



    </header>
    <div class="containerAbaixo">

        <div class="linha">
            <div class="col-md-12">

            </div>
        </div>
        <div class="container">
            <div class="form">

                <form action="../Controller/ControladorLogin.php" method="POST" class="login">
                    <div id="usuario">

                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="Login" name="Login" type="text" required>
                            <label for="login">Login</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="Senha" name="Senha" type="password" required>
                            <label for="senha">Senha</label>
                        </div>
                        <input type="hidden" id="Acao" name="Acao" value="Logar">
                        <div>
                            <p>
                                <a><button class="btn btn-info">Login</button></a>
                                <a><button class="btn btn-info" type="reset">Cancelar </button></a>
                            </p>

                        </div>

                    </div>

                </form>


               


        </div>

    </div>



    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>



</html>
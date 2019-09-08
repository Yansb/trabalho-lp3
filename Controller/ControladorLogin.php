<?php
require "../Model/ClassUsuarios.php";
$Acao = $_POST['Acao'];

if ($Acao === "Logar") {

    $Login = $_POST['Login'];
    $Senha = $_POST['Senha'];

    $Tecnico = new Tecnico("", "", "", "", $Login, $Senha);
    $Resultado = $Tecnico->Logar();
    if ($Resultado != null) {
        $Tecnico->setNome($Resultado[0][0]);
        $Tecnico->setCargo($Resultado[0][1]);
        $Tecnico->setSetor($Resultado[0][2]);

    session_start();
         $_SESSION["Tecnico"]= $Tecnico; 
        header('location: ../View/Chamados.php'); 
        exit;
    } else {

        echo "Falha no Logoin";
    }
}

<?php
require "../Model/ClassUsuarios.php";
require_once"../Model/ClasseChamados.php";
 session_start();
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
        $Tecnico->setCPF($Resultado[0][3]);

        $Chamado = new Chamado();
        $Chamado->setSetor($Tecnico->getSetor());
        $_SESSION["Chamado"]= $Chamado; 
        $_SESSION["Tipo"]= "Normal";

        $_SESSION['Alerta']= false; 
         $_SESSION["Tecnico"]= $Tecnico; 
         if($Tecnico->getCargo()==="Admin")
                 header('location: ../View/ListaTec.php'); 
            else
                header('location: ../View/Chamados.php'); 
        exit;
    } else {
        unset ($_SESSION['Login']);
        unset ($_SESSION['Senha']);
        $_SESSION['Alerta']= true; 
        header('location:../View/login.php');
    }
}

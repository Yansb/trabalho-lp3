<?php
include "../Model/ClasseChamados.php";
require "../Model/ClassUsuarios.php";

session_start();

if (isset($_POST['Acao'])) {
    $Acao = $_POST['Acao'];


    if ($Acao === "NovoChamado") {

        $Atual = new DateTime();
        $DataHoraAbertura = $Atual->format('Y-m-d H:i:s');
        $Nome = $_POST["Nome"];
        $CPF = $_POST["CPF"];
        $Email = $_POST["Email"];
        $Telefone = $_POST["Telefone"];
        $Setor = $_POST["Codigo"];
        $Problema = $_POST["Problema"]; 
        if (isset($_POST["Arquivo"])) {
            $Arquivo = $_POST["Arquivo"];
        }
        $Descricao = $_POST['Descricao'];
        $OBS = $_POST["OBS"];
        if (isset($_POST["Tombo"])) {
            $Tombo = $_POST["Tombo"];
        } else {
            $Tombo = "nao";
        }
        echo $Arquivo;
        $Usuario = new Usuario($CPF, $Nome, $Telefone, $Email);
        if ($Usuario->Inserir() > 0) {

            $Chamado = new Chamado("", $Descricao, "Em Aberto", $Setor, $Problema, "Normal", $Arquivo, $OBS, $DataHoraAbertura, null, $Usuario->getCPF(), $Tombo, null);

            if ($Chamado->Adicionar() > 0) {
                
                $_SESSION["Usuario"] = $Usuario;
                header('Location: ../View/usuario.php');
            } else {
                echo "FALHA EM REALIZAR O CHAMADO";
            }
        }
    } else {
        echo "erro ao inserir ";
    }


    if ($Acao === "RemoverChamado") {

        $Numero = $_POST["Numero"];


        $Chamado = new Chamado($Numero);
        if ($Chamado->Remover() > 0) {

            header('Location: ../Model/ClasseChamadosDAO.php');
        } else {
            echo "FALHA EM Remover O CHAMADO";
        }
    }

    if ($Acao === "AdicionarFT") {

        $Atual = new DateTime();
        $DataHoraAbertura = $Atual->format('Y-m-d H:i:s');
        $Nome = $_POST["Nome"];
        $CPF = $_POST["CPF"];
        $Email = $_POST["Email"];
        $Telefone = $_POST["Telefone"];
        $Setor = $_POST["Lab"];
        $Descricao = $_POST['Software'];
        $Link = $_POST['Link'];
        $Plugin = $_POST['Plugin'];

        $ChamadoSoftware = new ChamadoSoftware("", $Descricao, $Setor, "dad", "adad", "dasda", $DataHoraAbertura, $Link, $Plugin);
        $$Usuario = new Usuario($Nome, $CPF, $Telefone, $Email);

        if ($ChamadoSoftware->Adicionar($Usuario) > 0) {

            header('Location: ../Model/ClasseChamadosDAO.php');
        } else {
            echo "FALHA EM REALIZAR O CHAMADO DE SOFTWARE";
        }
    }
}else{

    if(isset($_POST['Acao2'])){
       
        if( $Acao=$_POST["Acao2"]==="Consulta"){
     
           $Usuario = new Usuario();
           $Usuario->setCPF($_POST["CPF"]);
        $Usuario->getCPF();
            if ($Usuario->VerificarCPF()!=0) {
               
                $_SESSION["Usuario"]= $Usuario; 
              header('Location: ../View/usuario.php'); 

            }else
               echo  "Não exite Chamado para Esse CPF"; 
            
  


            

        }
    }
}

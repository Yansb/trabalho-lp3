
<?php

require "../Model/ClassUsuarios.php"; 

$Acao= $_POST['Acao']; 

if($Acao==="Adicionar"){
    $CPF=$_POST["CPF"];
    $Cargo = $_POST['Cargo'];
    $Nome = $_POST['Nome'];
    $Login = $_POST['Login'];
    $Senha = $_POST['Senha'];
    $Email = $_POST['Email'];
    $Telefone= $_POST["Telefone"];
    $Setor= $_POST["Setor"]; 

    $Tecnico = new Tecnico($Nome,$CPF,$Telefone,$Email,$Login,$Senha,$Cargo,$Setor); 

    header('location: ../View/CadastroTecnico.php');

}

?>
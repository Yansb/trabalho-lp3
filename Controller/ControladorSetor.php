<?php 
include '../Model/class.php';

$Acao=$_POST['Acao'];

if($Acao==="Adicionar"){
    $Nome=$_POST['Nome'];
    $Telefone=$_POST['Telefone'];
    $Email=$_POST['Email'];


    $Setor= new Setor("",$Nome, $Email,$Telefone); 
    header('Location: ../View/cadastroSetor.php');
    exit; 
}



?>
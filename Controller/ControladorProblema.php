<?php 
include '../Model/class.php';

$Acao=$_POST['Acao'];

if($Acao==="Adicionar"){
    $Nome=$_POST['Nome'];
    
    $Setor= new Setor("",$Nome); 
    
    header('Location: ../View/problemas.php');
    exit; 
 
}

?>
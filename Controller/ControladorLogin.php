<?php
require "../Model/ClassUsuarios.php"; 
$Acao = $_POST['Acao']; 

if($Acao==="Logar"){

    $Login = $_POST['Login'];
    $Senha = $_POST['Senha'];
  
    $Tecnico= new Tecnico("","","","",$Login,$Senha); 

    header('location: ../View/Chamados.php'); 
    exit;
   
}
else{

}



?>
<?php
include "../Model/class.php"; 

$Acao= isset($_POST['acao']) ; 

if($Acao==="NovoChamado"){
    $Ataul = new DateTime(); 
    $DataHoraAbertura= $Ataul->format('d-m-Y H:i:s'); 
    $Nome=$_POST["Nome"];
    $CPF=$_POST["CPF"];
    $Email= $_POST["Email"];
    $Telefone= $_POST["Telefone"];
    $Setor= $_POST["Setor"];
    $Problema=$_POST["Problema"];
    $Arquivo= isset( $_POST["Arquivo"]); 
    $Descricao=$_POST['Descricao'];
    $OBS=$_POST["OBS"]; 
  
    $Chamado= new Chamado($Descricao,$Setor,$Problema,$Arquivo,$OBS,$DataHoraAbertura,"" ); 
    $User= new Usuario($Nome,$CPF,$Telefone,$Email);


}

?>
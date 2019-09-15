<?php 
        include '../Model/class.php';

        $Acao=$_POST['Acao'];

        if($Acao==="Adicionar"){
            $Nome=$_POST['Nome'];
            $Telefone=$_POST['Telefone'];
            $Email=$_POST['Email'];

            $Setor= new Setor("",$Nome, $Email,$Telefone); 
            if($Setor->Adicionar()>0){
                
                header('Location: ../View/cadastroSetor.php');
              
               
            exit; 

            }else{
                echo "ERRO AO ADICIONAR";
            }
        }

        if($Acao==="Remover"){
            $Codigo=$_POST['Codigo'];
            
            $Setor= new Setor($Codigo); 
            if($Setor->Remover()>0){
                header('Location: ../View/cadastroSetor.php');
            exit; 

            }else{
                echo "ERRO AO REMOVER";
            }
        }

        if($Acao==="Alterar"){
            $Codigo= $_POST['Codigo'];
            $Campo = $_POST['Campo'];
            $Novo= $_POST['Novo'];
            
            $Setor= new Setor($Codigo);
            
            if($Setor->Alterar($Campo,$Novo)>0){
                header('Location: ../View/cadastroSetor.php');
            exit; 

            }else{
                echo "ERRO AO ALTERAR";
            }
        }




?>
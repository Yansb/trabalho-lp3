<?php 
        include '../Model/class.php';

        $Acao=$_POST['Acao'];

        if($Acao==="Adicionar"){

            $Nome=$_POST['Nome'];
            $Problema= new Problema("",$Nome);
            if($Problema->Adicionar()>0){
                echo "cadastrado com sucesso"; 
                //header('Location: ../View/problemas.php');
                exit; 

            }else{
                echo"ERRO AO CADASTRAR";
            }
        }
        

        if($Acao==="Remover"){

            $Codigo=$_POST['Codigo'];
            $Problema= new Problema($Codigo);
            if($Problema->Remover()>0){
                Echo "removido com sucesso"; 
               // header('Location: ../View/problemas.php');
                exit; 

            }else{
                echo"ERRO AO Remover";
            } 
            
        }
        if($Acao==="Alterar"){

            $Codigo=$_POST['Codigo'];
            $Problema= new Problema($Codigo);
            if($Problema->Alterar($Novo)){
                header('Location: ../View/problemas.php');
                exit; 

            }else{
                echo"ERRO AO EM ALTERAR";
            } 
            
        }

?>
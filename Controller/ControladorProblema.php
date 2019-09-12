<?php 
        include '../Model/class.php';

        $Acao=$_POST['Acao'];

        if($Acao==="Adicionar"){

            $Nome=$_POST['Nome'];
            $Problema= new Problema("",$Nome);
            if($Problema->Adicionar()>0){
            echo "<script type='text/javascript'>";
            echo "window.alert('Hi There, I am the Alert Box!')</script>";

                header('Location: ../View/problemas.php');
                exit; 

            }else{
                echo"ERRO AO CADASTRAR";
            }
        }
        

        if($Acao==="Remover"){

            $Codigo=$_POST['Problema'];
            $Problema= new Problema($Codigo);
            if($Problema->Remover()>0){
                Echo "removido com sucesso"; 
                header('Location: ../View/problemas.php');
                exit; 

            }else{
                echo"ERRO AO Remover";
            } 
            
        }
        if($Acao==="Alterar"){

            $Codigo=$_POST['Problema'];
            $Novo= $_POST['Novo'];
            $Problema= new Problema($Codigo,$Novo);
          
            if($Problema->Alterar()){
                header('Location: ../View/problemas.php');
                exit; 

            }else{
                echo"ERRO AO EM ALTERAR";
            } 
            
        }

?>
<?php
        include "../Model/ClasseChamados.php"; 
        require "../Model/ClassUsuarios.php"; 
       
        $Acao= $_POST['Acao']; 

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
        
            $Chamado= new Chamado("" ,$Descricao,$Setor,$Problema,$Arquivo,$OBS,$DataHoraAbertura); 
            $Usuario= new Usuario($Nome,$CPF,$Telefone,$Email);

            if($Chamado->Adicionar($Usuario)>0){

                //header('Location: ../View/teste.php');
            
                
            }else {
                echo "FALHA EM REALIZAR O CHAMADO";
            }

        }

        if($Acao==="RemoverChamado"){
       
            $Numero=$_POST["Numero"];
            
        
            $Chamado= new Chamado($Numero); 
            if($Chamado->Remover()){

                header('Location: ../Model/ClasseChamadosDAO.php');
            
                
            }else {
                echo "FALHA EM Remover O CHAMADO";
            }

        }

        if($Acao==="AdicionarFT"){

            $Ataul = new DateTime(); 
            $DataHoraAbertura= $Ataul->format('d-m-Y H:i:s'); 
            $Nome=$_POST["Nome"];
            $CPF=$_POST["CPF"];
            $Email= $_POST["Email"];
            $Telefone= $_POST["Telefone"];
            $Setor= $_POST["Lab"];
            $Descricao=$_POST['Software'];
            $Link=$_POST['Link'];
            $Plugin=$_POST['Plugin'];
        
            $ChamadoSoftware= new ChamadoSoftware("" ,$Descricao,$Setor,"dad","adad","dasda",$DataHoraAbertura,$Link,$Plugin); 
            $$Usuario= new Usuario($Nome,$CPF,$Telefone,$Email);

            if($ChamadoSoftware->Adicionar($Usuario)){

                header('Location: ../Model/ClasseChamadosDAO.php');
            
                
            }else {
                echo "FALHA EM REALIZAR O CHAMADO DE SOFTWARE";
            }


        }



?>
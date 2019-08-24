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
            $User= new Usuario($Nome,$CPF,$Telefone,$Email);
            if($Chamado->Adicionar()){

                header('Location: ../View/Index.php');
            
                
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
            $User= new Usuario($Nome,$CPF,$Telefone,$Email);

            echo "Desc: ".$ChamadoSoftware->getOBS()."<br>";
          

        

        }



?>
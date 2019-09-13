<?php
  require_once "../Model/classeChamados.php";


  if(isset($_GET['Acao'])){
    if( $_GET['Acao']==="Atender"){
    
        $Chamado = new Chamado($_GET['Numero']);
        $Chamado->setTecnico($_GET['Tecnico']);
            if($Chamado->VerificarAtendente()==NULL){
            
            if( $Chamado->Atender()>0){
          
                 header("Location: ../Controller/ControladorLogin.php");
         
            }else{
             header("Location: ../View/ChamadoAtual.php");
            }
        }else{
            echo "chamado já em atendimento";
        }
    
    }

  }else{


      if(isset($_POST['Acao'])){

        if( $_POST['Acao']==="Finalizar"){
        
    
        }else{
            if( $_POST['Acao']==="Tombo"){
                
            
            }else{
                if( $_POST['Acao']==="Encaminhar"){
                 $Chamado = new Chamado($_POST['Numero']);
                 $Chamado->setTecnico($_POST['CPF']);
                 $Chamado->setSetor($_POST['Codigo']);
                 
                $Chamado->Encaminhar(); 
                header("Location: ../View/ChamadoAtual.php");
                }else{
                    if( $_POST['Acao']==="Historico"){
                        $Atual = new DateTime();
                        $DataHora =$Atual->format('d-m-Y H:i:s');
                         $Descricao = $_POST["Descricao"];
                        $Historico= new HistoricoChamado($DataHora,$Descricao); 
                        $Historico->setChamado($_POST['Numero']); 
                    
                        
                        if($Historico->adicionar()>0){
                            echo "adicionado com sucesso ";
                        } 
                     

                        
                    
                    }
                }
            }
        }
      }
   }


?>
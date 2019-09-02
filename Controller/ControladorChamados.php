<?php 
    include_once '../Model/ClasseChamados.php';

    $Pesquisar= $_POST['Pesquisar'];
    
    $Chamado = new Chamado();
            

    if($Pesquisar=="Periodo"){
    

      $Inicio= $_POST['Inicio']; 
      $Termina = $_POST['Fim']; 
      echo $Inicio;
      echo $Termina;
    }
    else{
        if($Pesquisar=="Numero"){   
       $Chamado->setNumero( $_POST['Numero']); 
            echo $Chamado->getNumero(); 

        }
        else{
            if($Pesquisar=="Equipamento"){
             
               
                $Chamado->setEquipamento($_POST['Equipamento']); 
                echo $Chamado->getEquipamento(); 
               
            }
            else{
                if($Pesquisar=="Setor"){

                   $Chamado->setSetor($_POST['Setor']);
                   echo $Chamado->getSetor();

                   
                }else{
                    if($Pesquisar=="Solicitante"){
                        $Solicitante = $_POST['Solicitante']; 
                        echo $Solicitante;
                    }
                    else{
                        if($Pesquisar=="Estado"){
                        
                            $a = $_POST['Estado'];
                            echo $a; 
                        }
                        else{
                            if($Pesquisar=="Prioridade"){
                                $Prioridade= $_POST['Prioridade'];
                                echo $Prioridade; 
                            }
                            else{
                                if($Pesquisar=="Atendente"){
                                    $Atendente = $_POST['Atendente']; 
                                    echo $Atendente; 
                                }
                                else{

                                    $QtdDias= $_POST['Qtdias']; 
                                    echo $QtdDias;
                                    // quantidade de dias 
                                }
                            }
                        }
                    }   
                }   
            }
        }
    }

    



?>
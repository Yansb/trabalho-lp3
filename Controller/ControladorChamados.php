<?php 
    include_once '../Model/ClasseChamados.php';

    $Pesquisar= $_POST['Pesquisar'];
    
    $Chamado = new Chamado();
            

    if($Pesquisar=="Periodo"){
    

    
     $Chamado->setDataHoraAbertura($_POST['Inicio']);
     $Chamado->setDataHoraFechamento($_POST['Fim']); 

        if($Chamado->Pesquisar($Pesquisar)){
                echo "FOi"; 
        }else{
            Echo "não foi"; 
        }
        
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

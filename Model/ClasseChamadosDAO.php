<?php
    include_once "ConnectionFactory.php";


        class ChamadoDAO{

            public function Adicionar($Chamado,$Usuario){
                try{
                            $Minhaconexao= ConnectionFactory::getconnection(); 

                            $SQL= $Minhaconexao->prepare("");// codigo sql 
                            $SQL->bindParam('status',$Status);
                            $SQL->bindParam('descricao',$Descricao);
                            $SQL->bindParam('datahoraabertura',$DataHoraAbertura); 
                            $SQL->bindParam('prioridade',$Prioridade);
                            $SQL->bindParam('arquivo',$Arquivo);
                            $SQL->bindParam('obs', $OBS); 
                            $SQL->bindParam('setor',$Setor);
                            $SQL->bindParam('problema',$Problema);
                            $SQL->bindParam('nome',$Nome);
                            $SQL->bindParam('cpf',$CPF);
                            $SQL->bindParam('telefone',$Telefone);
                            $SQL->bindParam('email',$Email);
                            
                            $Status = $Chamado->getStatus();
                            $Descricao = $Chamado->getDescricao();
                            $DataHoraAbertura = $Chamado->getDataHoraAbertura();
                            $Prioridade = $Chamado->getPrioridade();
                            $Arquivo = $Chamado->getArquivo();
                            $OBS = $Chamado->getOBS(); 
                            $Setor = $Chamado->getSetor();
                            $Problema = $Chamado->getChamado(); 
                            $Nome = $Usuario->getCPF(); 
                            $CPF = $Usuario->getCPF();
                            $Telefone = $Usuario->getTelefone();
                            $Email = $Usuario->getEmail();
                            
                            $SQL->execute(); 

                            return $SQL->rowCount(); 

                }

                catch(PDOException  $Erro){
                    echo "Erro ao  cadastrar chamado".$Erro->getmessage();
                    return; 

                }
                $Minhaconexao=NULL;
                
            
            }

            public function Remover($Chamado){

                try{
                        $Minhaconexao= ConnectionFactory::getconnection(); 

                        $SQL = $Minhaconexao->prepare(""); // codigo sql 

                        $SQL->bindParam("numero",$Numero); 
                        $Numero = $Chamado->getNumero(); 

                        $SQL->execute(); 

                        return $SQL->rowcount(); 

                }
                catch(PDOException $Erro){
                        Echo "erro ao Remover chamado".$Erro->getmessage(); 
                        return;

                }

                $Minhaconexao= null; 
                
            
            }

            public function Alterar(){



                
            }


            public function Pesquisar($Chamado,$Tipo){


            try{
                $Minhaconexao = ConnectionFactory::getconnection(); 
                if($Tipo===Periodo){
                    $SQL= $Minhaconexao->prepare("");
                    $SQL->bindParam("incio",$Inicio);
                    $SQL->bindParam("Fim",$Fim);
                    $Inicio= $Chamado->getDataHoraAbertura(); 
                    $Fim= $Chamado->getDataHoraFechamento(); 

                    $SQL->execute(); 
                    return true; 
                    // falta o return com dados 
                }
            

            }
            catch(PDOExcepetion $Erro){
                Echo $Erro->getmessage(); 
            }
            $Minhaconexao= NULL; 
            

        }
    }    

// Fim ChamadoDAo


?>
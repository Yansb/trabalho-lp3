<?php
        include "ConnectionFactory.php";


        class ProblemaDAO{

            public function Adicionar($Problema){
                    try{
                        $Minhaconexao=ConnectionFactory::getconnection(); 

                        $SQL= $Minhaconexao->prepare("");// codigo sql

                        $SQL->bindParam("nome",$Nome); 
                        $Nome=$Problema->getNome();
                        $SQL->execute(); 

                        return $SQL->rowCount(); 

                    }
                    catch(PDOException $Erro){

                        echo"Erro ao adicionar Probelama".$Erro->getmessage();
                        return;
                    }
                $Minhaconexao=null;
            }

            public function Remover($Poblema){
                    try{

                        $Minhaconexao=  ConnectionFactory::getconnection(); 

                        $SQL= $Minhaconexao->prepare(""); // codigo sql para remover

                        $SQL->bindParam('codigo',$Codigo);
                        $Codigo= $Problema->getCodigo();
                        $SQL->execute();

                        return $SQL->rowCount();

                    }

                    catch(PDOException $Erro){
                            echo"Erro ao Remover Problema".$Erro->getmessage();
                            return

                    }
                    $Minhaconexao=NULL; 

                return ;
            }
            public function Alterar($Velho,$Novo){

                    try{

                        $Minhaconexao= ConnectionFactory::getconnection();

                        $SQL= $Minhaconexao->prepare(""); // codigo sql para alterar; 
                        $SQL->bindParam("codigo",$Codigo);
                        $SQL->binParam("nome",$Nome);
                        $Nome= $Novo->getNome();
                        $Codigo= $Velho->getCodigo();

                        $SQL->execute();
                        
                        return $SQL->rowCount();


                    }
                    catch(PDOException $Erro){
                        
                        echo" Erro ao Alterar Problema".$Erro->getmessage();
                        return;

                    }
               
            }

            public function Pesquisar($Palavra){

            }      

    
        // Fim class ProblemaDAO

        class SetorDAO{

            public function Adicionar(){
                return 0;
            }

            public function Remover(){
                return 1;
            }
            public function Alterar($Velho,$Novo){
                return 1;
            }

        }

?>
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

            public function Adicionar($Setor)
            {
                try{
                    $Minhaconexao= ConnectionFactory::getconnection();

                    $SQL=$Minhaconexao->prepare(""); // códgio sql para adicionar setor
                    $SQL->bindParam("nome",$Nome);
                    $SQL->bindParam("email",$Email);
                    $SQL->bindParam("telefone",$Telefone); 

                    $Nome= $Setor->Nome();
                    $Email= $Setor->Email();
                    $Telefone = $Setor->Telefone();                    
                    $SQL->execute();
                    return $SQL->rowCount();
                }
                catch(PDOException $Erro){
                    echo "Erro ao Cadastrar Setor".$Erro->getmessage();
                    return;
                }
                $Minhaconexao= null; 
            }

            public function Remover($Setor)
            {
                try{
                    $Minhaconexao= ConnectionFactory::getconnection();

                    $SQL= $Minhaconexao->prepare(""); // codigo sql 
                    $SQL-bindParam("codigo", $Codigo); 
                    $Codigo= $Setor->Codigo();

                    $SQL->execute();

                    return $SQL->rowount();


                }
                catch(PDOException $Erro){
                    echo "Erro ao Remover Setor <br>".$Erro->getmessage();
                    return;
                }
                $Minhaconexao= null; 
            public function Alterar($Velho,$Novo)
            {
                try{
                    $Minhaconexao= ConnectionFactory::getconnection();
                    
                    $SQL=$Minhaconexao->prepare(""); // codigo sql
                    $SQL->binParam("codigo", $Codigo);
                    $SQL->bindParam("Nome",$Nome);
                    
                    $Codigo= Velho->getCodigo();
                    $Nome= $Novo->getNome();
                    
                    $SQL->execute();

                    return $SQL->rowCount();
                }
                catch(PDOException $Erro){
                    echo "Erro ao Alterar Setor".$Erro->getmessage();
                    return;
                }
                $Minhaconexao= null; 
            }

            public function Pesquisar($Setor){


            }

        }

?>
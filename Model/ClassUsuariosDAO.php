<?php

   include_once "ConnectionFactory.php";

            class UsuarioDAO{

                public function VerificarCPF($Usuario){

                    try{

                        $Minhaconexao = ConnectionFactory::getconnection();

                        $SQL = $Minhaconexao->prepare(); // codigo sql 
                        $SQL->bindParam('cpf',$CPF); 
                        $CPF = $Usuario->getCPF(); 

                        $SQL->execute();
                        return $SQL->rowCount();
                    }

                    catch(PDOException $Erro){

                        Echo "Erro ao verificar CPF ".$Erro->getmessage(); 
                        
                        return; 
                    }
                    
                    $Minhaconexao=null;
                } 
            }

            // fim classe UsuarioDAO


            class TecnicoDAO extends UsuarioDAO{

                public function Logar($Tecnico){
                    return true; 
                }

                public function Adicionar($Tecnico){

                }

                public function Remover($Tecnico){

                }
                public function Alterar($Velho, $Novo){

                }

                public function Pesquisar(){
                    
                }
            }

            //Fim class TecnicoDAO


            class GerenteDAO extends TecnicoDAO {

                public function Adicionar($Gerente){    
                    
                    return true;

                }
                public function Remover($Gerente){


                    return true;
                }

                public function Alterar($Atual,$Novo){


                    return true;
                }

            }

            //Fim classe



?>
<?php

   include "ConnectionFactory.php";

            class UsuarioDAO(){

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

                public function Adicionar($GerenteDAO){    
                    echo $GerenteDAO->getNome()."<br>";
                    echo $GerenteDAO->getCPF()."<br>";
                    echo $GerenteDAO->getTelefone()."<br>";
                    echo $GerenteDAO->getEmail()."<br>";
                    return true;

                }
                public function Remover($GerenteDAO){


                    return true;
                }

                public function Alterar($GerenteDAO){


                    return true;
                }

            }

            //Fim classe



?>
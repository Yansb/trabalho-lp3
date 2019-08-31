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
                        return $SQL->rowCount(); // acho que nesse caso não é essa função verificar depois 
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
                    try{
                        $Minhaconexao= ConnectionFactory::getconnection();

                        $SQL= $Minhaconexao->prepare(""); // codigo sql
                        $SQL->bindParam('nome',$Nome); 
                        $SQL->bindParam('cpf',$CPF); 
                        $SQL->bindParam('cargo',$Cargo); 
                        $SQL->bindParam('login',$Login); 
                        $SQL->bindParam('senha',$Senha);
                        $SQL->bindParam('email',$Email); 
                        $SQL->bindParam('setor',$Setor); 
                        $SQL->bindParam('telefone',$Telefone);  

                        $Nome = $Tecnico->getNome();
                        $CPF = $Tecnico->getCPF();
                        $Cargo = $Tecnico->getCargo();
                        $Email = $Tecnico->getEmail();
                        $Telefone = $Tecnico->getTelefone();
                        $Login = $Tecnico->getLogin();
                        $Senha = $Tecnico->getSenha();
                        $Setor = $Tecnico->getSetor();

                        $SQL->execute(); 

                        return $SQL->rowCount();
                  }
                    catch(PDOException $Erro){
                        echo "Erro ao adicionar tecnico".$Erro->getmessage(); 

                    }
                    $Minhaconexao= NULL; 
                }

                public function Remover($Tecnico){
                    try{
                        $Minhaconexao= ConnectionFactory::getconnection();

                        $SQL= $Minhaconexao->prepare(""); // codigo sql
                        $SQL->bindParam('Codigo',$Codigo); 
                        

                        $Codigo = $Tecnico->getCodigo();
                        

                        $SQL->execute(); 

                        return $SQL->rowCount();
                  }
                    catch(PDOException $Erro){
                        echo "Erro ao Remover tecnico".$Erro->getmessage(); 

                    }
                    $Minhaconexao= NULL; 
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
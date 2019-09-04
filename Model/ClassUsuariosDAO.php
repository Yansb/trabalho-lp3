<?php

   include_once "ConnectionFactory.php";

            class UsuarioDAO{

                public function VerificarCPF($Usuario){

                    try{

                        $Minhaconexao = ConnectionFactory::getconnection();

                        $SQL = $Minhaconexao->prepare("select *from myb1.usuario where cpf=:cpf"); // codigo sql 
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
                        try{
                            $Minhaconexao = ConnectionFactory::getconnection();

                            $SQL = $Minhaconexao->prepare("select *from myb1.funcionario where login=:login and senha=:senha");
                            $SQL->bindParam("login", $Login);
                            $SQL->bindParam("senha", $Senha);

                            $Login = $Tecnico->getLogin();
                            $Senha = $Tecnico->getSenha(); 
                            $SQL->execute(); 

                            // continuar 
                            
                        }catch(PDOException $Erro){

                            echo $Erro->getmessage(); 
                        }
                        $Minhaconexao = null; 

                }

                public function Adicionar($Tecnico){
                    try{
                        $Minhaconexao= ConnectionFactory::getconnection();

                        $SQL= $Minhaconexao->prepare("Insert into myb1.funcionario(cpf,nome,cargo,login,senha,telefone,email,codigo) values (:cpf,:nome,:cargo,:login,:senha,:telefone,:email,:setor)");// codigo sql
                                                      
                        $SQL->bindParam('cpf',$CPF); 
                        $SQL->bindParam('nome',$Nome); 
                        $SQL->bindParam('cargo',$Cargo); 
                        $SQL->bindParam('login',$Login); 
                        $SQL->bindParam('senha',$Senha);
                        $SQL->bindParam('telefone',$Telefone); 
                        $SQL->bindParam('email',$Email); 
                        $SQL->bindParam('setor',$Setor); 
                      

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

                        $SQL= $Minhaconexao->prepare("delete from myb1.funcionario where cpf = :cpf"); // codigo sql
                        $SQL->bindParam('cpf',$CPF); 
                    
                        $CPF = $Tecnico->getCPF();
    
                        $SQL->execute(); 

                        return $SQL->rowCount();

                  }catch(PDOException $Erro){
                        echo "Erro ao Remover tecnico".$Erro->getmessage(); 

                    }
                    $Minhaconexao= NULL; 
                }
                
                public function Alterar($Velho, $Novo){

                }

                public function Pesquisar(){
                    
                }

                public function BuscarTodos(){
                    try{
                        $Minhaconexao= connectionFactory::getconnection(); 

                        $SQL= $Minhaconexao->prepare("select * from myb1.funcionario");
                        $SQL->execute(); 
                        $SQL->setFetchMode(PDO::FETCH_ASSOC);
                        $vet= array();
                        $i =0;

                        while($linha = $SQL->fetch(PDO::FETCH_ASSOC)){
                            $vet[$i]= array($linha["cpf"],$linha["nome"],$linha["cargo"],$linha["login"],$linha["senha"],$linha["telefone"],$linha["email"],$linha["codigo"]);
                            $i ++; 
                        }
                        return $vet;

                   }catch(PDOException $Erro){
                        Echo $Erro->getmessage();
                    }
                    $Minhaconexao= null; 
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
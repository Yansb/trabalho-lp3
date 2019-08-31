
<?php

            require "../Model/ClassUsuarios.php"; 

            $Acao= $_POST['Acao']; 

            if($Acao==="Adicionar"){
                $CPF=$_POST["CPF"];
                $Cargo = $_POST['Cargo'];
                $Nome = $_POST['Nome'];
                $Login = $_POST['Login'];
                $Senha = $_POST['Senha'];
                $Email = $_POST['Email'];
                $Telefone= $_POST["Telefone"];
                $Setor= $_POST["Setor"]; 

                $Gerente= new Gerente($CPF,$Nome,$Telefone,$Email,$Login,$Senha,$Cargo,$Setor); 
                if($Gerente->Adicionar()>0){

                    //header('location: ../View/CadastroTecnico.php');
                    echo "Adicionado com Sucesso";

                }
                else{
                    echo "ERRO AO ADD";
                }
                
            }

            if($Acao==="Remover"){

                $CPF=$_POST['CPF'];

                $Gerente= new $Gerente($CPF);
                if($Gerente->Remover()>0){
                        echo "REMOVIDO COM SUCESSO";
                }
                else{
                    echo "ERRO AO REMOVER";
                }
            }

?>
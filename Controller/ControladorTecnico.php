
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
                $CodSetor= $_POST["Codigo"]; 
          

                $Tecnico= new Tecnico($CPF,$Nome,$Telefone,$Email,$Login,$Senha,$Cargo,$CodSetor); 
               if($Tecnico->Adicionar()>0){

                    header('location: ../View/CadastroTecnico.php');
                  

                }
                else{
                    echo "ERRO AO ADD";
                }
            
            }else{
                if($Acao==="Remover"){

                    $CPF=$_POST['CPF']; // alterar depois, feito para testar
    
                    $Tecnico= new $Tecnico($CPF);

                    if($Tecnico->Remover()>0){
                            echo "REMOVIDO COM SUCESSO";
                            //header('location: ../View/CadastroTecnico.php');
                    }
                    else{
                        echo "ERRO AO REMOVER"; 
                       
                    }
                }
            }
            

?>
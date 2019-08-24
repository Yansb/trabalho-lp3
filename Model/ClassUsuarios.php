<?php 

class Usuario
        {
                protected $Nome;

                protected $CPF;

                protected $Telefone;

                protected $Email;

            
                public function __construct($Nome="", $CPF="", $Telefone="", $Email="")
                {
                    $this->Nome = $Nome;
                    $this->CPF = $CPF;
                    $this->Telefone = $Telefone;
                    $this->Email = $Email;
                    
            }

                
            
                public function getNome()
                {
                    return $this->Nome;
                }

                
                public function setNome($Nome="")
                {
                    $this->Nome = $Nome;

                    return $this;
                }

                
                public function getCPF()
                {
                    return $this->CPF;
                }

                
                public function setCPF($CPF)
                {
                    $this->CPF = $CPF;

                    return $this;
                }

                public function getTelefone()
                {
                    return $this->Telefone;
                }

                
                public function setTelefone($Telefone)
                {
                    $this->Telefone = $Telefone;

                    return $this;
                }

                
                public function getEmail()
                {
                    return $this->Email;
                }

            
                public function setEmail($Email)
                {
                    $this->Email = $Email;

                    return $this;
                }

                public function CadastrarChamado()
                {

                }

                public function CancelarChamado()
                {

                }
        }

        //fim class Usuario 


        class Tecnico extends Usuario{

            Protected $Login;  
            Protected $Senha;
            Protected $Cargo;
            Protected $Setor;


            
            public function __construct($Nome="",$CPF="",$Telefone="",$Email="",$Login="",$Senha="", $Cargo="",$Setor="")
            {
                parent::__construct($Nome,$CPF,$Telefone,$Email);
                $this->Login = $Login;
                $this->Senha = $Senha;
                $this->Cargo =$Cargo;
                $this->Setor =$Setor; 
            }

            public function getLogin()
            {
                return $this->Login;
            }

            public function setLogin($Login)
            {
                $this->Login = $Login;

                return $this;
            }
            public function getSenha()
            {
                return $this->Senha;
            }

        
            public function setSenha($Senha)
            {
                $this->Senha = $Senha;

                return $this;
            }
            public function getCargo()
            {
                        return $this->Cargo;
            }

          
            public function setCargo($Cargo)
            {
                        $this->Cargo = $Cargo;

                        return $this;
            }
            public function getSetor()
            {
                        return $this->Setor;
            }

            
            public function setSetor($Setor)
            {
                        $this->Setor = $Setor;

                        return $this;
            }
        }

        // Fim class tecnico 



        class Administrador extends Tecnico{

            public function __construct($Nome,$CPF,$Telefone,$Email,$Login)
            {
                parent:: __construct($Nome, $CPF, $Telefone, $Email, $Login); 
            }

            Public function CadastrarSetor(){

            }

            Public function CadastrarTecnico(){

            }

            Public function CadastrarProblema(){

            }
        }

        
        // fim class adm


        class Gerente extends Administrador{

            public function __construct($Nome,$CPF,$Telefone,$Email,$Login)
            {
                parent:: __construct($Nome, $CPF, $Telefone, $Email, $Login); 
            }
            
        }
        // fim class gerente 


?>
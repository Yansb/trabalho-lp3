<?php 
        include "ClassUsuariosDAO.php";
        class Usuario
                {
                        protected $Nome;
                        protected $CPF;
                        protected $Telefone;
                        protected $Email;

                    
                        public function __construct( $CPF="",$Nome="", $Telefone="", $Email="")
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

                        
                        public function setNome($Nome)
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


                    
                    public function __construct($CPF="",$Nome="",$Telefone="",$Email="",$Login="",$Senha="", $Cargo="",$Setor="")
                    {
                        parent::__construct($CPF,$Nome,$Telefone,$Email);
                        $this->Senha = $Senha;
                        $this->Cargo =$Cargo;
                        $this->Setor =$Setor; 
                    }

                    public function Logar(){
                        $Login= new TecnicoDAO();
                        return $Login->Login($this);
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



                class Gerente extends Tecnico{

                    public function __construct($CPF="",$Nome="",$Telefone="",$Email="",$Login="",$Senha="", $Cargo="",$Setor="")
                    {
                        parent:: __construct($CPF,$Nome,$Telefone,$Email,$Login,$Senha, $Cargo,$Setor); 
                    }

                    public function Adicionar(){
                       
                        $Gerente= new GerenteDAO();
                       return $Gerente->Adicionar($this);
                     }
                    public function Remover(){
                        $Usuario= new UsuarioDAO();
                        return $Usuario->Remover($this);
                    }
                    public function Alterar(){
                        $Usuario= new UsuarioDAO();
                        return $Usuario->Alterar($this);
                    }



                    Public function CadastrarSetor(){

                    }

                    Public function CadastrarTecnico(){

                    }

                    Public function CadastrarProblema(){

                    }
                }

                
                // fim class adm


                class Adminisrador extends Gerente {

                    public function __construct($CPF="",$Nome="",$Telefone="",$Email="",$Login="",$Senha="", $Cargo="",$Setor="")
                    {
                        parent:: __construct($CPF,$Nome,$Telefone,$Email,$Login,$Senha, $Cargo,$Setor); 
                    }
                    
                }
        // fim class gerente 


?>
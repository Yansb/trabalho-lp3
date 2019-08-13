<?php



        class Usuario
        {
                protected $Nome;

                protected $CPF;

                protected $Telefone;

                protected $Email;

            
                public function __construct($Nome, $CPF, $Telefone, $Email)
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


            
            public function __construct($Nome,$CPF,$Telefone,$Email,$Login)
            {
                parent::__construct($Nome,$CPF,$Telefone,$Email);
                $this->Login = $Login;
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
            
        class Setor
        {
            Protected $Nome; 
            Protected $Codigo; 
            Protected $Email;
            Protected $Telefone; 



            public function __construct($Nome, $Email,$Telefone ){

                $this->Nome = $Nome;
                $this->Email = $Email; 
                $this->Telefone = $Telefone; 

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

        
            public function getCodigo()
            {
                return $this->Codigo;
            }

        
            public function setCodigo($Codigo)
            {
                $this->Codigo = $Codigo;

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

        
        

            
            public function getTelefone()
            {
                return $this->Telefone;
            }

            
            public function setTelefone($Telefone)
            {
                $this->Telefone = $Telefone;

                return $this;
            }
        }
        // fim class setor
        
        
        class Chamado
        {
            Protected $Status; 
            Protected $Descricao;
            Protected $DataAbertura; 
            Protected $DataFechamento;
            Protected $Prioridade;
            Protected $Numero;
            Protected $Hora; 

            public function __construct($Status,$Descricao,$DataAbertura,$DataFechamento,$Prioridade,$Numero,$Hora)
            {
                $this->Status = $Status;
                $this->Descricao = $Descricao;
                $this->DataAbertura = $DataAbertura; 
                $this->DataFechamento = $DataFechamento; 
                $this->Prioridade = $Prioridade; 
                $this->$Numero= $Numero;
                $this->$Hora= $Hora; 

            }

            public function Encaminhar()
            {

            }
            public function Atender()
            {
                
            }
            public function Finalizar()
            {
                
            }

            public function getStatus()
            {
                        return $this->Status;
            }

        
            public function setStatus($Status)
            {
                        $this->Status = $Status;

                        return $this;
            }

            
            public function getDescricao()
            {
                        return $this->Descricao;
            }

             function setDescricao($Descricao)
            {
                        $this->Descricao = $Descricao;

                        return $this;
            }

            
            public function getDataAbertura()
            {
                        return $this->DataAbertura;
            }

          
            public function setDataAbertura($DataAbertura)
            {
                        $this->DataAbertura = $DataAbertura;

                        return $this;
            }

            
            public function getDataFechamento()
            {
                        return $this->DataFechamento;
            }

           
            public function setDataFechamento($DataFechamento)
            {
                        $this->DataFechamento = $DataFechamento;

                        return $this;
            }

            
            public function getPrioridade()
            {
                        return $this->Prioridade;
            }

            
        
            public function setPrioridade($Prioridade)
            {
                        $this->Prioridade = $Prioridade;

                        return $this;
            }

            
            public function getNumero()
            {
                        return $this->Numero;
            }

            
            public function setNumero($Numero)
            {
                        $this->Numero = $Numero;

                        return $this;
            }

            
            public function getHora()
            {
                        return $this->Hora;
            }

            
             
            public function setHora($Hora)
            {
                        $this->Hora = $Hora;

                        return $this;
            }
        }

        //fim classe chamado 
    
        class Problemas
        {

            Protected $Codigo; 
            Protected $Nome;
            
            public function __construct($Nome){
                $this->Nome = $Nome; 
            } 


            public function getCodigo()
            {
                        return $this->Codigo;
            }

           
            public function setCodigo($Codigo)
            {
                        $this->Codigo = $Codigo;

                        return $this;
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
        }

        // Fim class problemas 


        class HistoricoChamado{
            Protected $Data;
            Protected $Hora;
            Protected $Descricao; 

            public function __construct($Data,$Hora,$Descricao){
                $this->Data= $Data; 
                $this->Hora = $Hora; 
                $this->$Descricao = $Descricao; 


            }


            public function getData()
            {
                        return $this->Data;
            }

            
            public function setData($Data)
            {
                        $this->Data = $Data;

                        return $this;
            }

           
            public function getHora()
            {
                        return $this->Hora;
            }

            
            public function setHora($Hora)
            {
                        $this->Hora = $Hora;

                        return $this;
            }

           
            public function getDescricao()
            {
                        return $this->Descricao;
            }

         
            public function setDescricao($Descricao)
            {
                        $this->Descricao = $Descricao;

                        return $this;
            }
        }
?> 
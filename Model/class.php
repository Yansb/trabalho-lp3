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
            
        class Setor
        {
            Protected $Nome; 
            Protected $Codigo; 
            Protected $Email;
            Protected $Telefone; 



            public function __construct($Codigo="",$Nome="", $Email="",$Telefone="" ){

                $this->Nome = $Nome;
                $this->Email = $Email; 
                $this->Telefone = $Telefone; 
                $this->Codigo=$Codigo;

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
            Protected $DataHoraAbertura; 
            Protected $DataHoraFechamento;
            Protected $Prioridade;
            Protected $Numero;
            Protected $Arquivo; 
            Protected $OBS; 
            Protected $Setor;
            Protected $Problema; 
            

            public function __construct($Numero="",$Descricao="",$Setor="",$Problema="",$Arquivo="",$OBS="",$DataHoraAbertura="")
            {
                $this->Status = "Aberto";
                $this->Descricao = $Descricao;
                $this->DataHoraAbertura = $DataHoraAbertura;
                $this->Prioridade = "Normal"; 
                $this->Setor= $Setor;
                $this->Problema= $Problema;
                $this->Arquivo= $Arquivo;
                $this->OBS= $OBS;
                $this->Numero= $Numero;

             
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

           
            public function setDescricao($Descricao)
            {
                        $this->Descricao = $Descricao;
                        return $this;
            }

            public function getDataHoraAbertura()
            {
                        return $this->DataHoraAbertura;
            }

            
            public function setDataHoraAbertura($DataHoraAbertura)
            {
                        $this->DataHoraAbertura = $DataHoraAbertura;

                        return $this;
            }
            
            public function getDataHoraFechamento()
            {
                        return $this->DataHoraFechamento;
            }

            
            public function setDataHoraFechamento($DataHoraFechamento)
            {
                        $this->DataHoraFechamento = $DataHoraFechamento;

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
            public function getArquivo()
            {
                        return $this->Arquivo;
            }

          
            public function setArquivo($Arquivo)
            {
                        $this->Arquivo = $Arquivo;

                        return $this;
            }
            public function getOBS()
            {
                        return $this->OBS;
            }

            
            public function setOBS($OBS)
            {
                        $this->OBS = $OBS;

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
            public function getProblema()
            {
                        return $this->Problema;
            }
           
            public function setProblema($Problema)
            {
                        $this->Problema = $Problema;

                        return $this;
            }
        }
        //fim classe chamado 

        class ChamadoSoftware extends Chamado {
    
            Protected $Link; 
            Protected $Plugin;
           

            public function __construct($Numero="",$Descricao="",$Setor="",$Problema="",$Arquivo="",$OBS="",$DataHoraAbertura="",$Link="",$Plugin=""){

                parent:: __construct($Numero="",$Descricao="",$Setor="",$Problema="",$Arquivo="",$OBS="",$DataHoraAbertura=""); 

                $this->Link= $Link;
                $this->Plugin= $Plugin;
                $this->Problema= "Instalação de Software"; 
            }

            public function getLink(){

                return $this->Link;
            }

            public function setLink($Link){

                $this->Link= $Link;
                return $this; 
            }
            public function getPlugin(){
                
                return $this->Plugin;
            }

            public function setPlugin($Plugin){

                $this->Plugin= $Plugin;
                return $this; 
            }

            

        } 
        //Fim classe ChamadoSoftware
    
        class Problemas
        {

            Protected $Codigo; 
            Protected $Nome;
            
            public function __construct($Codigo="",$Nome=""){
                $this->Nome = $Nome; 
                $this->Codigo = $Codigo; 
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

            public function Adicionar(){

            }
            public function Remover($Codigo){
                
            }
            public function Renomear($Codigo){
                
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

            public function Alterar($Descricao){

                $this->setDescricao($Descricao);
            }
        
            
            

          
           
        }
?> 

<?php



        
            
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


        
?> 

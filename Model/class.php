<?php


        require_once "classDAO.php";
        
            
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

            public function Adicionar(){
                $Setor= new SetorDAO();
                return $Setor->Adicionar($this);

            }
            public function Remover(){
                $Setor = new SetorDAO();
                return $Setor->Remover($this);
                
            }
            public function Alterar($Campo,$Novo){
                $Setor = new SetorDAO();
                return $Setor->Alterar($this,$Campo,$Novo);
                
            }

            public function BuscarTodos(){
                $Setor= new SetorDAO(); 
                return $Setor->BuscarTodos(); 
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
        
        
       
    
        class Problema
        {

            Protected $Codigo; 
            Protected $Nome;
            
            public function __construct($Codigo="",$Nome=""){
                $this->Nome = $Nome; 
                $this->Codigo = $Codigo;    
            } 
            public function Adicionar(){
                $Prob = new ProblemaDAO();
                return $Prob->Adicionar($this);

            }
            public function Remover(){
                $Prob = new ProblemaDAO();
                return $Prob->Remover($this);
                
            }
            public function Alterar(){
                $Prob = new ProblemaDAO();
                return $Prob->Alterar($this);
                
            }
            public function BuscarTodos(){
                $Prob = new ProblemaDAO();
                return $Prob->BuscarTodos(); 
            } 

            public function Select(){
               $Resultado= $this->BuscarTodos(); 
               $quant= count($Resultado);

               echo "<select class='custom-select custom-select-lg mb-3' name='Problema' id='Problema'>";
               for($i=0;$i<$quant;$i++){ 
                echo "<option value= '".$Resultado[$i][0]."'>".$Resultado[$i][1]."</option>"; 
                }
                 echo "</select>";
      
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


        
?> 

<?php
    include "ConnectionFactory.php";


class ChamadoDAO{

    public function Adicionar($Chamado,$Usuario){

        //codigo para conetar e incluir no banco
        echo $Usuario->getNome();
        echo $Chamado->getDescricao();
        return 2; 
        
    
    }

    public function Remover($Chamado){

        //codigo para conetar e remover no banco
       
        $Chamado->getNumero();
        return true; 
    
    }

    
}

// Fim ChamadoDAo


?>
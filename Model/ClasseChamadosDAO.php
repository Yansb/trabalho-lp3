<?php



class ChamadoDAO{

    public function Adicionar($Chamado,$Usuario){

        //codigo para conetar e incluir no banco
        $Usuario->getNome();
        $Chamado->getDescricao();
        return true; 
    
    }

    public function Remover($Chamado){

        //codigo para conetar e remover no banco
       
        $Chamado->getNumero();
        return true; 
    
    }

    
}

// Fim ChamadoDAo


?>
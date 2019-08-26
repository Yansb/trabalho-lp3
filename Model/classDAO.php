<?php
        class ProblemaDAO{

            public function Adicionar(){
                return 1;
            }

            public function Remover(){
                return 1;
            }
            public function Alterar($Velho,$Novo){
                return 1;
            }
        }

    
        // Fim class ProblemaDAO

        class SetorDAO{

            public function Adicionar(){
                return 0;
            }

            public function Remover(){
                return 1;
            }
            public function Alterar($Velho,$Novo){
                return 1;
            }

        }

?>
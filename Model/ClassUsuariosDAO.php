<?php

   include "ConnectionFactory.php";
            class TecnicoDAO{

                public function Logar($Tecnico){
                    return true; 
                }
            }

            //Fim class TecnicoDAO


            class GerenteDAO extends TecnicoDAO {

                public function Adicionar($GerenteDAO){    
                    echo $GerenteDAO->getNome()."<br>";
                    echo $GerenteDAO->getCPF()."<br>";
                    echo $GerenteDAO->getTelefone()."<br>";
                    echo $GerenteDAO->getEmail()."<br>";
                    return true;

                }
                public function Remover($GerenteDAO){


                    return true;
                }

                public function Alterar($GerenteDAO){


                    return true;
                }

            }

            //Fim classe



?>
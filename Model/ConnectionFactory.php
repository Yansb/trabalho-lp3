<?php   

    class ConnectionFactory
    {

        public static function getConnection(){
            $Servername="localhost:3307";
            $Username="";
            $Password="";
            $Dbname="";

            // colocar as informaçoes de acordo com as do servidor; 

            try{
                $Connection= new PDO("mysql:host=$Servername;dbname=$Dbname",$Username,$Password);

                $Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $Connection;

                

            }
            catch(PDOException $Erro){

                echo "Erro na conexão ".$Erro->getMessage();

            }
        }

    }
?>
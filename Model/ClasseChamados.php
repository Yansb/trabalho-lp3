<?php 

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

            public function Adicionar()
            {
                return true;
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
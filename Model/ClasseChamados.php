<?php 

include "ClasseChamadosDAO.php";
        class Chamado
        {
            Protected $Status; 
            Protected $Descricao;
            Protected $DataHoraAbertura; 
            Protected $DataHoraFechamento;
            Protected $Prioridade;
            protected $Tombo; 
            Protected $Numero;
            Protected $Arquivo; 
            Protected $OBS; 
            Protected $Setor;
            Protected $Problema; 
            Protected $Solicitante;
            Protected $Tecnico; 
            

            public function __construct($Numero="",$Descricao="",$Status="",$Setor="",$Problema="",$Prioridade="",$Arquivo="",$OBS="",$DataHoraAbertura="",$DataHoraFechamento="",$Solicitante="",$Tombo="",$Tecnico="")
            {
                $this->Status = $Status; 
                $this->Descricao = $Descricao;
                $this->DataHoraAbertura = $DataHoraAbertura;
                $this->Prioridade = $Prioridade; 
                $this->Setor= $Setor;
                $this->Problema= $Problema;
                $this->Arquivo= $Arquivo;
                $this->OBS= $OBS;
                $this->Numero= $Numero;
                $this->Tecnico = $Tecnico; 
                $this->Tombo = $Tombo; 
                $this->Solicitante = $Solicitante; 
                $this->DataHoraFechamento = $DataHoraFechamento;  

            
            }

            public function Adicionar()
            {
                $Chamado = new ChamadoDAO();
                return $Chamado->Adicionar($this); 
            }
            public function Remover()
            {
                $Chamado = new ChamadoDAO();
                return $Chamado->Remover($this); 
            }

            public function Pesquisar($Tipo){
                $Chamado= new ChamadoDAO();
                return $Chamado->Pesquisar($this,$Tipo); 

            }
            public function Alterar()
            {
                $Chamado= new ChamadoDAO();
                return $Chamado->Alterar();

            }

            Public function BuscarTodos()
            {
                $Chamado= new ChamadoDAO(); 
                return $Chamado->BuscarTodos(); 
            }
            
            Public function BuscarUsuario($Usuario) // busca todos chamados aberto de determinado usuario; 
            {
                $Chamado= new ChamadoDAO(); 
               return $Chamado->BuscarUsuario($Usuario);
          
              
            }
            
            public function Encaminhar()
            {
                    $Chamado = new ChamadoDAO();
                    return $Chamado->Encaminhar($this);
            }
            public function Atender()
            {
                $Chamado = new ChamadoDAO();
                
                return $Chamado->Atender($this);
            }
            public function Finalizar()
            {
                
            }

            public function VerificarAtendente(){
                  $Chamado = new ChamadoDAO();
                  return $Chamado->VerificarAtendente($this);
            }
          
            public  function PrintUserTabela($Usuario)
            {
           
                $Resultado = $this->BuscarUsuario($Usuario); 
                $quant = Count($Resultado); 
                for($i=0;$i<$quant;$i++){ 
            
                    echo "<tr>"; 
                    echo "<td scope='row'><a href='chamadoAtual.php'>".$Resultado[$i][0]."</a></td>";
                    echo "<td><a href='chamadoAtual.php'>".$Resultado[$i][1]." </a></td>"; 
                    echo"<td>".$Resultado[$i][2]."</td>";
                    echo"<td>".$Resultado[$i][4]."</td>";  
                    echo"<td class='bg-danger'>".$Resultado[$i][5]."</td>"; 
                    echo"<td>".$Resultado[$i][6]."</td>";  
                    echo"<td>".$Resultado[$i][7]."</td>"; 
                    echo"<td>tem que fazer</td>";  
                   echo "</tr>"; 
          
        
                }
                
            }
            public function getTombo()
            {
                        return $this->Tombo;
            }

            
            public function setTombo($Tombo)
            {
                        $this->Tombo = $Tombo;

                        return $this;
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
            public function getSolicitante()
            {
                        return $this->Solicitante;
            }

    
            public function setSolicitante($Solicitante)
            {
                        $this->Solicitante = $Solicitante;

                        return $this;
            }

            public function getTecnico()
            {
                        return $this->Tecnico;
            }

          
            public function setTecnico($Tecnico)
            {
                        $this->Tecnico = $Tecnico;

                        return $this;
            }
        }
        //fim classe chamado 

        class ChamadoSoftware extends Chamado {

            Protected $Link; 
            Protected $Plugin;
        

            public function __construct($Numero="",$Descricao="",$Setor="",$Problema="",$Arquivo="",$OBS="",$DataHoraAbertura="",$Link="",$Plugin=""){

                parent:: __construct($Numero,$Descricao,$Setor,$Problema,$Arquivo,$OBS,$DataHoraAbertura); 

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
            Protected $DataHora;
            Protected $Descricao; 
            Protected $Codigo;
            Protected $Chamado; 

            public function __construct($DataHora="",$Descricao="" ,$Codigo="", $Chamado=""){
                $this->DataHora= $DataHora; 
                $this->Descricao = $Descricao; 
                $this->Codigo= $Codigo; 
                $this->Chamado = $Chamado; 


            }


            public function getDataHora()
            {
                        return $this->DataHora;
            }

            
            public function setDataHora($Data)
            {
                        $this->Data = $DataHora;

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

            public function Alterar(){
                $Historico = new HistoricoChamadoDAO(); 
                return $Historico->Alterar($this);
            }

            public function Adicionar(){
                $Historico = new HistoricoChamadoDAO(); 
                return $Historico->Adicionar($this);
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

          
            public function getChamado()
            {
                        return $this->Chamado;
            }

        
            public function setChamado($Chamado)
            {
                        $this->Chamado = $Chamado;

                        return $this;
            }
        }

?>
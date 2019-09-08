<?php
include_once "ConnectionFactory.php";


class ChamadoDAO
{

    public function Adicionar($Chamado)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("insert into myb1.chamado(abertura,tombo_patrimonio,estado,arquivo,descricao,id_problema,cpf_usuario,codigo_setor,obs,prioridade) values (:abertura,:tombo,:status,:arquivo,:descricao,:problema,:cpf,:setor,:obs,:prioridade)"); // codigo sql 
            $SQL->bindParam('tombo',$Tombo);
            $SQL->bindParam('status', $Status);
            $SQL->bindParam('cpf',$CPF);
            $SQL->bindParam('descricao', $Descricao);
            $SQL->bindParam('abertura', $Abertura);
            $SQL->bindParam('prioridade', $Prioridade);
            $SQL->bindParam('arquivo', $Arquivo);
            $SQL->bindParam('obs', $OBS);
            $SQL->bindParam('setor', $Setor);
            $SQL->bindParam('problema', $Problema);
            

   
            $Tombo = $Chamado->getTombo(); 
            $Status = $Chamado->getStatus();
            $CPF = $Chamado->getSolicitante(); 
            $Descricao = $Chamado->getDescricao();
            $Abertura = $Chamado->getDataHoraAbertura();
            $Prioridade = $Chamado->getPrioridade();
            $Arquivo = $Chamado->getArquivo();
            $OBS = $Chamado->getOBS();
            $Setor = $Chamado->getSetor();
            $Problema = $Chamado->getProblema();
            

            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException  $Erro) {
            echo "Erro ao  cadastrar chamado" . $Erro->getmessage();
            return;
        }
        $Minhaconexao = NULL;
    }

    public function Remover($Chamado)
    {

        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare(""); // codigo sql 

            $SQL->bindParam("numero", $Numero);
            $Numero = $Chamado->getNumero();

            $SQL->execute();

            return $SQL->rowcount();
        } catch (PDOException $Erro) {
            echo "erro ao Remover chamado" . $Erro->getmessage();
            return;
        }

        $Minhaconexao = null;
    }

    public function Alterar()
    { }


    public function Pesquisar($Chamado, $Tipo)
    {


        try {
            $Minhaconexao = ConnectionFactory::getconnection();
            if ($Tipo === "Periodo") {
                $SQL = $Minhaconexao->prepare("");
                $SQL->bindParam("incio", $Inicio);
                $SQL->bindParam("fim", $Fim);
                $Inicio = $Chamado->getDataHoraAbertura();
                $Fim = $Chamado->getDataHoraFechamento();

                // falta o return com dados 
            }else {
                if ($Tipo === "Numero") {
                    $SQL = $Minhaconexao->prepare("");
                    $SQL->bindParam("numero", $Numero);
                    $Numero = $Chamado->getNumero();
                } else {
                    if ($Tipo === "Setor") {
                        
                        $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante ,s.nome as setor,c.estado as situacao,c.prioridade,c.abertura
                        from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                        inner join myb1.setor s on c.codigo_setor= s.codigo 
                        inner join myb1.usuario u on c.cpf_usuario = u.cpf
                        where s.nome =:setor ");
                        $SQL->bindParam("setor",$Setor);
                        $Setor = $Chamado->getSetor();
                      
                
                    }else {
                        if ($Tipo === "Solicitante") {
                            $SQL = $Minhaconexao->prepare("");
                            $SQL->bindParam("Solicitante",$Solicitante); 
                            //$Solicitante = $Chamado->getSolicitante(); 
                        } else {
                            if ($Tipo === "Estado") {
                                $SQL = $Minhaconexao->prepare("");
                                $SQL->bindParam("estado", $Status);
                                $Status = $Chamado->getStatus();
                            } else {
                                if ($Tipo === "Prioridade") {
                                    $SQL = $Minhaconexao->prepare("");
                                    $SQL->bindParam("numero", $Prioridade);
                                    $Prioridade = $Chamado->getNumero();
                                } else {
                                    if ($Tipo === "Atendente") {
                                        $SQL = $Minhaconexao->prepare("");
                                        $SQL->bindParam("numero", $Atendente);
                                        $Atendente = $Chamado->getAtendente();
                                    } else {
                                        $SQL = $Minhaconexao->prepare("");
                                        //$SQL->bindParam("qtds", $Qtds);
                                        //$Qtds= $Chamado->getQtds();
                                        // qtd dias
                                    }
                                }
                            }
                        }
                    }
                }
        
               
            }
            $SQL->execute(); 
            $SQL->setFetchMode(PDO::FETCH_ASSOC); 
            $vet = array();
            $i = 0; 
            where($linha = $SQL->fetch(PDO::FETCH_ASSOC))
            {
               //$vet[$i] = array($linha['numero'],$linha['descricao'],$linha['atendente'],$linha['solicitante'],$linha['setor'],$linha['situacao'],$linha['prioridade'],$linha['abertura']);
                $i++; 
            }
            return $vet; 
        } catch (PDOExcepetion $Erro) {
            echo $Erro->getmessage();
        }
        $Minhaconexao = NULL;
    }

    public function BuscarTodos(){
        try{
            $Minhaconexao = ConnectionFactory::getconnection(); 

            $SQL= $Minhaconexao->prepare("select * from myb1.chamado"); 
            $SQL->execute(); 
            $SQL->setFetchMode(PDO::FETCH_ASSOC); 
            $vet = array();
            $i=0; 
            
            while($linha= $SQL->fetch(PDO::FETCH_ASSOC)){

                $vet[$i]= array($linha[''],$linha[''],$linha['']); // continuar 
                $i++; 

            }
                return $vet; 
        }catch(PDOException $Erro ){

            echo $Erro->getmessage(); 
            return 0; 
        }
        $Minhaconexao=NULL; 
    }

    public function BuscarUsuario($Usuario){
        try{
            $Minhaconexao= ConnectionFactory::getConnection(); 
            $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado as situacao, c.prioridade, c.abertura
            from myb1.chamado c inner join myb1.usuario u on c.cpf_usuario = u.cpf 
            inner join myb1.setor s on c.codigo_setor = s.codigo
            left join myb1.funcionario f on f.cpf= c.cpf_funcionario 
            where c.estado = 'Em Aberto' and c.cpf_usuario =:cpf" ); 
            $SQL->bindParam('cpf',$CPF);
            $CPF= $Usuario->getCPF(); 

            $SQL->execute(); 
            $SQL->setFetchMode(PDO::FETCH_ASSOC); 
            $vet = array();
            $i = 0; 

            while($linha= $SQL->fetch(PDO::FETCH_ASSOC))
            {
              $vet[$i]= array($linha['numero'], $linha['descricao'],$linha['atendente'],$linha['solicitante'],$linha['setor'],$linha['situacao'],$linha['prioridade'],$linha['abertura']); 
              $i++;  
            }
            return $vet; 


        }catch(PDOException $Erro){
            echo $Erro; 
        }
        $Minhaconexao= null; 
    }
}    

// Fim ChamadoDAo

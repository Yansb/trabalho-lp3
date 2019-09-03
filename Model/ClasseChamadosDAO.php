<?php
include_once "ConnectionFactory.php";


class ChamadoDAO
{

    public function Adicionar($Chamado, $Usuario)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare(""); // codigo sql 
            $SQL->bindParam('status', $Status);
            $SQL->bindParam('descricao', $Descricao);
            $SQL->bindParam('datahoraabertura', $DataHoraAbertura);
            $SQL->bindParam('prioridade', $Prioridade);
            $SQL->bindParam('arquivo', $Arquivo);
            $SQL->bindParam('obs', $OBS);
            $SQL->bindParam('setor', $Setor);
            $SQL->bindParam('problema', $Problema);
            $SQL->bindParam('nome', $Nome);
            $SQL->bindParam('cpf', $CPF);
            $SQL->bindParam('telefone', $Telefone);
            $SQL->bindParam('email', $Email);

            $Status = $Chamado->getStatus();
            $Descricao = $Chamado->getDescricao();
            $DataHoraAbertura = $Chamado->getDataHoraAbertura();
            $Prioridade = $Chamado->getPrioridade();
            $Arquivo = $Chamado->getArquivo();
            $OBS = $Chamado->getOBS();
            $Setor = $Chamado->getSetor();
            $Problema = $Chamado->getChamado();
            $Nome = $Usuario->getCPF();
            $CPF = $Usuario->getCPF();
            $Telefone = $Usuario->getTelefone();
            $Email = $Usuario->getEmail();

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
            } else {
                if ($Tipo === "Numero") {
                    $SQL = $Minhaconexao->prepare("");
                    $SQL->bindParam("numero", $Numero);
                    $Numero = $Chamado->getNumero();
                } else {
                    if ($Tipo === "Setor") {
                        $SQL = $Minhaconexao->prepare("");
                        $SQL->bindParam("setor", $Setor);
                        $Setor = $Chamado->getSetor();
                    } else {
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
                $SQL->execute();
                return true;
            }
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
            $i; 
            
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
}    

// Fim ChamadoDAo

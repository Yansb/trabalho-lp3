<?php
require_once "../Model/classeChamados.php";


if (isset($_GET['Acao'])) {
    if ($_GET['Acao'] === "Atender") {

        $Chamado = new Chamado($_GET['Numero']);
        $Chamado->setTecnico($_GET['Tecnico']);
        $Chamado->setStatus("finalizado");
        if ($Chamado->VerificarEstado() == 0) {
            if ($Chamado->VerificarAtendente() == NULL) {

                if ($Chamado->Atender() > 0) {

                    header("Location: ../View/Chamados.php");
                } else {
                    echo "erro ao atender";
                }
            } else {
                echo "chamado já em atendimento";
            }
        } else {
            echo "Erro Chamado já foi Finalizado";
        }
    } else {
        if ($_GET['Acao'] === "Cancelar") {

            $Chamado = new Chamado($_GET['Numero']);
            $Chamado->setStatus("Em Aberto");
            if ($Chamado->VerificarEstado()) {
                if ($Chamado->Remover() > 0) {
                    echo "cancelado com sucesso";
                }
            } else {

                echo "Chamado não pode ser cancelado pois já está em atendimento ";
            }
        }
    }
} else {


    if (isset($_POST['Acao'])) {

        if ($_POST['Acao'] === "Finalizar") {
            $Atual = new DateTime();
            $DataHora = $Atual->format('d-m-Y H:i:s');
            $Descricao = $_POST["Finalizar"];

            $Historico = new HistoricoChamado($DataHora, $Descricao);
            $Historico->setChamado($_POST['Numero']);

            $Chamado = new Chamado($_POST['Numero']);

            $Chamado->setStatus("finalizado");

            if ($Chamado->VerificarEstado() == 0) {
                if ($Chamado->Finalizar() > 0 && $Historico->adicionar() > 0) {

                    header("Location: ../View/Chamados.php");
                }
            } else {
                echo "Erro Chamado já foi finalizado ";
            }
        } else {
            if ($_POST['Acao'] === "Tombo") { } else {
                if ($_POST['Acao'] === "Encaminhar") {
                    $Chamado = new Chamado($_POST['Numero']);
                    $Chamado->setStatus("finalizado");
                    $Chamado->setTecnico($_POST['CPF']);
                    $Chamado->setSetor($_POST['Codigo']);
                    if ($Chamado->VerificarEstado() == 0) {
                        if ($Chamado->Encaminhar())
                            header("Location: ../View/Chamados.php");
                    } else {
                        echo "Chamado já foi finalizado não pode ser Encaminhado";
                    }
                } else {
                    if ($_POST['Acao'] === "Historico") {
                        $Chamado = new Chamado($_POST['Numero']);
                        $Chamado->setStatus("finalizado");
                        if ($Chamado->VerificarEstado() == 0) {

                            $Atual = new DateTime();
                            $DataHora = $Atual->format('d-m-Y H:i:s');
                            $Descricao = $_POST["Descricao"];
                            $Historico = new HistoricoChamado($DataHora, $Descricao);
                            $Historico->setChamado($_POST['Numero']);


                            if ($Historico->adicionar() > 0) {
                                header("Location: ../View/ChamadoAtual.php");
                            }
                        } else {

                            echo " Não pode fazer alteração no Historico de chamado Finalizado";
                        }
                    } else {
                        if ($_POST['Acao'] === "Prioridade") {
                            $Chamado = new Chamado($_POST['Numero']);
                            $Chamado->setStatus("finalizado");
                            if ($Chamado->VerificarEstado() == 0) {

                                $Chamado->setPrioridade($_POST['Prioridade']);
                                if ($Chamado->MudarPrioridade() > 0) {
                                    header("Location: ../View/Chamados.php");
                                }
                            } else {
                                echo "erro Chamado já foi finalizado";
                            }
                        }
                    }
                }
            }
        }
    }
}

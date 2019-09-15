<?php
include_once '../Model/ClasseChamados.php';
include_once '../Model/ClassUsuarios.php';
session_start();
if (isset($_POST['Pesquisar'])) {
    $Pesquisar = $_POST['Pesquisar'];

    $Chamado = new Chamado();


    if ($Pesquisar == "Periodo") {



        $Chamado->setDataHoraAbertura($_POST['Inicio']);
        $Chamado->setDataHoraFechamento($_POST['Fim']);
        $Resultado = $Chamado->Pesquisar($Pesquisar);
        $_SESSION["Chamado2"] = $Chamado;
        $_SESSION["Tipo"] = "Periodo";

        header("Location: ../View/Chamados.php");
    } else {
        if ($Pesquisar == "Numero") {
            $Chamado->setNumero($_POST['Numero']);
            $_SESSION["Chamado"] = $Chamado;
            $_SESSION["Tipo"] = "Numero";

            header("Location: ../View/Chamados.php");
        } else {
            if ($Pesquisar == "Problema") {

                $Chamado->setProblema($_POST['Problema']);
                $_SESSION["Chamado"] = $Chamado;
                $_SESSION["Tipo"] = "Problema";

                header("Location: ../View/Chamados.php");
            } else {
                if ($Pesquisar == "Setor") {

                    $Chamado->setSetor($_POST['Codigo']);
                    $_SESSION["Chamado"] = $Chamado;
                    $_SESSION["Tipo"] = "Setor";

                    header("Location: ../View/Chamados.php");
                } else {
                    if ($Pesquisar == "Solicitante") {
                        $Chamado->setSolicitante($_POST['Solicitante']);

                        $_SESSION["Chamado"] = $Chamado;
                        $_SESSION["Tipo"] = "Solicitante";

                        header("Location: ../View/Chamados.php");
                    } else {
                        if ($Pesquisar == "Estado") {
                            $Chamado->setStatus($_POST['Estado']);
                            $_SESSION["Chamado"] = $Chamado;
                            $_SESSION["Tipo"] = "Estado";

                            header("Location: ../View/Chamados.php");
                        } else {
                            if ($Pesquisar == "Prioridade") {

                                $Chamado->setPrioridade($_POST['Prioridade']);
                                $_SESSION["Chamado"] = $Chamado;
                                $_SESSION["Tipo"] = "Prioridade";

                                header("Location: ../View/Chamados.php");
                            } else {
                                if ($Pesquisar == "Atendente") {

                                    $Chamado->setTecnico($_POST['CPF']);
                                    $_SESSION["Chamado"] = $Chamado;
                                    $_SESSION["Tipo"] = "Atendente";

                                    header("Location: ../View/Chamados.php");
                                } else {

                                    if ($Pesquisar == "Padrao") {

                                        $Chamado->setSetor($_SESSION["Tecnico"]->getSetor());
                                       $Chamado->getSetor();
                                        $_SESSION["Chamado"] = $Chamado;
                                        $_SESSION["Tipo"] = "Normal";

                                        header("Location: ../View/Chamados.php");
                                    } else {
                                        /// qtdias
                                        $QtdDias = $_POST['Qtdias'];
                                        // $Chamado->setQtdias($_POST['Qtdias']);
                                        $_SESSION["Chamado"] = $Chamado;
                                        $_SESSION["Tipo"] = "Qtdias";

                                        header("Location: ../View/Chamados.php");
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
if (isset($_GET['Acao'])) {
    $Acao = $_GET['Acao'];

    if ($Acao === "Busca") {

        $Chamado = new Chamado($_GET['Numero']);

        if ($Chamado->PesquisarAtual()) {
            $_SESSION['Chamado2'] = $Chamado;

            $Usuario = new Usuario();
            $Usuario->setCPF($Chamado->getSolicitante());

            $Usuario->VerificarCPF();


            $_SESSION['Usuario'] = $Usuario;

            if ($_GET['Pagina'] == "1") {
                header('location: ../View/ChamadoAtualUsuario.php');
            } else {
                header('location: ../View/chamadoAtual.php');
            }
        }
    }
}


if (isset($_POST['PesqUsuario'])) {
    $Pesquisar = $_POST['PesqUsuario'];
    $Chamado = new Chamado();
    if ($Pesquisar == "Numero") {

        $Chamado->setNumero($_POST['Numero2']);
        $_SESSION["Chamado"] = $Chamado;
        echo  $Chamado->getNumero();
        $_SESSION["Tipo"] = "Numero";


        header("Location: ../View/usuario.php");
    } else {
        if ($Pesquisar == "Setor") {

            $Chamado->setSetor($_POST['Codigo']);
            $_SESSION["Chamado"] = $Chamado;
            $_SESSION["Tipo"] = "Setor";

            header("Location: ../View/usuario.php");
        } else {
            if ($Pesquisar == "Padrao") {

                $_SESSION["Tipo"] = "Normal";

                header("Location: ../View/usuario.php");
            }
        }
    }
}

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

                if ($Chamado->Pesquisar($Pesquisar)) {
                    echo "FOi";
                } else {
                    echo "não foi";
                }
            } else {
                if ($Pesquisar == "Numero") {
                    $Chamado->setNumero($_POST['Numero']);
                    if ($Chamado->Pesquisar($Pesquisar)) { } else { }
                } else {
                    if ($Pesquisar == "Equipamento") {

                        $Chamado->setEquipamento($_POST['Equipamento']);

                        if ($Chamado->Pesquisar($Pesquisar)) { } else { }
                    } else {
                        if ($Pesquisar == "Setor") {

                            $Chamado->setSetor($_POST['Setor']);
                            if ($Chamado->Pesquisar($Pesquisar)) { } else { }
                        } else {
                            if ($Pesquisar == "Solicitante") {
                                $Solicitante = $_POST['Solicitante'];
                                if ($Chamado->Pesquisar($Pesquisar)) { } else { }
                            } else {
                                if ($Pesquisar == "Estado") {

                                    $a = $_POST['Estado'];
                                    if ($Chamado->Pesquisar($Pesquisar)) { } else { }
                                } else {
                                    if ($Pesquisar == "Prioridade") {
                                        $Prioridade = $_POST['Prioridade'];
                                        if ($Chamado->Pesquisar($Pesquisar)) { } else { }
                                    } else {
                                        if ($Pesquisar == "Atendente") {
                                            $Atendente = $_POST['Atendente'];
                                            if ($Chamado->Pesquisar($Pesquisar)) { } else { }
                                        } else {

                                            $QtdDias = $_POST['Qtdias'];
                                            if ($Chamado->Pesquisar($Pesquisar)) { } else { }
                                            // quantidade de dias 
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }else{
            if (isset($_GET['Acao'])) {
                $Acao = $_GET['Acao'];
                if ($Acao === "Busca") {
        
                    $Chamado = new Chamado($_GET['Numero']);
        
                    if ($Chamado->Pesquisar("Numero")) {
                        $_SESSION['Chamado'] = $Chamado;
                   
                        $Usuario = new Usuario();
                        $Usuario->setCPF($Chamado->getSolicitante());
                      
                        $Usuario->VerificarCPF();
                       
                          
                          $_SESSION['Usuario']=$Usuario;
                   
                        if($_GET['Pagina']=="1"){
                           header('location: ../View/ChamadoAtualUsuario.php');

                        }else{
                            header('location: ../View/chamadoAtual.php');
                        }
                        
                        
                    }
                }
            }

        }


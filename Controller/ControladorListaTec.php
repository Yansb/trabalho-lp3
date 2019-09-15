<?php
    require_once "../Model/class.php";
    require_once "../Model/ClassUsuarios.php";
       $Acao = $_GET["Acao"];
        if ($Acao === "Setor") {
            $Setor = new Setor();
            $Setor->setCodigo($_GET['Codigo']);
            if ($Setor->Remover())
                header("Location: ../View/ListaTec.php");
        } else {
            if ($Acao === 'Problemas') {
                $Problema = new Problema();
                $Problema->setCodigo($_GET['Codigo']);
                if ($Problema->Remover())
                    header("Location: ../View/ListaTec.php");
            } else {
                // Perfis 

                $Tecnico = new Tecnico();
                $Tecnico->setCPF($_GET['CPF']);
                if ($Tecnico->Remover())
                    header("Location: ../View/ListaTec.php");
            }
        }

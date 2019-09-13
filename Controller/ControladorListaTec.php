<?php
if (isset($_GET['Tabale'])) {
    $Tabela = $_GET['Tabale'];
    if ($Acao === "Setor") {
        $Setor = new Setor();
        $Setor->setCodigo($_GET['Codigo']);
        if ($Setor->Remover())
            header("Location: ../View/ListaTec");
    } else {
        if ($Acao === 'Problemas') {
            $Problema = new Problema();
            $Problema->setCodigo($_GET['Codigo']);
            if ($Problema->Remover())
                header("Location: ../View/ListaTec");
        } else {
            // Perfis 

            $Tecnico = new Tecnico();
            $Tecnico->setCPF($_GET['CPF']);
            if ($Problema->Remover())
                header("Location: ../View/ListaTec");
        }
    }
}

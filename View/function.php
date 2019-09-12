<?php

require_once "../Model/ClasseChamados.php";
require_once "../Model/ClassUsuarios.php";
require_once "../Model/class.php";
function Menu($Cargo)
{

    if ($Cargo === "Tecnico") {

        echo "<a class='dropdown-item' href='Chamados.php'>Chamados</a>";
        echo "<a class='dropdown-item' href='relatorios.php'>Relatórios</a>";
    } else {
        if ($Cargo === "Gerente") {
            echo "<a class='dropdown-item' href='Chamados.php'>Chamados</a>";
            echo "<a class='dropdown-item' href='cadastroSetor.php'>Cadastro Setor</a>";
            echo "<a class='dropdown-item' href='CadastroTecnico.php'>Cadastro Técnico</a>";
            echo "<a class='dropdown-item' href='problemas.php'>Cadastro Problemas</a>";
            echo "<a class='dropdown-item' href='relatorios.php'>Relatórios</a>";
        } else {
            echo "<a class='dropdown-item' href='Chamados.php'>Chamados</a>";
            echo "<a class='dropdown-item' href='cadastroSetor.php'>Cadastro Setor</a>";
            echo "<a class='dropdown-item' href='CadastroTecnico.php'>Cadastro Técnico</a>";
            echo "<a class='dropdown-item' href='problemas.php'>Cadastro Problemas</a>";
            echo "<a class='dropdown-item' href='relatorios.php'>Relatórios</a>";
            echo "<a class='dropdown-item' href='ListaTec.php'>Administrador</a>";
        }
    }
}

function Tabela($Tipo)
{

    if ($Tipo === "Perfis") {
        $Tecnico = new Tecnico();
        $quat = count($TecTabela = $Tecnico->BuscarTodos());

        for ($i = 0; $i < $quat; $i++) {
            echo "<tr>";
            echo "<th>" . $TecTabela[0][4] . "</th>"; // login
            echo " <th>nome</th>";
            echo "<th>cargo</th>";
            echo "<th> <button class='btn btn-info' type='submit' name='validar'> Excluir</button></th>";
            echo " <th> <a href='CadastroTecnico.php'> <button class='btn btn-info' type='submit' name='validar'> ADD</button></th></a>";
            echo "</tr>";
        }
    } else {
        if ($Tipo === "Setores") {
            $Setor = new Setor();
            $quat = count($TecTabela = $Setor->BuscarTodos());
            for ($i = 0; $i < $quat; $i++) {
                echo "<tr>";
                echo "<th>" . $TecTabela[0][0] . "</th>";
                echo " <th>Nome setor</th>";
                echo "<th>email </th>";
                echo "<th>ramal</th>";
                echo "<th> <button class='btn btn-info' type='submit' name='validar'> Excluir</button></th>";
                echo " <th> <a href='CadastroTecnico.php'> <button class='btn btn-info' type='submit' name='validar'> ADD</button></th></a>";
                echo "<tr>";
            }
        } else {
            $Problema = new Problema();
            $quat = count($TecTabela = $Problema->BuscarTodos());

            for ($i = 0; $i < $quat; $i++) {
                echo "<tr>";
                echo "<th>" . $TecTabela[0][0] . "</th>"; // codigo 
                echo " <th>Nome Problema</th>";
                echo "<th> <button class='btn btn-info' type='submit' name='validar'> Excluir</button></th>";
                echo " <th> <a href='CadastroTecnico.php'> <button class='btn btn-info' type='submit' name='validar'> ADD</button></th></a>";
                echo "</tr>";
            }
        }
    }
}

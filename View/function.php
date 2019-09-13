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
            echo "<th>" . $TecTabela[$i][3] . "</th>"; // login
            echo " <th>" . $TecTabela[$i][1] . "</th>";
            echo "<th>" . $TecTabela[$i][2] . "</th>";
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
                echo "<th>" . $TecTabela[$i][0] . "</th>";
                echo " <th>" . $TecTabela[$i][3] . "</th>";
                echo "<th>" . $TecTabela[$i][1] . "</th>";
                echo "<th>" . $TecTabela[$i][2] . "</th>";
                echo "<th> <button class='btn btn-info' type='submit' name='validar'> Excluir</button></th>";
                echo " <th> <a href='CadastroTecnico.php'> <button class='btn btn-info' type='submit' name='validar'> ADD</button></th></a>";
                echo "<tr>";
            }
        } else {
            $Problema = new Problema();
            $quat = count($TecTabela = $Problema->BuscarTodos());

            for ($i = 0; $i < $quat; $i++) {
                echo "<tr>";
                echo "<th>" . $TecTabela[$i][0] . "</th>"; // codigo 
                echo " <th>" . $TecTabela[$i][1] . "</th>";
                echo "<th> <button class='btn btn-info' type='submit' name='validar'> Excluir</button></th>";
                echo " <th> <a href='CadastroTecnico.php'> <button class='btn btn-info' type='submit' name='validar'> ADD</button></th></a>";
                echo "</tr>";
            }
        }
    }
}


function select($Tipo){
        if($Tipo==="Setor"){
            $Setor = new Setor(); 
            $Resultado = $Setor->BuscarTodos(); 
            $quant = Count($Resultado);
            echo "<select class='custom-select custom-select-lg mb-3' name='Codigo' id='Codigo'>";
            echo "<option value=''></option>";
            for($i=0;$i<$quant;$i++){ 

            echo "<option value='".$Resultado[$i][0]."'>".$Resultado[$i][3]."</option>"; 
            }
             echo "</select>";
        }else{
            if($Tipo==="Tecnico"){
      

                $Tecnico = new Tecnico();

                $Resultado = $Tecnico->BuscarTodos(); 
                $quant = Count($Resultado);
                echo "<select class='custom-select custom-select-lg mb-3' name='CPF' id='CPF'>";
                echo "<option value=''></option>";
                for($i=0;$i<$quant;$i++){ 
         
                        echo "<option value='".$Resultado[$i][0]."'>".$Resultado[$i][1]."</option>"; 
                }
                echo "</select>";
            }
        }
    
}

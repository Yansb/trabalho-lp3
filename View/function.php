<?php

require_once "../Model/ClasseChamados.php";
require_once "../Model/ClassUsuarios.php";
require_once "../Model/class.php";
require_once "../Model/Exception.php";
require_once "../Model/PHPMailer.php";
require_once "../Model/SMTP.php";



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
            echo "<th><a href='../Controller/ControladorListaTec.php?Acao=Tecnico&CPF=".$TecTabela[$i][0]."'> <button class='btn btn-info' > Excluir</button></th></a>";
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
                echo "<th> <a href='../Controller/ControladorListaTec.php?Acao=Setor&Codigo=".$TecTabela[$i][0]."'><button class='btn btn-info' > Excluir</button></th></a>";
                echo " <th> <a href='cadastroSetor.php'> <button class='btn btn-info' type='submit' name='validar'> ADD</button></th></a>";
                echo "<tr>";
            }
        } else {
            $Problema = new Problema();
            $quat = count($TecTabela = $Problema->BuscarTodos());

            for ($i = 0; $i < $quat; $i++) {
                echo "<tr>";
                echo "<th>" . $TecTabela[$i][0] . "</th>"; // codigo 
                echo " <th>" . $TecTabela[$i][1] . "</th>";
                echo "<th> <a href='../Controller/ControladorListaTec.php?Acao=Problemas&Codigo=".$TecTabela[$i][0] ."'><button class='btn btn-info' > Excluir</button></th></a>";
                echo " <th> <a href='problemas.php'> <button class='btn btn-info' type='submit' name='validar'> ADD</button></th></a>";
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
            }else{
                $Problema = new Problema();
                $Resultado= $Problema->BuscarTodos(); 
               $quant= count($Resultado);

               echo "<select class='custom-select custom-select-lg mb-3' name='Problema' id='Problema'>";
               echo "<option value= ''</option>"; 
               for($i=0;$i<$quant;$i++){ 
                echo "<option value= '".$Resultado[$i][0]."'>".$Resultado[$i][1]."</option>"; 
                }
                 echo "</select>";
                
            }
        }
    
}

function pedeSenha(){
   echo'<div id="exterior">';
   echo'<div   id="interior" id="alterar-form"">';
   echo'<form method="POST" action="">';
   echo'<p>Insira sua senha : </p> <input class="form-control" type="alterar-setor" name="senha" />';
   echo'</form>';
   echo'<p>';
   echo '<a href=""><button id="mudar" class="btn btn-info" aria-controls="mudar">Confirmar</button></a>';
   echo '<button id="voltar-alterar" class="btn btn-info" aria-controls="voltar-alterar">Voltar</button>';
   echo'</p>';
  echo'</div>';
    echo '</div>';
}



function enviaEmail(){
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "yansbarreiro@gmail.com";//conta gmail
    $mail->Password = "SENHA GMAIL";//por motivos obvios n deixei a minha aqui
    $mail->SetFrom("yansbarreiro@gmail.com");//n sei
    $mail->Subject = "Test";//assunto do email
    $mail->Body = "hello";//email em si
    $mail->AddAddress("yansbarreiro@gmail.com");//email q quer enviar

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent";
    }
}
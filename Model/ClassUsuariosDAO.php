<?php

include_once "ConnectionFactory.php";

class UsuarioDAO
{

    public function VerificarCPF($Usuario)
    {

        try {

            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("select *from myb1.usuario where cpf=:cpf"); // codigo sql 
            $SQL->bindParam('cpf', $CPF);
            $CPF = $Usuario->getCPF();

            $SQL->execute();
            $SQL->setFetchMode(PDO::FETCH_ASSOC);
            $Resultado = 0;


            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {

                $Resultado = $linha["cpf"];
                $Usuario->setCPF($Resultado);
                $Usuario->setNome($linha["nome"]);
                $Usuario->setEmail($linha["email"]);
                $Usuario->setTelefone($linha["telefone"]);
            }

            return $Resultado;
        } catch (PDOException $Erro) {

            echo "Erro ao verificar CPF " . $Erro->getmessage();

            return;
        }

        $Minhaconexao = null;
    }
    public function Inserir($Usuario)
    {
        try {
            $Minhaconexao = ConnectionFactory::getConnection();

            $SQL = $Minhaconexao->prepare("insert into myb1.usuario(cpf,nome,email,telefone) values (:cpf,:nome,:email,:telefone)");
            $SQL->bindParam('cpf', $CPF);
            $SQL->bindParam('nome', $Nome);
            $SQL->bindParam('email', $Email);
            $SQL->bindParam('telefone', $Telefone);
            $CPF = $Usuario->getCPF();
            $Nome = $Usuario->getNome();
            $Email = $Usuario->getEmail();
            $Telefone = $Usuario->getTelefone();

            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo $Erro;
        }
        $Minhaconexao = Null;
    }


    public function Buscar($Usuario)
    {

        try {

            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("select *from myb1.usuario where cpf=:cpf"); // codigo sql 
            $SQL->bindParam('cpf', $CPF);
            $CPF = $Usuario->getCPF();

            $SQL->execute();
            $SQL->setFetchMode(PDO::FETCH_ASSOC);
            $Resultado = 0;
            $i = 0;

            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                $Resultado = $linha["cpf"];
                $i++;
            }

            return $Resultado;
        } catch (PDOException $Erro) {

            echo "Erro ao verificar CPF " . $Erro->getmessage();

            return;
        }

        $Minhaconexao = null;
    }
}

// fim classe UsuarioDAO


class TecnicoDAO extends UsuarioDAO
{

    public function Logar($Tecnico)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("select f.nome, f.cargo, s.nome as setor, f.cpf from myb1.funcionario f inner join myb1.setor s on f.codigo = s.codigo where f.login=:login and senha=:senha");
            $SQL->bindParam("login", $Login);
            $SQL->bindParam("senha", $Senha);

            $Login = $Tecnico->getLogin();
            $Senha = $Tecnico->getSenha();
            $SQL->execute();
            $SQL->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i = 0;

            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                $vet[$i] = array($linha['nome'], $linha['cargo'], $linha['setor'], $linha['cpf']);
                $i++;
            }
            return $vet;



            // continuar 

        } catch (PDOException $Erro) {

            echo $Erro->getmessage();
        }
        $Minhaconexao = null;
    }

    public function Adicionar($Tecnico)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("Insert into myb1.funcionario(cpf,nome,cargo,login,senha,telefone,email,codigo) values (:cpf,:nome,:cargo,:login,:senha,:telefone,:email,:setor)"); // codigo sql

            $SQL->bindParam('cpf', $CPF);
            $SQL->bindParam('nome', $Nome);
            $SQL->bindParam('cargo', $Cargo);
            $SQL->bindParam('login', $Login);
            $SQL->bindParam('senha', $Senha);
            $SQL->bindParam('telefone', $Telefone);
            $SQL->bindParam('email', $Email);
            $SQL->bindParam('setor', $Setor);


            $Nome = $Tecnico->getNome();
            $CPF = $Tecnico->getCPF();
            $Cargo = $Tecnico->getCargo();
            $Email = $Tecnico->getEmail();
            $Telefone = $Tecnico->getTelefone();
            $Login = $Tecnico->getLogin();
            $Senha = $Tecnico->getSenha();
            $Setor = $Tecnico->getSetor();


            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo "Erro ao adicionar tecnico" . $Erro->getmessage();
        }
        $Minhaconexao = NULL;
    }

    public function Remover($Tecnico)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("delete from myb1.funcionario where cpf = :cpf"); // codigo sql
            $SQL->bindParam('cpf', $CPF);

            $CPF = $Tecnico->getCPF();

            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo "Erro ao Remover tecnico" . $Erro->getmessage();
        }
        $Minhaconexao = NULL;
    }

    public function Alterar($Tecnico,$Campo, $Novo)
    {

        try {
            $Minhaconexao = ConnectionFactory::getconnection();
         
            if ($Campo === "telefone") {
         
                $SQL = $Minhaconexao->prepare("update myb1.funcionario set telefone=:novo where cpf=:cpf");
            } else {
                if ($Campo === "email") {
                    $SQL = $Minhaconexao->prepare("update myb1.funcionario set email=:novo where cpf=:cpf");
                } else {
                    if ($Campo === "nome") {
                        $SQL = $Minhaconexao->prepare("update myb1.funcionario set nome=:novo where cpf=:cpf");
                    } else {
                        if ($Campo === "cargo") {
                            $SQL = $Minhaconexao->prepare("update myb1.funcionario set cargo=:novo where cpf=:cpf");
                        } else {
                            if ($Campo === "login") {
                                $SQL = $Minhaconexao->prepare("update myb1.funcionario set login=:novo where cpf=:cpf");
                            } else {
                                if ($Campo === "senha") {
                                    $SQL = $Minhaconexao->prepare("update myb1.funcionario set senha=:novo where cpf=:cpf");
                                }else{
                                    if($Campo==="cpf"){
                                        $SQL = $Minhaconexao->prepare("update myb1.funcionario set cpf=:novo where cpf=:cpf");
                                    }
                                } 
                            }
                        }
                    }
                }
            }
            // codigo sql
            $SQL->bindParam("cpf", $CPF);
            $SQL->bindParam("novo", $Novo);

            $CPF = $Tecnico->getCPF();
    


            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo "Erro ao Alterar Setor" . $Erro->getmessage();
            return;
        }
        $Minhaconexao = null;
    }

    public function Pesquisar()
    { }

    public function BuscarTodos()
    {
        try {
            $Minhaconexao = connectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("select * from myb1.funcionario");
            $SQL->execute();
            $SQL->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i = 0;

            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                $vet[$i] = array($linha["cpf"], $linha["nome"], $linha["cargo"], $linha["login"], $linha["senha"], $linha["telefone"], $linha["email"], $linha["codigo"]);
                $i++;
            }
            return $vet;
        } catch (PDOException $Erro) {
            echo $Erro->getmessage();
        }
        $Minhaconexao = null;
    }
}

//Fim class TecnicoDAO




            //Fim classe

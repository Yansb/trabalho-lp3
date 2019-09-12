<?php

require_once "ConnectionFactory.php";


class ProblemaDAO
{

    public function Adicionar($Problema)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("insert into myb1.problema (nome) values (:nome)"); // codigo sql

            $SQL->bindParam("nome", $Nome);
            $Nome = $Problema->getNome();
            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {

            echo "Erro ao adicionar Probelama" . $Erro->getmessage();
            return 0;
        }
        $Minhaconexao = null;
    }

    public function Remover($Problema)
    {
        try {

            $Minhaconexao =  ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("delete from myb1.problema where idproblema=:codigo"); // codigo sql para remover

            $SQL->bindParam('codigo', $Codigo);
            $Codigo = $Problema->getCodigo();
            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo "Erro ao Remover Problema" . $Erro->getmessage();
            return;
        }
        $Minhaconexao = NULL;

        return;
    }
    public function Alterar($Problema)
    {

        try {

            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("update myb1.problema set nome=:nome where idproblema=:codigo"); // codigo sql para alterar; 
            $SQL->bindParam("codigo", $Codigo);
            $SQL->bindParam("nome",$Nome);
            $Nome = $Problema->getNome();
            $Codigo = $Problema->getCodigo();

            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {

            echo " Erro ao Alterar Problema" . $Erro->getmessage();
            return;
        }
    }

    public function Pesquisar($Palavra)
    { }

    public function BuscarTodos()
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("select *from  myb1.problema"); // codigo sql


            $SQL->execute();
            $SQL->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i = 0;

            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                $vet[$i] = array($linha['idproblema'], $linha['nome']);
                $i++;
            }
            return $vet;
        } catch (PDOException $Erro) {

            echo "Erro ao buscar <br>" . $Erro->getmessage();
            return 0;
        }
        $Minhaconexao = null;
    }
}
// Fim class ProblemaDAO

class SetorDAO
{

    public function Adicionar($Setor)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("insert into myb1.setor (email, telefone, nome) values (:email,:telefone,:nome);"); // códgio sql para adicionar setor
            $SQL->bindParam("nome", $Nome);
            $SQL->bindParam("email", $Email);
            $SQL->bindParam("telefone", $Telefone);

            $Nome = $Setor->getNome();
            $Email = $Setor->getEmail();
            $Telefone = $Setor->getTelefone();
            $SQL->execute();
            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo "Erro ao Cadastrar Setor" . $Erro->getmessage();
            return;
        }
        $Minhaconexao = null;
    }

    public function Remover($Setor)
    {
        echo $Setor->getCodigo() . "<br>";
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("delete from myb1.setor where codigo=:codigo"); // codigo sql 
            $SQL->bindParam("codigo", $Codigo);
            $Codigo = $Setor->getCodigo();

            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo "Erro ao Remover Setor <br>" . $Erro->getmessage();
            return;
        }
        $Minhaconexao = null;
    }
    public function Alterar($Setor,$Campo,$Novo)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();
            if($Campo==telefone){
                $SQL = $Minhaconexao->prepare("update myb1.setor set telefone=:novo where codigo=:codigo");
            }else{
                if($Campo===email){
                    $SQL = $Minhaconexao->prepare("update myb1.setor set email=:novo where codigo=:codigo");
                }else{
                    $SQL = $Minhaconexao->prepare("update myb1.setor set nome=:novo where codigo=:codigo");
                }
            }
             // codigo sql
            $SQL->bindParam("codigo",$Codigo);
            $SQL->bindParam("novo",$Novo1);

            $Codigo = $Setor->getCodigo();
            $Novo1 = $Novo;   


            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo "Erro ao Alterar Setor" . $Erro->getmessage();
            return;
        }
        $Minhaconexao = null;
    }

    public function Pesquisar($Setor)
    { }


    public function BuscarTodos()
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("select * from myb1.setor");

            $SQL->execute();
            $SQL->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i = 0;

            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                $vet[$i] = array($linha['codigo'], $linha['email'], $linha['telefone'], $linha['nome']); //continuar com o banco 
                $i++;
            }
            return $vet;
        } catch (PDOException $Erro) {

            echo $Erro->getmessage();
            return 0;
        }
        $Minhaconexao = null;
    }
}

<?php
include_once "ConnectionFactory.php";


class ChamadoDAO
{

    public function Adicionar($Chamado)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("insert into myb1.chamado(abertura,estado,arquivo,descricao,id_problema,cpf_usuario,codigo_setor,obs,prioridade,link,plugin,lab) values (:abertura,:status,:arquivo,:descricao,:problema,:cpf,:setor,:obs,:prioridade,:link,:plugin,:lab)"); // codigo sql 

            $SQL->bindParam('status', $Status);
            $SQL->bindParam('cpf', $CPF);
            $SQL->bindParam('descricao', $Descricao);
            $SQL->bindParam('abertura', $Abertura);
            $SQL->bindParam('prioridade', $Prioridade);
            $SQL->bindParam('arquivo', $Arquivo);
            $SQL->bindParam('obs', $OBS);
            $SQL->bindParam('setor', $Setor);
            $SQL->bindParam('problema', $Problema);
            $SQL->bindParam('link', $Link);
            $SQL->bindParam('plugin', $Plugin);
            $SQL->bindParam('lab', $Lab);


            $Link = $Chamado->getLink();
            $Lab = $Chamado->getLab();
            $Plugin = $Chamado->getPlugin();

            $Status = $Chamado->getStatus();
            $CPF = $Chamado->getSolicitante();
            $Descricao = $Chamado->getDescricao();
            $Abertura = $Chamado->getDataHoraAbertura();
            $Prioridade = $Chamado->getPrioridade();
            $Arquivo = $Chamado->getArquivo();
            $OBS = $Chamado->getOBS();
            $Setor = $Chamado->getSetor();
            $Problema = $Chamado->getProblema();


            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException  $Erro) {
            echo "Erro ao  cadastrar chamado" . $Erro->getmessage();
            return;
        }
        $Minhaconexao = NULL;
    }

    public function Remover($Chamado)
    {

        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("delete from myb1.chamado where numero_chamado= :numero"); // codigo sql 

            $SQL->bindParam("numero", $Numero);
            $Numero = $Chamado->getNumero();

            $SQL->execute();

            return $SQL->rowcount();
        } catch (PDOException $Erro) {
            echo "erro ao Remover chamado" . $Erro->getmessage();
            return;
        }

        $Minhaconexao = null;
    }

    public function VerificarAtendente($Chamado)
    {
        try {
            $Minhaconexao = ConnectionFactory::getConnection();
            $SQL = $Minhaconexao->prepare(" select cpf_funcionario as tecnico from Chamado where numero_chamado=:numero");

            $SQL->bindParam("numero", $Numero);
            $Numero = $Chamado->getNumero();
            $Resultado = 0;
            $SQL->execute();
            $SQL->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                $Resultado = $linha["tecnico"];
            }
            return $Resultado;
        } catch (PDOException $Erro) {
            echo $Erro->getMessage();
        }
        $Minhaconexao = NULL;
    }

    public function VerificarEstado($Chamado)
    {
        try {
            $Minhaconexao = ConnectionFactory::getConnection();
            $SQL = $Minhaconexao->prepare("select numero_chamado as numero from myb1.chamado where estado =:estado and numero_chamado=:numero");

            $SQL->bindParam("estado", $Estado);
            $SQL->bindParam("numero", $Numero);
            $Numero = $Chamado->getNumero();
            $Estado = $Chamado->getStatus();

            $Resultado = 0;
            $SQL->execute();
            $SQL->setFetchMode(PDO::FETCH_ASSOC);
            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                $Resultado = $linha["numero"];
            }
            return $Resultado;
        } catch (PDOException $Erro) {
            echo $Erro->getMessage();
        }
        $Minhaconexao = NULL;
    }

    public function Atender($Chamado)
    {
        try {
            $Minhaconexao = ConnectionFactory::getConnection();
            $SQL = $Minhaconexao->prepare("update myb1.chamado set cpf_funcionario =:cpf , estado='Em Atendimento' where numero_chamado =:numero");

            $SQL->bindParam("cpf", $CPF);
            $SQL->bindParam("numero", $Numero);
            $CPF = $Chamado->getTecnico();
            $Numero = $Chamado->getNumero();
            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo $Erro->getMessage();
        }
        $Minhaconexao = NULL;
    }
    public function  MudarPrioridade($Chamado)
    {
        try {
            $Minhaconexao = ConnectionFactory::getConnection();
            $SQL = $Minhaconexao->prepare("update myb1.chamado set prioridade =:prioridade  where numero_chamado =:numero");

            $SQL->bindParam("prioridade", $Prioridade);
            $SQL->bindParam("numero", $Numero);
            $Prioridade = $Chamado->getPrioridade();
            $Numero = $Chamado->getNumero();
            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo $Erro->getMessage();
        }
        $Minhaconexao = NULL;
    }

    public function Finalizar($Chamado)
    {
        try {
            $Minhaconexao = ConnectionFactory::getConnection();
            $SQL = $Minhaconexao->prepare("update myb1.chamado set  estado='Finalizado' where numero_chamado =:numero");

            $SQL->bindParam("numero", $Numero);
            $Numero = $Chamado->getNumero();
            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo $Erro->getMessage();
        }
        $Minhaconexao = NULL;
    }
    public function MarcarTombo($Chamado)
    {
        try {
            $Minhaconexao = ConnectionFactory::getConnection();
            $SQL = $Minhaconexao->prepare("update myb1.chamado set  tombo_patrimonio =:tombo where numero_chamado =:numero");

            $SQL->bindParam("numero", $Numero);
            $SQL->bindParam("tombo", $Tombo);
            $Numero = $Chamado->getNumero();
            $Tombo = $Chamado->getTombo();
            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo $Erro->getMessage();
        }
        $Minhaconexao = NULL;
    }

    public function Encaminhar($Chamado)
    {
        try {
            $Minhaconexao = ConnectionFactory::getConnection();
            $SQL = $Minhaconexao->prepare("update myb1.chamado set cpf_funcionario = :cpf , codigo_setor= :setor, estado='Encaminhado'  where numero_chamado = :numero");

            $SQL->bindParam("cpf", $CPF);
            $SQL->bindParam("numero", $Numero);
            $SQL->bindParam("setor", $Setor);
            $CPF = $Chamado->getTecnico();
            $Numero = $Chamado->getNumero();
            $Setor  = $Chamado->getSetor();
            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {
            echo $Erro->getMessage();
        }
        $Minhaconexao = NULL;
    }

    public function PesquisarAtual($Chamado)
    {


        try {
            $Minhaconexao = ConnectionFactory::getConnection();
            $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.cpf as solicitante, s.nome as setor, c.estado, c.prioridade, c.abertura, c.fim , p.nome as problema, c.obs,c.link,c.plugin
            from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
            inner join myb1.setor s on c.codigo_setor= s.codigo 
             inner join myb1.usuario u on c.cpf_usuario = u.cpf
             inner join myb1.problema p on c.id_problema = p.idproblema
            where c.numero_chamado =:numero; ");

            $SQL->bindParam("numero", $Numero);
            $Numero = $Chamado->getNumero();
            $SQL->execute();
            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {

                $Chamado->setDescricao($linha['descricao']);
                $Chamado->setTecnico($linha['atendente']);
                $Chamado->setSolicitante($linha['solicitante']);
                $Chamado->setSetor($linha['setor']);
                $Chamado->setStatus($linha['estado']);
                $Chamado->setprioridade($linha['prioridade']);
                $Chamado->setDataHoraAbertura($linha['abertura']);
                $Chamado->setDataHoraFechamento($linha['fim']);
                $Chamado->setProblema($linha['problema']);
                $Chamado->setOBS($linha['obs']);
                $Chamado->setLink($linha['link']);
                $Chamado->setPlugin($linha['plugin']);


                echo $Chamado->getTecnico();
            }

            return true;
        } catch (PDOException $Erro) {
            echo $Erro->getMessage();
        }
        $Minhaconexao = NULL;
    }
    public function Pesquisar($Chamado, $Tipo)
    {


        try {
            $Minhaconexao = ConnectionFactory::getconnection();
            if ($Tipo === "Finalizado") {
                $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado, c.prioridade, c.abertura, datediff(now(),c.abertura) as qtdias
                from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                inner join myb1.setor s on c.codigo_setor= s.codigo 
                inner join myb1.usuario u on c.cpf_usuario = u.cpf
                where c.estado ='Finalizado' and s.nome =:setor");
                $SQL->bindParam("setor", $Setor);

                $Setor = $Chamado->getSetor();

                $SQL->execute();
                $SQL->setFetchMode(PDO::FETCH_ASSOC);
                $vet = array();
                $i = 0;

                while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                    $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['estado'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                    $i++;
                }
                return $vet;
            } else {
                if ($Tipo === "Numero") {
                    $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado, c.prioridade, c.abertura, datediff(now(),c.abertura) as qtdias
                    from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                    inner join myb1.setor s on c.codigo_setor= s.codigo 
                    inner join myb1.usuario u on c.cpf_usuario = u.cpf
                    where c.numero_chamado =:numero and s.nome =:setor");

                    $SQL->bindParam("numero", $Numero);
                    $SQL->bindParam("setor", $Setor);

                    $Setor = $Chamado->getSetor();
                    $Numero =  $Chamado->getNumero();


                    $SQL->execute();

                    $SQL->setFetchMode(PDO::FETCH_ASSOC);
                    $vet = array();
                    $i = 0;

                    while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {

                        $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['estado'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                        $i++;
                    }
                    return $vet;
                } else {
                    if ($Tipo === "Normal") {

                        $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado, c.prioridade, c.abertura, datediff(now(),c.abertura) as qtdias
                        from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                        inner join myb1.setor s on c.codigo_setor= s.codigo 
                        inner join myb1.usuario u on c.cpf_usuario = u.cpf
                        where s.nome =:setor and (c.estado = 'Em Aberto' or c.estado = 'Em Atendimento' or c.estado = 'Encaminhado')");
                        $SQL->bindParam("setor", $Setor);
                        $Setor = $Chamado->getSetor();

                        $SQL->execute();
                        $SQL->setFetchMode(PDO::FETCH_ASSOC);
                        $vet = array();
                        $i = 0;

                        while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                            $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['estado'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                            $i++;
                        }
                        return $vet;
                    } else {
                        if ($Tipo === "Solicitante") {
                            $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado, c.prioridade, c.abertura, datediff(now(),c.abertura) as qtdias
                            from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                            inner join myb1.setor s on c.codigo_setor= s.codigo 
                            inner join myb1.usuario u on c.cpf_usuario = u.cpf
                            where u.nome =:solicitante and s.nome =:setor");
                            $SQL->bindParam("solicitante", $Solicitante);
                            $SQL->bindParam("setor", $Setor);
                            $Solicitante = $Chamado->getSolicitante();


                            $Setor = $Chamado->getSetor();
                            $SQL->execute();
                            $SQL->setFetchMode(PDO::FETCH_ASSOC);
                            $vet = array();
                            $i = 0;

                            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                                $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['estado'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                                $i++;
                            }
                            return $vet;
                        } else {
                            if ($Tipo === "Estado") {
                                $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado, c.prioridade, c.abertura, datediff(now(),c.abertura) as qtdias
                                from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                                inner join myb1.setor s on c.codigo_setor= s.codigo 
                                inner join myb1.usuario u on c.cpf_usuario = u.cpf
                                where c.estado =:estado and s.nome =:setor");
                                $SQL->bindParam("estado", $Status);
                                $SQL->bindParam("setor", $Setor);

                                $Setor = $Chamado->getSetor();
                                $Status = $Chamado->getStatus();

                                $SQL->execute();
                                $SQL->setFetchMode(PDO::FETCH_ASSOC);
                                $vet = array();
                                $i = 0;

                                while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                                    $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['estado'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                                    $i++;
                                }
                                return $vet;
                            } else {
                                if ($Tipo === "Prioridade") {
                                    $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado, c.prioridade, c.abertura, datediff(now(),c.abertura) as qtdias
                                    from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                                    inner join myb1.setor s on c.codigo_setor= s.codigo 
                                    inner join myb1.usuario u on c.cpf_usuario = u.cpf
                                    where c.prioridade =:prioridade and s.nome =:setor");
                                    $SQL->bindParam("prioridade", $Prioridade);
                                    $SQL->bindParam("setor", $Setor);

                                    $Setor = $Chamado->getSetor();
                                    $Prioridade = $Chamado->getPrioridade();

                                    $SQL->execute();
                                    $SQL->setFetchMode(PDO::FETCH_ASSOC);
                                    $vet = array();
                                    $i = 0;

                                    while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                                        $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['estado'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                                        $i++;
                                    }
                                    return $vet;
                                } else {
                                    if ($Tipo === "Atendente") {
                                        $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado, c.prioridade, c.abertura, datediff(now(),c.abertura) as qtdias
                                        from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                                        inner join myb1.setor s on c.codigo_setor= s.codigo 
                                        inner join myb1.usuario u on c.cpf_usuario = u.cpf
                                        where c.cpf_funcionario =:atendente and s.nome =:setor");
                                        $SQL->bindParam("atendente", $Atendente);
                                        $Atendente = $Chamado->getTecnico();
                                        $SQL->bindParam("setor", $Setor);

                                        $Setor = $Chamado->getSetor();

                                        $SQL->execute();
                                        $SQL->setFetchMode(PDO::FETCH_ASSOC);
                                        $vet = array();
                                        $i = 0;

                                        while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                                            $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['estado'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                                            $i++;
                                        }
                                        return $vet;
                                    } else {
                                        if ($Tipo === "Setor") {

                                            $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado, c.prioridade, c.abertura, datediff(now(),c.abertura) as qtdias
                                            from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                                            inner join myb1.setor s on c.codigo_setor= s.codigo 
                                            inner join myb1.usuario u on c.cpf_usuario = u.cpf
                                            where c.codigo_setor =:setor ");
                                            $SQL->bindParam("setor", $Setor);
                                            $Setor = $Chamado->getSetor();


                                            $SQL->execute();
                                            $SQL->setFetchMode(PDO::FETCH_ASSOC);
                                            $vet = array();
                                            $i = 0;

                                            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                                                $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['estado'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                                                $i++;
                                            }
                                            return $vet;
                                        } else {
                                            if ($Tipo === "Problema") {
                                                $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado, c.prioridade,c.abertura,datediff(now(),c.abertura) as qtdias
                                                from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                                                inner join myb1.setor s on c.codigo_setor= s.codigo 
                                                inner join myb1.usuario u on c.cpf_usuario = u.cpf
                                                where c.id_problema =:problema and s.nome =:setor");
                                                $SQL->bindParam("problema", $Problema);
                                                $SQL->bindParam("setor", $Setor);

                                                $Setor = $Chamado->getSetor();
                                                $Problema = $Chamado->getProblema();
                                                $SQL->execute();
                                                $SQL->setFetchMode(PDO::FETCH_ASSOC);
                                                $vet = array();
                                                $i = 0;

                                                while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                                                    $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['estado'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                                                    $i++;
                                                }
                                                return $vet;
                                            } else {

                                                if ($Tipo === "Qtdias") {

                                                    $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado, c.prioridade, c.abertura,datediff(now(),c.abertura) as qtdias
                                                    from myb1.chamado c left join myb1.funcionario f on c.cpf_funcionario = f.cpf
                                                    inner join myb1.setor s on c.codigo_setor= s.codigo 
                                                    inner join myb1.usuario u on c.cpf_usuario = u.cpf
                                                    where  datediff(now(),c.abertura)=:qtdias and s.nome=:setor");
                                                    $SQL->bindParam("qtdias", $Qtdias);
                                                    $SQL->bindParam("setor", $Setor);
                                                    $Qtdias = $Chamado->getNumero();
                                                    $Setor = $Chamado->getSetor();


                                                    $SQL->execute();
                                                    $SQL->setFetchMode(PDO::FETCH_ASSOC);
                                                    $vet = array();
                                                    $i = 0;

                                                    while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                                                        $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['estado'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                                                        $i++;
                                                    }
                                                    return $vet;
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
        } catch (PDOExcepetion $Erro) {
            echo $Erro->getmessage();
        }
        $Minhaconexao = NULL;
    }

    public function BuscarTodos()
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("select * from myb1.chamado");
            $SQL->execute();
            $SQL->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i = 0;

            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {

                $vet[$i] = array($linha[''], $linha[''], $linha['']); // continuar 
                $i++;
            }
            return $vet;
        } catch (PDOException $Erro) {

            echo $Erro->getmessage();
            return 0;
        }
        $Minhaconexao = NULL;
    }

    public function BuscarUsuario($Chamado, $Usuario, $Tipo)
    {
        try {
            $Minhaconexao = ConnectionFactory::getConnection();
            if ($Tipo == "Normal") {
                $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado as situacao, c.prioridade, c.abertura,datediff(now(),c.abertura) as qtdias
            from myb1.chamado c inner join myb1.usuario u on c.cpf_usuario = u.cpf 
            inner join myb1.setor s on c.codigo_setor = s.codigo
            left join myb1.funcionario f on f.cpf= c.cpf_funcionario 
            where c.cpf_usuario =:cpf");
                $SQL->bindParam('cpf', $CPF);
                $CPF = $Usuario->getCPF();

                $SQL->execute();
                $SQL->setFetchMode(PDO::FETCH_ASSOC);
                $vet = array();
                $i = 0;

                while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                    $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['situacao'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                    $i++;
                }
                return $vet;
            } else {
                if ($Tipo == "Numero") {
                    $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado as situacao, c.prioridade, c.abertura,datediff(now(),c.abertura) as qtdias
                from myb1.chamado c inner join myb1.usuario u on c.cpf_usuario = u.cpf 
                inner join myb1.setor s on c.codigo_setor = s.codigo
                left join myb1.funcionario f on f.cpf= c.cpf_funcionario 
                where c.cpf_usuario =:cpf and c.numero_chamado =:numero");
                    $SQL->bindParam('cpf', $CPF);
                    $SQL->bindParam('numero', $Numero);
                    $CPF = $Usuario->getCPF();
                    $Numero = $Chamado->getNumero();

                    $SQL->execute();
                    $SQL->setFetchMode(PDO::FETCH_ASSOC);
                    $vet = array();
                    $i = 0;

                    while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                        $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['situacao'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                        $i++;
                    }
                    return $vet;
                } else {

                    if ($Tipo == "Setor") {
                        $SQL = $Minhaconexao->prepare("select c.numero_chamado as numero, c.descricao, f.nome as atendente, u.nome as solicitante, s.nome as setor, c.estado as situacao, c.prioridade, c.abertura,datediff(now(),c.abertura) as qtdias
                    from myb1.chamado c inner join myb1.usuario u on c.cpf_usuario = u.cpf 
                    inner join myb1.setor s on c.codigo_setor = s.codigo
                    left join myb1.funcionario f on f.cpf= c.cpf_funcionario 
                    where c.cpf_usuario =:cpf and c.codigo_setor = :setor ");
                        $SQL->bindParam('cpf', $CPF);
                        $SQL->bindParam('setor', $Setor);
                        $CPF = $Usuario->getCPF();
                        $Setor = $Chamado->getSetor();

                        $SQL->execute();
                        $SQL->setFetchMode(PDO::FETCH_ASSOC);
                        $vet = array();
                        $i = 0;

                        while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                            $vet[$i] = array($linha['numero'], $linha['descricao'], $linha['atendente'], $linha['solicitante'], $linha['setor'], $linha['situacao'], $linha['prioridade'], $linha['abertura'], $linha['qtdias']);
                            $i++;
                        }
                        return $vet;
                    }
                }
            }
        } catch (PDOException $Erro) {
            echo $Erro;
        }
        $Minhaconexao = null;
    }
}

// Fim ChamadoDAo

class HistoricoChamadoDAO
{

    public function Adicionar($Historico)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("insert into myb1.historico (datahora,descricao,numero_chamado) values (:datahora,:descricao,:numero)"); // codigo sql

            $SQL->bindParam("descricao", $Descricao);
            $SQL->bindParam("datahora", $DataHora);
            $SQL->bindParam("numero", $Numero);
            $Descricao = $Historico->getDescricao();
            $DataHora = $Historico->getDataHora();
            $Numero = $Historico->getChamado();
            $SQL->execute();

            return $SQL->rowCount();
        } catch (PDOException $Erro) {

            echo "Erro ao adicionar Historico" . $Erro->getmessage();
            return 0;
        }
        $Minhaconexao = null;
    }

    public function BuscarTodos($Historico)
    {
        try {
            $Minhaconexao = ConnectionFactory::getconnection();

            $SQL = $Minhaconexao->prepare("select *from myb1.historico where numero_chamado=:numero"); // codigo sql


            $SQL->bindParam("numero", $Numero);
            $Numero = $Historico->getChamado();
            $SQL->execute();
            $SQL->setFetchMode(PDO::FETCH_ASSOC);
            $vet = array();
            $i = 0;

            while ($linha = $SQL->fetch(PDO::FETCH_ASSOC)) {
                $vet[$i] = array($linha["id"], $linha["DataHora"], $linha["descricao"], $linha["numero_chamado"],);
                $i++;
            }

            return $vet;
        } catch (PDOException $Erro) {

            echo "Erro ao adicionar Historico" . $Erro->getmessage();
            return 0;
        }
        $Minhaconexao = null;
    }
}

// Fim HistoricoChamado

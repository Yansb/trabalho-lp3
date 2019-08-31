
<p>
Universidade do Estado da Bahia
Linguagem de Programação III
Trabalho em grupo 2019.1
Profa. Ana Patrícia Magalhães 
</p>
<p>
Objetivo
	Desenvolver os conceitos estudados na disciplina em uma aplicação.
</p>
Organização
	O trabalho será desenvolvido em grupos de 3 pessoas

Disposição
	Primeira etapa: desenvolver o diagrama de classes e o protótipo da interface, camada view e o banco de dados.
	Segunda etapa: desenvolver a camada model, a camada controller, a camada DAO e entregar o sistema todo funcionando.

Apresentação:
	A apresentação deverá ser realizada pela equipe
	Cada aluno será avaliado individualmente
	A nota é individual para cada aluno a depender da sua avaliação oral

Considere o seguinte cenário para a central de suporte técnico do DCET.

O DCET recebe todos os dias diversos chamados oriundos de setores distintos tais como TI e comunicação, Administrativo, acadêmico, financeiro e NUPE. O sistema deverá controlar esses chamados.  O sistema poderá ser utilizado por toda a comunidade acadêmica, alunos, docentes, técnicos, Colegiados, Visitantes e ex-alunos. As seguintes funcionalidades devem fazer parte do sistema:
Cadastro de setor (código, telefone, email e nome do setor)
Cadastro de tipo de chamado por setor, ex. Técnico, Comunicação e de Desenvolvimento 
Débora vai enviar alguns exemplos
(setor, descrição do problema e prioridade(baixa, média, alta))
Cadastro de técnicos por setor. Neste deve ser indicado se é um técnico simples ou o adm do setor
Cpf, nome, email, telefone, login(deve ser o mesmo da uneb) e setor. 
Login (somente para técnicos/adm) 
Utilizar o LDAP 
Verificar se o LDAP identifica qual é o perfil da pessoa logada, se é terceirizada
Abertura (Cadastro) de Chamados: Esse cadastro tem por objetivo manter os dados dos chamados que podem ser realizados por qualquer usuário do sistema. Não precisa se logar no sistema para abrir um chamado. Deve ser armazenado o nome, cpf, email, setor do usuário, telefone do usuário (opcional), a data e horário de início (automático), o setor, a descrição do problema (lista dos problemas cadastrados) e um campo de observação. Também deverá fazer um upload de arquivos (opcional): jpeg, pdf ou doc. Uma vez cadastrado dever ser gerado um número de chamado automático.
Enviar email para o usuário que abriu o chamado informando o número do chamado aberto (ver layout no final deste documento). Sempre que mudar a situação é enviado email para o usuário que abriu o chamado.
Técnicos podem visualização dos chamados por: setor, número do chamado, data de abertura, situação, usuário, qtd dias que o chamado foi aberto. Ao se logar no sistema, o técnico terá uma listagem de todos os chamados que foram abertos e/ou encaminhados para seu atendimento;
Atendimento do chamado – usado somente pelo técnico/adm que deve estar logado. Seleciona um chamado na lista de chamados e inicia o atendimento. O chamado fica associado ao técnico. Neste momento a situação do chamado muda para “em atendimento” e fica registrada a data/hora e o técnico.  Apresentar os chamados abertos/encaminhados (vermelho), em andamento(amarelo).
A lista de chamados deve conter uma opção de ordenação. Ascendente/descendente em relação a data e hora de criação do chamado. Inicialmente é mostrado descendente, mas o usuário pode mudar a ordem se desejar.
O adm do setor tem direito a ver todos os chamados do setor pela situação.
Alteração da situação do chamado. Sempre que a situação for alterada deve ser registrada a data/hora e uma descrição (opcional). Deve seguir o diagrama de estados. 
Encaminhar chamado para outro técnico/setor. Qualquer técnico/adm pode encaminhar o chamado para outro técnico/setor. 
Concluir chamado. Realizado pelo técnico/adm. Ele seleciona um chamado que esteja atendendo e informa a solução diagnosticada pelo técnico. O sistema grava a data/hora automático. Envia email para o usuário dizendo que o chamado foi concluído.
O usuário que abriu o chamado pode cancelá-lo caso ele ainda esteja “aberto”.
Enviar email para o usuário sempre que o chamado mudar de situação.
Usuários podem buscar Chamados: A busca dos chamados tem o objetivo visualizar os dados de um chamado. A busca se dará pelo nome do usuário, pelo número do chamado, pelo setor. 
Situações do chamado: Aberto, pendente, em atendimento, encaminhado para outro setor, concluído.
Implementar chat com o usuário (se der tempo).
Técnico pode associar o chamado a um tombo de patrimônio. Acrescentar esse campo no chamado e o técnico é responsável pelo cadastro.
Relatórios de chamados do usuário. O usuário pode listar os chamados cadastrados por ele (pelo cpf). O administrador e/ou técnico tem acesso a lista de todos os chamados. Serão listados os chamados por cpf/setor/técnico/período/problema/quant dias aberto
Módulo de Instalação de Programas em laboratórios ou setor:  Para todos usuários (docentes, discentes, técnicos, públicos externos e internos). Esse Módulo indica o software, data de uso, link para download e plug-ins relacionados, o laboratório e o usuário solicitante (nome, email, celular, para confirmação da instalação);
Para esse requisito usaremos o próprio sistema de chamados. Quando o problema for “Instalação de Software” será obrigatório colocar o link para a instalação.

Criar tela/tabela de cadastro dos perfis com: Login, cargo e nome. Que será utilizada apenas pelo administrador.
Acrescentar na autenticação a checagem de qual é o cargo da pessoa que está se autenticando. Só será permitido o acesso a usuários que estejam nessa tabela.
O técnico pode passar o chamado para outro técnico do mesmo setor? Se sim, ele deve dizer qual é o técnico?

*** Email Automático, favor não responder. ***

Sua Solicitação foi registrada, e esta em processo de atendimento.

Chamado:          xxxxxxx
Tipo:                  Serviços de Suporte
Data Abertura: 2019-03-26 17:31:00.0
Descrição:         Monitor Quebrado 

Qualquer dúvida ligue para o ramal  Central 2298 

Prezado (a) Sr(a), Ana Patricia

Boa tarde, 
Informamos que o chamado xxxxxxx foi concluído com sucesso.


SETORES DE ATENDIMENTO:

RH – TI - COMUNICAÇÃO - ADMINISTRATIVO - FINANCEIRO –ACADÊMICA 

CHAMADOS SÃO DIFERENCIADOS POR SETORES. 
TODOS DEVEM PERMITIR O ENVIO DE ARQUIVOS PDF, JPEG OU DOC.
TODOS DEVERÃO RESGISTRAR O Nº AUTOMÁTICAMENTE
TODOS OS CHAMADOS – ENVIAR ABERTURA E FECHAMENTO PARA O EMAIL DO USUÁRIO;
TODOS DEVERÃO EMITIR RELATÓRIO DE ATENDIMENTO POR SETORES
TODOS DEVERÃO PERMITIR CONSULTA DO CHAMADO PARA ACOMPANHAMENTO POR SETORES


Equipe:
Yan, Caio Bruno e Matheus Souza

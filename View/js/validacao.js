function valida() {
    var NomeSetor = document.getElementById('NomeSetor');
    var Telefone = document.getElementById('Telefone');
    var CodigoSetor = document.getElementById('CodigoSetor');
    var Email = document.getElementById('Email');



    if (NomeSetor.value == "" || Telefone.value == "" || CodigoSetor.value == "" || Email.value == "") {

        alert("Por favor preencher todos os campos");


    }
    else {
        if (Email.value.indexOf("@") == -1 || Email.value.indexOf(".") == -1) {

            alert("Informe um email valido");
        }
        else {
            pedesenha();
            alert("Cadastro feito com Sucesso");
        }

    }
}



function mostraOculta(opc) {


    if (document.getElementById(opc).value == 'Numero') {

        if (document.getElementById("Numero").style.display == 'none') {
            document.getElementById("Numero").style.display = 'inline';
        }
    } else {
        document.getElementById("Numero").style.display = 'none';
    }

    if (document.getElementById(opc).value == 'Periodo') {

        if (document.getElementById("Periodo").style.display == 'none') {
            document.getElementById("Periodo").style.display = 'inline';
        }
    } else {
        document.getElementById("Periodo").style.display = 'none';
    }
    if (document.getElementById(opc).value == 'Setor') {

        if (document.getElementById("Setor").style.display == 'none') {
            document.getElementById("Setor").style.display = 'inline';
        }
    } else {
        document.getElementById("Setor").style.display = 'none';
    }


    if (document.getElementById(opc).value == 'Equipamento') {

        if (document.getElementById("Equipamento").style.display == 'none') {
            document.getElementById("Equipamento").style.display = 'inline';
        }
    } else {
        document.getElementById("Equipamento").style.display = 'none';
    }


    if (document.getElementById(opc).value == 'Solicitante') {

        if (document.getElementById("Solicitante").style.display == 'none') {
            document.getElementById("Solicitante").style.display = 'inline';
        }
    } else {
        document.getElementById("Solicitante").style.display = 'none';
    }


    if (document.getElementById(opc).value == 'Estado') {

        if (document.getElementById("Estado").style.display == 'none') {
            document.getElementById("Estado").style.display = 'inline';
        }
    } else {
        document.getElementById("Estado").style.display = 'none';
    }

    if (document.getElementById(opc).value == 'Prioridade') {

        if (document.getElementById("Prioridade").style.display == 'none') {
            document.getElementById("Prioridade").style.display = 'inline';
        }
    } else {
        document.getElementById("Prioridade").style.display = 'none';
    }

    if (document.getElementById(opc).value == 'Atendente') {

        if (document.getElementById("Atendente").style.display == 'none') {
            document.getElementById("Atendente").style.display = 'inline';
        }
    } else {
        document.getElementById("Atendente").style.display = 'none';
    }

    if (document.getElementById(opc).value == 'Qtdias') {

        if (document.getElementById("Qtdias").style.display == 'none') {
            document.getElementById("Qtdias").style.display = 'inline';
        }
    } else {
        document.getElementById("Qtdias").style.display = 'none';
    }
}


function pedecpf() {
    do {

        nome = prompt("Digite o seu CPF");

    } while (nome == null || nome == "" || nome.length<11 || nome.length>11);


}

function pedesenha() {
    do {

        nome = prompt("Digite a sua senha");

    } while (nome == null || nome == "" );


}

function cancelar() {
    do {

        nome = prompt("Tem certeza? Digite seu CPF!");


    } while (nome == null || nome == "" || nome.length<11 || nome.length>11 );

        alert("Chamado Cancelado com sucesso");
}


function sucesso1() {
    var CPF = document.getElementById('CPF');
    var Nome = document.getElementById('Nome');
    var Login = document.getElementById('Login');
    var Email = document.getElementById('Email');
    var Telefone = document.getElementById('Telefone')



    if (CPF.value == "" || Telefone.value == "" || Nome.value == "" || Email.value == "" || Login.value=="") {

        alert("Por favor preencher todos os campos");


    }
    else {
        if (Email.value.indexOf("@") == -1 || Email.value.indexOf(".") == -1) {

            alert("Informe um email valido");
        }
        else {
            pedesenha();
            alert("Cadastro feito com Sucesso");
        }

    }
}



function sucesso2(){
var problema = document.getElementById('Problema');

if(problema.value==""){
    alert('Preencha o campo abaixo');
}else{
pedesenha();
alert('Problema cadastrado com sucesso');

}
}



function software(){
    var Nome = document.getElementById('Nome');
    var Email = document.getElementById('Email');
    var Telefone = document.getElementById('Telefone')
    var Programa = document.getElementById("Programa");
    var link = document.getElementById("link");

    if(Nome.value=="" || Email.value==""|| Telefone.value==""|| Programa.value=="" || link.value==""){
        alert('Preencha todos os campos');

    }else{
        alert('Chamado aberto com sucesso');
    }

}

function cadastropedido() {
    var CPF = document.getElementById('CPF');
    var Nome = document.getElementById('Nome');
    var Email = document.getElementById('Email');

    if (CPF.value == "" || Nome.value == "" || Email.value == "") {

        alert("Por favor preencher todos os campos");


    }
    else {
        if (Email.value.indexOf("@") == -1 || Email.value.indexOf(".") == -1) {

            alert("Informe um email valido");
        }
        else {
            alert("Cadastro feito com sucesso");
        }

    }
}


function processamento(){
    var process = document.getElementById('process');

    if(process.value=="" || process.value=="NULL"){
        alert('Preencha o campo abaixo');

    }else{
        alert('Processado com sucesso');
    }
}


function tombamento(){
    var codTomb = document.getElementById('codTomb');
    var relato = document.getElementById('relato');

    if(codTomb.value=="" || relato.value==""){
        alert('Preencha os campos abaixo');

    }else{
        alert('Processado com sucesso');
    }
}



function finalizar(){
    var finalizar = document.getElementById('finalizar');

    if(finalizar.value==""){
        alert('Preencha o campo abaixo');
    }else{
        alert('Processado com sucesso')
    }
}
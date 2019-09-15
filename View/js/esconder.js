$("#Processamento").click(function () {
    $("#form-processamento").show();
    $("#form-chamado").hide();
    $("#form-encaminhar").hide();
    $("#form-tombamento").hide();
    $("#form-finalizar").hide();
    $("#form-estado").hide();
});
$("#Chamado").click(function () {
    $("#form-chamado").show();
    $("#form-processamento").hide();
    $("#form-encaminhar").hide();
    $("#form-tombamento").hide();
    $("#form-finalizar").hide();
    $("#form-estado").hide();
});
$("#Encaminhar").click(function () {
    $("#form-encaminhar").show();
    $("#form-processamento").hide();
    $("#form-chamado").hide();
    $("#form-tombamento").hide();
    $("#form-finalizar").hide();
    $("#form-estado").hide();
});
$("#Tombamento").click(function () {
    $("#form-tombamento").show();
    $("#form-processamento").hide();
    $("#form-chamado").hide();
    $("#form-encaminhar").hide();
    $("#form-finalizar").hide();
    $("#form-estado").hide();
});
$("#Finalizar").click(function () {
    $("#form-finalizar").show();
    $("#form-processamento").hide();
    $("#form-chamado").hide();
    $("#form-encaminhar").hide();  
    $("#form-tombamento").hide();
    $("#form-estado").hide();
});
$("#Estado").click(function () {
    $("#form-chamado").hide();
    $("#form-processamento").hide();
    $("#form-encaminhar").hide();
    $("#form-tombamento").hide();
    $("#form-finalizar").hide();
    $("#form-estado").show();
});

$("#consulta").click(function () {
    $("#consulta-form").show();
    $("#exterior").hide();
});

$("#voltar-form").click(function(){
    $("#exterior").show();
    $("#consulta-form").hide();
    $("#remover-form").hide();
    $("#alterar-form").hide();
    $(".formTecnico").show();
    $("#remover-form").hide();
    $(".formArea").show();
    
});
$("#remover-tecnico").click(function(){
    $("#remover-form").show();
    $(".formTecnico").hide();
});
$("#alterar-tecnico").click(function (){
    $("#alterar-form").show();
    $(".formTecnico").hide();
});
$("#voltar-alterar").click(function () {
    $("#alterar-form").hide();
    $(".formTecnico").show();
    $("#alterar-form").hide();
    $(".formArea").show();
});

$("#remover-setor").click(function () {
    $("#remover-form").show();
    $(".formArea").hide();
});

$("#alterar-setor").click(function () {
    $("#alterar-form").show();
    $(".formArea").hide();
});

$("#remover-problema").click(function () {
    $("#remover-form").show();
    $(".formArea").hide();
});
$("#alterar-problema").click(function () {
    $("#alterar-form").show();
    $(".formArea").hide();
});

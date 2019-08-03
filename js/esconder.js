$("#Processamento").click(function () {
    $("#form-processamento").show();
    $("#form-chamado").hide();
    $("#form-encaminhar").hide();
    $("#form-tombamento").hide();
    $("#form-finalizar").hide();
    $("#form-atender").hide();
});
$("#Chamado").click(function () {
    $("#form-chamado").show();
    $("#form-processamento").hide();
    $("#form-encaminhar").hide();
    $("#form-tombamento").hide();
    $("#form-finalizar").hide();
    $("#form-atender").hide();
});
$("#Encaminhar").click(function () {
    $("#form-encaminhar").show();
    $("#form-processamento").hide();
    $("#form-chamado").hide();
    $("#form-tombamento").hide();
    $("#form-finalizar").hide();
    $("#form-atender").hide();
});
$("#Tombamento").click(function () {
    $("#form-tombamento").show();
    $("#form-processamento").hide();
    $("#form-chamado").hide();
    $("#form-encaminhar").hide();
    $("#form-finalizar").hide();
    $("#form-atender").hide();
});
$("#Finalizar").click(function () {
    $("#form-finalizar").show();
    $("#form-processamento").hide();
    $("#form-chamado").hide();
    $("#form-encaminhar").hide();  
    $("#form-tombamento").hide();
    $("#form-atender").hide();
});
$("#Finalizar").click(function () {
    $("#form-finalizar").show();
    $("#form-processamento").hide();
    $("#form-chamado").hide();
    $("#form-encaminhar").hide();
    $("#form-tombamento").hide();
    $("#form-atender").hide();
});
$("#Atender").click(function () {
    $("#form-chamado").show();
    $("#form-processamento").hide();
    $("#form-encaminhar").hide();
    $("#form-tombamento").hide();
    $("#form-finalizar").hide();
    $("#form-atender").hide();
});

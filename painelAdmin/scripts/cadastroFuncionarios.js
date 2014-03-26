/**
 * @author FastHelp
 */
$(document).ready(function() {
	$("#numeroFuncionario").mask("(99)9999-9999");
	$("#numeroFuncionario1").mask("(99)9999-9999");
	$("#cpfFuncionario").mask("999.999.999-99");
});

//Botão Cancelar
$(document).ready(function(){
	$("#cancelarFuncionario").click(function(){
		$("#nomeFuncionario").focus();
		
	});
});

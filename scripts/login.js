//Verificando os campos de login e senha
$(document).ready(function() {
	$("#entrar").click(function() {
		if ($("#inputUsuario").val() == "" && $("#inputUsuario").is(":empty")) {
			alert("Você deve digitar o nome do usuário!");
			$("#inputUsuario").focus();
			return false;
		} 
                
                if ($("#inputSenha").val() == "" && $("#inputSenha").is(":empty")) {
			alert("Você deve digitar o Senha do usuário!");
			$("#inputUsuario").focus();
			return false;
                }
            /*else {
			alert("Você deve digitar uma senha!");
			$("#inputSenha").focus();
			return false;
		}*/
	});
});

//Quando apertar o botão cancelar
$(document).ready(function() {
	$("#cancelar").click(function() {
		$("#inputUsuario").focus();
	});
});

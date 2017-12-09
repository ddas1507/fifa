//CODIGO EM JAVA SCRIPT PARA SALTOS NOS CAMPOS DO FORMULÁRIO DE CADASTRO DO CONTATO NO MENÚ AGENDA
function jumpto_form_agenda_inserir(campoatual, proximocampo)
{
	var tamanho_max = eval("document.agenda_inserir." + campoatual + ".maxLength;");
	var tamanho_atual = eval("document.agenda_inserir."+ campoatual +".value.length;");
	if (tamanho_atual == tamanho_max){
		eval("document.agenda_inserir."+ proximocampo +".focus();");
	}
}

function jumpto_form_agenda_alterar(campoatual, proximocampo)
{
	var tamanho_max = eval("document.agenda_alterar." + campoatual + ".maxLength;");
	var tamanho_atual = eval("document.agenda_alterar."+ campoatual +".value.length;");
	if (tamanho_atual == tamanho_max){
		eval("document.agenda_alterar."+ proximocampo +".focus();");
	}
}

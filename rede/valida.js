function validacao(){
	if( document.form.nome.value == ""){
		alert("por favor preencha o campo nome!");
		document.form.nome.focus();
		return false;
	}

	if (document.form.senha.value.length < 8) {
		alert("senha deve ter no minimo 8 caracteres.");
		document.form.senha.focus();
		return false;
	}

	if (document.form.senha.value != document.form.senha2.value) {
		alert("senhas nao conferem!")
		document.form.senha2.focus();
		return false;
	}
}
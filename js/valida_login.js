with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && nombre.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			nombre.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su password");
			password.focus();
		}
		if(ok){ submit(); }
	}
}

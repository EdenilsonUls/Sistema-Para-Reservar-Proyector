with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && nombre.value==""){
			ok=false;
			alert("Debe escribir su nombre");
			nombre.focus();
		}
		if(ok &&apellido.value==""){
			ok=false;
			alert("Debe escribir su apellido");
			apellido.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Debe escribir su email");
			email.focus();
		}
		if(ok && carnet.value==""){
			ok=false;
			alert("Debe escribir su carnet");
			carnet.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Debe escribir su password");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de password");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Los passwords no coinciden");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}

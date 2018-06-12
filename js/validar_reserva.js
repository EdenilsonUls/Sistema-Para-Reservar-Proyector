with(document.reserva){
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
		
		if(ok && carnet.value==""){
			ok=false;
			alert("Debe escribir su carnet");
			carnet.focus();
		}
		if(ok && nombre_del_equipo.value==""){
			ok=false;
			alert("Debe escribir su password");
			nombre_del_equipo.focus();
		}
		if(ok && fecha_a_reservar.value==""){
			ok=false;
			alert("Debe escribir su confirmacion de password");
			fecha_a_reservar.focus();
		}

		


		if(ok){ submit(); }
	}
}

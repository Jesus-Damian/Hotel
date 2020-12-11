function validar() {
	var nom, ape, correo, contra, tel;
	nom = document.getElementById('first_name').value;
	ape = document.getElementById('last_name').value;
	correo = document.getElementById('email').value;
	tel = document.getElementById('phone').value;
	contra = document.getElementById('password').value;
	if (nom==''){
		alert("Falta ingresar nombre");
		document.getElementById('first_name').focus();
		document.getElementById('first_name').style.background="blue";
		return false;
	}else if (ape=='') {
		alert("Falta ingresar apellido");
		return false;
	}else if (correo=="") {
		alert("Falta ingresar el correo");
		return false;
	}else if (contra =='') {
		alert("Falta ingresar password");
		return false;
	}else if (tel=='') {
		alert("Falta ingresa telefono");
		return false;
	}else if (isNaN(tel)) {
		alert("solo numeros")
		return false;
	}else if (nom.length>40) {
		alert("Ingresa solo 40 caracteres");
		return false;
	}else if (contra.length<8 || contra.length>15) {
		alert("Tu contraseña solo puede llevar de 8 a 15 caracteres ");
		return false;
	}else if (tel.length!=10) {
		alert("El tel debe llevar 10 dijitos");
		return false;
	}
}
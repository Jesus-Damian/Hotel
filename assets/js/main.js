function validar(){
    var nom, apellido, correo, contra;
    nom = document.getElementById('first_name').value;
    apellido = document.getElementById('last_name').value;
    correo = document.getElementById('email').value;
    contra = document.getElementById('password').value;

    if(nom==""){
        alert('Falta ingresar el nombre');
        document.getElementById('first_name').focus();
        document.getElementById('first_name').style.background="ligth-green";
        return false;
    }else if(apellido==""){
        alert('Falta ingresar el apellido');
        return false;
    }else if(correo==""){
        alert('Falta ingresar el correo');
        return false;
    }else if(contra==""){
        alert('Falta ingresar una contraseña');
        return false;
    }
}
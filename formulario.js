//(funcion)(){
    var formulario = document.getElementById('formulario'),
    nombre = formulario.nombre,
    apellido = formulario.apellido,
    terminos = formulario.terminos,
    error = document.getElementById('error');

function validarNombre(e){
if(nombre.value == '' || nombre == null){
    console.log('Completa el nombre');
    error.style.display = 'block';
    error.innerHTML = error.innerHTML + '<li>Ingresa Un Nombre</li>';
    e.preventDefault();
}else{
error.style.display='none';
}
}

function validarApellido(e){
if(apellido.value == '' || apellido == null){
    console.log('Completa el apellido');
    error.style.display = 'block';
    error.innerHTML = error.innerHTML + '<li>Ingresa tu apellido</li>';
    e.preventDefault();
}else{
error.style.display='none';
}

}
function validarTerminos(e){
if(terminos.checked == false){
    console.log('Acepta Los Terminos');
    error.style.display = 'block';
    error.innerHTML = error.innerHTML + '<li>Acepta Los Términos</li>';
    e.preventDefault();
}else if(nombre.value == '' || nombre == null || apellido.value == '' || apellido == null){
error.style.display='block';
}
}

function validarForm(e){
error.innerHTML = '';
error.style.display = 'block';
validarNombre(e);
validarApellido(e);
validarTerminos(e);
}


formulario.addEventListener('submit', validarForm);

//}())
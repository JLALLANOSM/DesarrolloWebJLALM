// seleccionar el formulario por medio id
const formulario = document.querySelector('#formulario');
const contenedor = document.querySelector('#contenedor');
const perfil = document.querySelector('#perfil');

//aniadimos un evento al formulario 
formulario.addEventListener('submit', enviarInfo);

// funcion para el evento
function enviarInfo(e){
    e.preventDefault();
    //formulario de datos 
    const data  = new FormData(formulario);
    
    //console.log(data.get('foto'));
    //return;
    //utilizamos fetch para enviar datos 
    fetch('codigophp.php', {
        method:'POST',
        body: data
    })

    //usando pormesas
    .then(resultado => resultado.json())
    .then(datos => {
        //console.log(datos);
        mostrarInfo(datos)
    })
    
}

function mostrarInfo(datos){
    if(datos){
        const divPerfil = document.createElement('div');
        divPerfil.innerHTML = 
        `<div>
            <div>
                <p>Foto Usuario</p>
                <img style = "width: 35%;" src="${datos[3]}" alt="" srcset="">
            </div>
            <div>
                <p>Nombre: </p>
                <h1>${datos[0]}</h1>
                <p>Usuario: </p>
                <h1>${datos[1]}</h1>
                <p>Email: </p>
                <h1>${datos[2]}</h1>
            </div>
        </div>`;
        perfil.appendChild(divPerfil);

        formulario.reset();
    }else{
        imprimirError('Rellena Todos Los Datos')
    }
}

function imprimirError(error){
    const divError = document.createElement('div');
    divError.textContent = error;
    contenedor.insertBefore(divError, formulario);

    setTimeout(() =>{
        divError.remove();
    }, 2000)
}
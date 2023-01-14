// seleccionar el formulario por medio id

const contenedor = document.querySelector('#contenedor');
const resultado= document.querySelector('#resultado');

//aniadimos un evento al formulario 


function cargarContenido(url){
    fetch(url)
    .then(response => response.text())
    .then(data => document.getElementById("contenido").innerHTML = data);
}

const formulario = document.querySelector('#formulario');
// funcion para el evento
function enviarInfo(){
    
    //formulario.addEventListener('submit', enviarInfo);
    e.preventDefault();
    //formulario de datos 
    const data  = new FormData(formulario);
    
    //console.log(data.get('foto'));
    //return;
    //utilizamos fetch para enviar datos 
    fetch('url', {
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
        <table>
            <thead>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Sexo</th>
                <th>Imagen</th>
                <th>Accion</th>
            </thead>
            <tbody>
                <td>${datos[0]}</td>
                <td>${datos[1]}</td>
                <td>${datos[2]}</td>
                <td>
                    <img style="width: 100px" id="foto" src="images/${datos[3]}" alt="Img no Encontrado" srcset="">
                </td>
                <td>
                    <div>
                        <a>Editar</a>
                        <a href="deleteCoche.php?id=<?php echo$row["id"]?>" class="btneliminar">Eliminar</a>
                    </div>
                </td>
            </tbody>
        </table>
        </div>`;
        resultado.appendChild(divPerfil);

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
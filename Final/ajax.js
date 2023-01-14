
function cargarContenido(url){
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function (){
        if(ajax.readyState==4){
            document.getElementById("contenido").innerHTML=ajax.responseText;

        }
    }
    ajax.open("GET", url, true);
    ajax.send();
}
//funcion que nos servira para retornar resultados
function cargarResultado(pagina) {

    var ajax = new XMLHttpRequest() 
    //console.log(ajax.get('materia'));
    ajax.open("get", pagina, true); 
    ajax.onreadystatechange = function() { // funcion de respuesta
        if (ajax.readyState == 4) {
            //document.getElementById("p1").innerHTML = "";
            document.getElementById("contenido").innerHTML = ajax.responseText;
            //document.getElementById("p1").value=ajax
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); 
    ajax.send();
}

function numCuadros(){
    var numero = encodeURI(document.getElementById('num').value) + "&nocache=" + Math.random();
    var ajax = new XMLHttpRequest() 
    ajax.open("get", "lista.php?num=" + numero, true); //a quien llamara
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
    ajax.send(); 
}



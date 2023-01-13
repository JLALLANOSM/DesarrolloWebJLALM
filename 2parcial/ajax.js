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

function enviarMensajeImagen()
{
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            document.getElementById("contenido").innerHTML=ajax.responseText;
        }
    }
    ajax.open("POST","insertar.php",true);
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    var id = document.getElementById("id").value;
    var img=document.getElementById("img").value;
    var titulos=document.getElementById("titulos").value;
    var autor = document.getElementById("autor").value;
    var ideditorial = document.getElementById("ideditorial").value;
    var anio = document.getElementById("anio").value;
    var idusuario = document.getElementById("idusuario").value;
    var idcarrera = document.getElementById("idcarrera").value;
    ajax.send("id="+id+"&img="+img+"&titulos="+titulos+"&autor="+autor+"&ideditorial="+ideditorial+"&anio"+anio+
                "idusuario="+idusuario+"&idcarrera="+idcarrera);
}
/*
Autor:  ISC David Nicodemo Zilli Vazquez 26 Octubre 2021
url: es una cadena con la direccion a donde se hara el Request
method: es una cadena con el nombre del metodo por el cual se manda el data (GET, POST, PUT, DELETE)
data: es una cadena JSON o cadena tipo GET la cual incluye todos los datos a mandar
sync: es un valor booleano que determina la sincronicidad de la consulta
      (true para consulta asincrona false para una consulta sincrona)
success: funcion definida por el programador pasada como parametro, recibira el resultado
         de la consulta y hara lo necesario con ese mismo
               ejem mostrar un alert con dicho resultado
error: funcion definida por el programador pasada como parametro, mostrara el mensaje de
       error ocurrido
               ejem mostrar un alert con dicho error
loading: funcion definida por el programador pasada como parametro, mostrara un mensaje
         mientras la consulta se ejecuta
               ejem mostrar un alert que diga Cargando...

NOTA=> Si estos 2 ultimos atributos no son especificados,
       no seran mostrados los mensajes de carga ni de error
*/

function makeRequest(url, method, data, sync, success, error, loading){
  try {

    //Verificar que success sea una funcion y si no convertila
    if (typeof success != 'function') success = function () {};

    let xml = new XMLHttpRequest();
    xml.responseType = 'text'; //Configuramos el tipo de respuesta a tipo texto
    //Creamos funcion para mostrar el resultado del request
    xml.onreadystatechange = function () {
      switch(xml.readyState){
        case 3: if(typeof loading == 'function') loading(); break;
        case 4:
                if(xml.status === 200)
                  success(xml.responseText)
                else
                    if(typeof error == 'function') error(xml.status);
      }
    };
    xml.open(method, url, sync); //abrimos conexion
    xml.send(data); //mandamos data
    return xml;

  } catch (e) {
    console.log(e);
  }
}

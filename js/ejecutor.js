var categoria;
var listaMetricas;
var listaDatos;
let oConsole=null;

window.onload = function (){
  categoria = (document.querySelector("#categoria")!=null)? document.querySelector("#categoria").value:null;
  listaMetricas = new Array();
  listaDatos =  new Map();
  if(document.querySelector("#console")!=null)
    oConsole = new HTMLConsole(document.querySelector("#console"));
  STATUS();
}

function Visible(input) {
  document.querySelector("#"+input.name.toUpperCase()).style.display= (input.checked)? "block":"none";
  document.querySelector("#lab"+input.name).style.color = (input.checked)? "#000":"#fff";
  document.querySelector("#lab"+input.name).style.background = (input.checked)? "#fff":"#000";

  if(input.checked){
    listaMetricas.push(input.name.toUpperCase());
  }else{
    //Obtenemos los inputs del formulario que acaba de ser ocultado
    let formInputs = document.querySelector('#form'+input.name.toUpperCase()).elements;
    for (i = 0; i < formInputs.length; i++) {
      let aux = formInputs[i];
      //Verificamos si existe ese valor en la lista de datos y lo quitamos
      if(listaDatos.has(aux.name))
        listaDatos.delete(aux.name);
      aux.value="";
    }

    // eliminamos la metrica que acaba de ser oculta
      listaMetricas = listaMetricas.filter(
                        function(item)
                        {
                          return item !== input.name.toUpperCase();
                        }
                      );
    //Eliminamos resultados al cerrar form
    document.querySelector("#resp"+input.name.toUpperCase()).innerHTML = "";

  }
}

function Data(input){
  //oConsole.log("name: "+input.name+" value:"+input.value);
  if(input.value>=0){
    listaDatos.set(input.name,input.value);
  }
  // var obj = Object.fromEntries(listaDatos);
  // var jsonString = JSON.stringify(obj);
  // oConsole.log(jsonString);
  // oConsole.log(Parser(listaDatos).join('&'));
}

function Calcular() {
  // oConsole.log(categoria);
  // oConsole.log(listaMetricas.join('&'));
  // oConsole.log(Parser(listaDatos).join('&'));
  try{
      if(listaMetricas.length>0)
        if(listaDatos.size>0)
          if(DatosCompletos()){
            //oConsole.clear();
            SCATS(categoria);
            SMETS(listaMetricas.join('&'));
            SDATA(Parser(listaDatos).join('&'));
            // EXE();
            // CLEANDATA();
            // setTimeout(SCATS(categoria),2000);
            // setTimeout(SMETS(listaMetricas.join('&')),3000);
            // setTimeout(SDATA(Parser(listaDatos).join('&')),4000);
            setTimeout(EXE,1000);
            setTimeout(CLEANDATA,1500);
          }else
            alertmsjT('Aviso','No has ingresado todos los valores necesarios','warning');
        else
          alertmsjT('Aviso','No has ingresado ningun valor','warning');
      else
        alertmsjT('Aviso','No has seleccionado ninguna metrica','warning');



  }catch(error){
    console.log(error);
  }

}

function DatosCompletos(){
  var ban = true;
  for (var m in listaMetricas) {
    let formInputs = document.querySelector('#form'+listaMetricas[m]).elements;
    for (i = 0; i < formInputs.length; i++) {
      let aux = formInputs[i];
      if(!listaDatos.has(aux.name)){
        ban = false;
        break;
      }
    }
  }
  return ban;
}
function Parser(listaD){
  let aux = new Array();
  let Ikeys = listaD.keys();
  let Ivalues = listaD.values();
  let key = Ikeys.next();
  let value = Ivalues.next();
  while (!key.done) {
    aux.push(key.value+"="+value.value);
    key = Ikeys.next();
    value = Ivalues.next();
  }
  return aux;
}

//Metodo que se ejecutara cuando EXE reciba el response del servidor
function RESPONSEDATA (resp){
  let data = JSON.parse(resp);
  for(let i in data){
    if(i=="message"){
      let adat = data[i];
      alertmsj(adat["tit"],adat["msj"],adat["icon"]);
    }else
      document.querySelector("#resp"+i.toUpperCase()).innerHTML = data[i];
  }
}
// Metodo que se ejecutara cuando SCATS, SMETS, SDATA y CLEANDATA
// reciban el response del servidor
function RESPONSE (resp){
  if(oConsole!=null) oConsole.log(resp);
  else console.log(resp);
}

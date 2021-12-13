//const urlbase = 'http://mpndev.nz:9009';
//const urlbase = 'http://nicodemozilli.systems:9009';

const urlbase = 'http://localhost:9009';

function STATUS(){
    makeRequest(
      urlbase,
      'GET',
      null,
      true,
      RESPONSE,
      Error,
      null
    );
}
function SCATS(listaCategorias){
  makeRequest(
    urlbase+'/setCat',
    'POST',
    listaCategorias,
    true,
    RESPONSE,
    Error,
    null
  );
}
function SMETS(listaMetricas){
  makeRequest(
    urlbase+'/setMet',
    'POST',
    listaMetricas,
    true,
    RESPONSE,
    Error,
    null
  );
}
function SDATA(listaDatos){
  makeRequest(
    urlbase+'/setDat',
    'POST',
    listaDatos,
    true,
    RESPONSE,
    Error,
    null
  );
}
function EXE(){
  makeRequest(
    urlbase+'/Execute',
    'POST',
    null,
    true,
    RESPONSEDATA,
    ERR,
    null
  );
}
function CLEANDATA(){
  makeRequest(
    urlbase+'/DeleteData',
    'POST',
    null,
    true,
    RESPONSE,
    Error,
    null
  );
}

function Error(r){
  console.log('Lo sentimos hubo un problema');
}

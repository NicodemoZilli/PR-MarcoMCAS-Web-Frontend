function Adda(inp){
  let output = document.querySelector('#outputLCOM');
      output.innerHTML='';

  for(i=0; i<inp.value; i++){
    let title = document.createElement('span');
        title.innerHTML = 'Para el atributo '+(i+1)+':';

    let p1 = document.createElement('p');
        p1.innerHTML = 'N&uacute;mero total de <i>"m&eacute;todos"</i> que acceden a el: ';
    let muA = document.createElement('input');
        muA.type = 'number';
        muA.min = 0;
        muA.step = 1;
        muA.placeholder = 'muA';
        muA.name = "LCOMmuA"+i;
        muA.addEventListener('input',function(){ Data(muA); });

    let br = document.createElement('br');
    let div = document.createElement('div');
        div.className = 'inputs';

        div.appendChild(p1);
        div.appendChild(muA);
        div.appendChild(br);

        output.appendChild(title);
        output.appendChild(div);
  }

}

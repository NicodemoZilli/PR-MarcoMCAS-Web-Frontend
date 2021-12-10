function AddFP(inp){
  let output = document.querySelector('#outputFP');
      output.innerHTML='';
      
  for(i=0; i<inp.value; i++){
    let title = document.createElement('span');
        title.innerHTML = 'Para la clase '+(i+1)+':';
    let p1 = document.createElement('p');
        p1.innerHTML = 'Metodos Nuevos: ';
    let mn = document.createElement('input');
        mn.type = 'number';
        mn.min = 0;
        mn.step = 1;
        mn.placeholder = 'Mn';
        mn.name = "FPMn"+i;
        mn.addEventListener('input',function(){ Data(mn); });

    let p2 = document.createElement('p');
        p2.innerHTML = 'Metodos Sobreescritos: ';
    let mo = document.createElement('input');
        mo.type = 'number';
        mo.min = 0;
        mo.step = 1;
        mo.placeholder = 'Mo';
        mo.name = "FPMo"+i;
        mo.addEventListener('input',function(){ Data(mo); });

    let p3 = document.createElement('p');
        p3.innerHTML = 'N&uacute;mero de Descendientes: ';
    let dc = document.createElement('input');
        dc.type = 'number';
        dc.min = 0;
        dc.step = 1;
        dc.placeholder = 'DC';
        dc.name = "FPDC"+i;
        dc.addEventListener('input',function(){ Data(dc); });

    let br = document.createElement('br');

    let div = document.createElement('div');
        div.className = 'inputs';

        div.appendChild(p1);
        div.appendChild(mn);
        div.appendChild(br);

        div.appendChild(p2);
        div.appendChild(mo);
        div.appendChild(br);

        div.appendChild(p3);
        div.appendChild(dc);
        div.appendChild(br);

        output.appendChild(title);
        output.appendChild(div);
  }

}

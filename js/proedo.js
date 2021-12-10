function AddPMFP(inp){
  let output = document.querySelector('#outputPMFP');
      output.innerHTML='';

  for(i=0; i<inp.value; i++){
    let title = document.createElement('span');
        title.innerHTML = 'Para la clase '+(i+1)+':';

    let p1 = document.createElement('p');
        p1.innerHTML = 'N&uacute;mero total de funciones <i>"private"</i>: ';
    let fp = document.createElement('input');
        fp.type = 'number';
        fp.min = 0;
        fp.step = 1;
        fp.placeholder = 'FP';
        fp.name = "PMFPFP"+i;
        fp.addEventListener('input',function(){ Data(fp); });

    let p2 = document.createElement('p');
        p2.innerHTML = 'N&uacute;mero total de funciones de la clase: ';
    let ftc = document.createElement('input');
        ftc.type = 'number';
        ftc.min = 0;
        ftc.step = 1;
        ftc.placeholder = 'FTC';
        ftc.name = "PMFPFTC"+i;
        ftc.addEventListener('input',function(){ Data(ftc); });

    let br = document.createElement('br');

    let div = document.createElement('div');
        div.className = 'inputs';

        div.appendChild(p1);
        div.appendChild(fp);
        div.appendChild(br);

        div.appendChild(p2);
        div.appendChild(ftc);
        div.appendChild(br);

        output.appendChild(title);
        output.appendChild(div);
  }

}

function AddPMFPR(inp){
  let output = document.querySelector('#outputPMFPR');
      output.innerHTML='';

  for(i=0; i<inp.value; i++){
    let title = document.createElement('span');
        title.innerHTML = 'Para la clase '+(i+1)+':';

    let p1 = document.createElement('p');
        p1.innerHTML = 'N&uacute;mero total de funciones <i>"protected"</i>: ';
    let fpr = document.createElement('input');
        fpr.type = 'number';
        fpr.min = 0;
        fpr.step = 1;
        fpr.placeholder = 'FPR';
        fpr.name = "PMFPRFPR"+i;
        fpr.addEventListener('input',function(){ Data(fpr); });

    let p2 = document.createElement('p');
        p2.innerHTML = 'N&uacute;mero total de funciones de la Jerarqu&iacute;a: ';
    let ntf = document.createElement('input');
        ntf.type = 'number';
        ntf.min = 0;
        ntf.step = 1;
        ntf.placeholder = 'NTF';
        ntf.name = "PMFPRNTF"+i;
        ntf.addEventListener('input',function(){ Data(ntf); });

    let br = document.createElement('br');

    let div = document.createElement('div');
        div.className = 'inputs';

        div.appendChild(p1);
        div.appendChild(fpr);
        div.appendChild(br);

        div.appendChild(p2);
        div.appendChild(ntf);
        div.appendChild(br);

        output.appendChild(title);
        output.appendChild(div);
  }

}

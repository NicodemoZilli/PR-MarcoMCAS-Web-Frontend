function AddCOF(inp){
  let output = document.querySelector('#outputCOF');
      output.innerHTML='';

  for(i=0; i<inp.value; i++){
    let title = document.createElement('span');
        title.innerHTML = 'Para la clase '+(i+1)+':';
    let p = document.createElement('p');
        p.innerHTML = 'Numero de referencias no basadas en herencia: ';
    let c = document.createElement('input');
        c.type = 'number';
        c.min = 0;
        c.step = 1;
        c.placeholder = 'C';
        c.name = "COFC"+i;
        c.addEventListener('input',function(){ Data(c); });


    let br = document.createElement('br');

    let div = document.createElement('div');
        div.className = 'inputs';

        div.appendChild(p);
        div.appendChild(c);
        div.appendChild(br);

        output.appendChild(title);
        output.appendChild(div);
  }

}

function HTMLConsole(div) {
  this.cad="";
  this.output = div;

  this.log = function(text){
    this.cad += text+"<br>";
    this.print();
  }
  this.print = function(){
    let lines = this.cad.split("<br>");
    let aux="";
    for(let i=0; i<lines.length-1; i++){
        aux+= (i+1)+"   "+lines[i]+"<br>";
    }
    this.output.innerHTML = aux;
    this.output.scrollTop = this.output.scrollHeight;

  }
  this.clear = function (){
    this.cad = "";
    this.print();
  }
}

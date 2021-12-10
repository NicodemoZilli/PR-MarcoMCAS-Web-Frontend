<?php
  include_once 'html/head.html';
?>


<header>
      <div class="contenedor">
        <a href="../" class='logo'><img src="media/lcenidet.png" alt=""></a>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="index.php" >Inicio</a>
          <a href="genericidad.php" class="active">Gen</a>
          <a href="flexibilidad.php">Flex</a>
          <a href="legibilidad.php">Leg</a>
          <a href="proedo.php">PE</a>
          <a href="procomp.php">PC</a>
          <a href="independencia.php">Ind</a>
          <a href="uresponsabilidad.php">UR</a>
          <a href="aislamiento.php">Ais</a>
        </nav>
      </div>
</header>

<div class="content">

  <!-- Indicador de la categoria de las metricas -->
  <input type="hidden" id="categoria" value="Genericidad">

  <div class="checks">
    <label id="labdit" for="cdit" class="selfcheck">DIT<input class="hidden" type="checkbox" name="dit"  id="cdit" oninput="Visible(this)"></label>
    <label id="labnoc" for="cnoc" class="selfcheck">NOC<input class="hidden" type="checkbox" name="noc"  id="cnoc" oninput="Visible(this)"></label>
    <label id="labfhi" for="cfhi" class="selfcheck">FHI<input class="hidden" type="checkbox" name="fhi"  id="cfhi" oninput="Visible(this)"></label>
    <label id="labfhij" for="cfhij" class="selfcheck">FHIJ<input class="hidden" type="checkbox" name="fhij"  id="cfhij" oninput="Visible(this)"></label>
    <label id="labffc" for="cffc" class="selfcheck">FFC<input class="hidden" type="checkbox" name="ffc"  id="cffc" oninput="Visible(this)"></label>
    <label id="labfhiac" for="cfhiac" class="selfcheck">FHIAC<input class="hidden" type="checkbox" name="fhiac"  id="cfhiac" oninput="Visible(this)"></label>
    <label id="labfmfac" for="cfmfac" class="selfcheck">FMFAC<input class="hidden" type="checkbox" name="fmfac"  id="cfmfac" oninput="Visible(this)"></label>
    <button id="EXE" class="selfcheck" type="button" onclick="Calcular()">Calcular</button>
  </div>

  <div class="forms">

    <div class="hidden form" id="DIT">
      <h1>DIT</h1>
      <br>
    </div>

    <div class="hidden form" id="NOC">
      <h1>NOC</h1>
      <br>

    </div>

    <div class="hidden form" id="FHI">
      <h1>FHI</h1>
      <i>Factor de Herencia de Implementacion </i>
      <div class="formContainer">
          <div>
            <form id="formFHI">
              <div class="inputs">
                  <p>M&eacute;todos Virtuales Implementados:</p>
                  <input type="number" min="0" step="1" placeholder="Mv" name="FHIMv" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p for="">M&eacute;todos No Virtuales Implementados:</p>
                <input type="number" min="0" step="1" placeholder="Mnv" name="FHIMnv" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p for="">Total de M&eacute;todos Implementados:</p>
                <input type="number" min="0" step="1" placeholder="Tm" name="FHITm" oninput="Data(this)">
              </div>
            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respFHI"></h1>
        </div>
      </div>
      <br>
    </div>

    <div class="hidden form" id="FHIJ">
      <h1>FHIJ</h1>
      <i>Factor de Herencia de Implementacion de una Jerarqu&iacute;a</i>
      <div class="formContainer">
          <div>
            <form id="formFHIJ">
              <div class="inputs">
                <p>FHI de una Subclase:</p>
                <input type="number" min="0" step="0.1" placeholder="FHI" name="FHIJFHI" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Clases en esa Jerarqu&iacute;a:</p>
                <input type="number" min="0" step="1" placeholder="Tc" name="FHIJTc" oninput="Data(this)">
              </div>

            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respFHIJ"></h1>
        </div>
      </div>
      <br>
    </div>

    <div class="hidden form" id="FFC">
      <h1>FFC</h1>
      <i>Factor de Flexibilidad de Clase</i>
      <div class="formContainer">
          <div>
            <form id="formFFC">
              <div class="inputs">
                <p>M&eacute;todos virtuales polim&oacute;rficos:</p>
                <input type="number" min="0" step="1" placeholder="NOP" name="FFCNOP" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Total de M&eacute;todos en la clase:</p>
                <input type="number" min="0" step="1" placeholder="Tm" name="FFCTm" oninput="Data(this)">
              </div>
            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respFFC"></h1>
        </div>
      </div>
      <br>
    </div>

    <div class="hidden form" id="FHIAC">
      <h1>FHIAC</h1>
      <i>Factor de Herencia de Implementacion de una Arquitectura</i>
      <div class="formContainer">
          <div>
            <form id="formFHIAC">
              <div class="inputs">
                <p>FHIJ de una Jerarqu&iacute;a:</p>
                <input type="number" min="0" step="0.1" placeholder="FHIJ" name="FHIACFHIJ" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Conteo de Jerarqu&iacute;as de Clase:</p>
                <input type="number" min="0" step="1" placeholder="NOH" name="FHIACNOH" oninput="Data(this)">
              </div>

            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respFHIAC"></h1>
        </div>
      </div>
      <br>
    </div>

    <div class="hidden form" id="FMFAC">
      <h1>FMFAC</h1>
      <i>Factor Medio de Flexibilidad de Arquitecturas de Clase</i>
      <div class="formContainer">
          <div>
            <form id="formFMFAC">
              <div class="inputs">
                <p>FFC de una Clase que Hereda su comportamiento:</p>
                <input type="number" min="0" step="0.1" placeholder="FFC" name="FMFACFFC" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Total de Clases en la Arquitectura:</p>
                <input type="number" min="0" step="1" placeholder="Tc" name="FMFACTc" oninput="Data(this)">
              </div>

            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respFMFAC"></h1>
        </div>
      </div>
      <br>
    </div>

  </div>
  </div>

  <?php
    include_once 'html/console.html';
    include_once 'html/footer.html';
  ?>

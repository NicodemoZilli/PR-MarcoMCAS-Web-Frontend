<?php
  include_once 'html/head.html';
?>


<header>
      <div class="contenedor">
        <a href="../" class='logo'><img src="media/lcenidet.png" alt=""></a>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="index.php">Inicio</a>
          <a href="genericidad.php">Gen</a>
          <a href="flexibilidad.php">Flex</a>
          <a href="legibilidad.php">Leg</a>
          <a href="proedo.php" class="active">PE</a>
          <a href="procomp.php">PC</a>
          <a href="independencia.php">Ind</a>
          <a href="uresponsabilidad.php">UR</a>
          <a href="aislamiento.php">Ais</a>
        </nav>
      </div>
</header>

<div class="content">

  <!-- Indicador de la categoria de las metricas -->
  <input type="hidden" id="categoria" value="PEstado">

  <div class="checks">
    <label id="labpmfp" for="cpmfp" class="selfcheck">PMFP<input class="hidden" type="checkbox" name="pmfp"  id="cpmfp" oninput="Visible(this)"></label>
    <label id="labpmfpr" for="cpmfpr" class="selfcheck">PMFPR<input class="hidden" type="checkbox" name="pmfpr"  id="cpmfpr" oninput="Visible(this)"></label>
    <label id="labpmff" for="cpmff" class="selfcheck">PMFF<input class="hidden" type="checkbox" name="pmff"  id="cpmff" oninput="Visible(this)"></label>
    <button id="EXE" class="selfcheck" type="button" onclick="Calcular()">Calcular</button>
  </div>

  <div class="forms">

    <div class="hidden form" id="PMFP">
      <h1>PMFP</h1>
      <i>Factor de Proteccion Modular</i>
      <div class="formContainer">
          <div>
            <form id="formPMFP">
              <div class="inputs">
                  <p>Funciones No <i>"public" </i>:</p>
                  <input type="number" min="0" step="1" placeholder="FNP" name="PMFPFNP" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Total de Funciones:</p>
                <input type="number" min="0" step="1" placeholder="TF" name="PMFPTF" oninput="Data(this)">
              </div>

            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respPMFP"></h1>
        </div>
      </div>
      <br>
    </div>

    <div class="hidden form" id="PMFPR">
      <h1>PMFPR</h1>
      <i>Total de Protecion Modular</i>
      <div class="formContainer">
          <div>
            <form id="formPMFPR">
              <div class="inputs">
                <p>Grado de protección modular de funciones <i>“private”</i> :</p>
                <input type="number" min="0" step="1" placeholder="PMFP" name="PMFPRPMFP" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Grado de protección modular de funciones <i>“protected”</i> :</p>
                <input type="number" min="0" step="1" placeholder="PMFPR" name="PMFPRPMFPR" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Grado de protección modular de funciones <i>“friendly”</i> o <i>“default”</i> :</p>
                <input type="number" min="0" step="1" placeholder="PMFF" name="PMFPRPMFF" oninput="Data(this)">
              </div>
            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respPMFPR"></h1>
        </div>
      </div>
      <br>
    </div>

    <div class="hidden form" id="PMFF">
      <h1>PMFF</h1>
      <i>Total de Protecion Modular</i>
      <div class="formContainer">
          <div>
            <form id="formPMFF">
              <div class="inputs">
                <p>Grado de protección modular de funciones <i>“private”</i> :</p>
                <input type="number" min="0" step="1" placeholder="PMFP" name="PMFFPMFP" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Grado de protección modular de funciones <i>“protected”</i> :</p>
                <input type="number" min="0" step="1" placeholder="PMFF" name="PMFFPMFF" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Grado de protección modular de funciones <i>“friendly”</i> o <i>“default”</i> :</p>
                <input type="number" min="0" step="1" placeholder="PMFF" name="PMFFPMFF" oninput="Data(this)">
              </div>
            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respPMFF"></h1>
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

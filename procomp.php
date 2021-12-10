<?php
  include_once 'html/head.html';
?>


<header>
      <div class="contenedor">
        <a href="index.php" class='logo'><img src="media/lcenidet.png" alt=""></a>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="index.php" >Inicio</a>
          <a href="genericidad.php">Gen</a>
          <a href="flexibilidad.php">Flex</a>
          <a href="legibilidad.php">Leg</a>
          <a href="proedo.php">PE</a>
          <a href="procomp.php" class="active">PC</a>
          <a href="independencia.php">Ind</a>
          <a href="uresponsabilidad.php">UR</a>
          <a href="aislamiento.php">Ais</a>
        </nav>
      </div>
</header>

<div class="content">

  <!-- Indicador de la categoria de las metricas -->
  <input type="hidden" id="categoria" value="PComportamiento">

  <div class="checks">
    <label id="labpm" for="cpm" class="selfcheck">PM<input class="hidden" type="checkbox" name="pm"  id="cpm" oninput="Visible(this)"></label>
    <label id="labtpm" for="ctpm" class="selfcheck">TPM<input class="hidden" type="checkbox" name="tpm"  id="ctpm" oninput="Visible(this)"></label>
    <button id="EXE" class="selfcheck" type="button" onclick="Calcular()">Calcular</button>
  </div>

  <div class="forms">

    <div class="hidden form" id="PM">
      <h1>PM</h1>
      <i>Factor de Proteccion Modular</i>
      <div class="formContainer">
          <div>
            <form id="formPM">
              <div class="inputs">
                  <p>Funciones No <i>"public" </i>:</p>
                  <input type="number" min="0" step="1" placeholder="FNP" name="PMFNP" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Total de Funciones:</p>
                <input type="number" min="0" step="1" placeholder="TF" name="PMTF" oninput="Data(this)">
              </div>

            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respPM"></h1>
        </div>
      </div>
      <br>
    </div>

    <div class="hidden form" id="TPM">
      <h1>TPM</h1>
      <i>Total de Protecion Modular</i>
      <div class="formContainer">
          <div>
            <form id="formTPM">
              <div class="inputs">
                <p>Grado de protección modular de funciones <i>“private”</i> :</p>
                <input type="number" min="0" step="1" placeholder="PMFP" name="TPMPMFP" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Grado de protección modular de funciones <i>“protected”</i> :</p>
                <input type="number" min="0" step="1" placeholder="PMFPR" name="TPMPMFPR" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Grado de protección modular de funciones <i>“friendly”</i> o <i>“default”</i> :</p>
                <input type="number" min="0" step="1" placeholder="PMFF" name="TPMPMFF" oninput="Data(this)">
              </div>
            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respTPM"></h1>
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

<?php
  include_once 'html/head.html';
?>

<script src="js/uresp.js?v=<?php echo time();?>" charset="utf-8"></script>

<header>
      <div class="contenedor">
        <a href="index.php" class='logo'><img src="media/lcenidet.png" alt=""></a>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="index.php">Inicio</a>
          <a href="genericidad.php">Gen</a>
          <a href="flexibilidad.php">Flex</a>
          <a href="legibilidad.php">Leg</a>
          <a href="proedo.php">PE</a>
          <a href="procomp.php">PC</a>
          <a href="independencia.php">Ind</a>
          <a href="uresponsabilidad.php" class="active">UR</a>
          <a href="aislamiento.php">Ais</a>
        </nav>
      </div>
</header>

<div class="content">

  <!-- Indicador de la categoria de las metricas -->
  <input type="hidden" id="categoria" value="UnicaResponsabilidad">

  <div class="checks">
    <label id="lablcom" for="clcom" class="selfcheck">LCOM<input class="hidden" type="checkbox" name="lcom"  id="clcom" oninput="Visible(this)"></label>
    <label id="labrfc" for="crfc" class="selfcheck">RFC<input class="hidden" type="checkbox" name="rfc"  id="crfc" oninput="Visible(this)"></label>
    <button id="EXE" class="selfcheck" type="button" onclick="Calcular()">Calcular</button>
  </div>

  <div class="forms">

    <div class="hidden form" id="LCOM">
      <h1>LCOM</h1>
      <i>Carencia de Cohesion</i>
      <div class="formContainer">
          <div>
            <form id="formLCOM">
              <div class="inputs">
                  <p>N&uacute;mero total de M&eacute;todos:</p>
                  <input type="number" min="2" step="1" placeholder="m" name="LCOMm" oninput="Data(this)">
              </div>
              <div class="inputs">
                  <p>N&uacute;mero total de Atributos:</p>
                  <input type="number" min="0" step="1" placeholder="a" name="LCOMa" oninput="Data(this); Adda(this);">
              </div>
              <br>
              <div class='output' id="outputLCOM">

              </div>
            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respLCOM"></h1>
        </div>
      </div>
      <br>
    </div>

    <div class="hidden form" id="RFC">
      <h1>RFC</h1>
      <i>Respuesta para una Clase</i>
      <div class="formContainer">
          <div>
            <form id="formRFC">
              <div class="inputs">
                  <p>N&uacute;mero de m&eacute;todos locales:</p>
                  <input type="number" min="0" step="1" placeholder="NML" name="RFCNML" oninput="Data(this)">
              </div>
              <div class="inputs">
                  <p>N&uacute;mero de m&eacute;todos remotos:</p>
                  <input type="number" min="0" step="1" placeholder="NMR" name="RFCNMR" oninput="Data(this)">
              </div>
            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respRFC"></h1>
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

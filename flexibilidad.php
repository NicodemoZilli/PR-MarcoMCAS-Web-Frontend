<?php
  include_once 'html/head.html';
?>

<script src="js/flex.js?v=<?php echo time();?>" charset="utf-8"></script>

<header>
      <div class="contenedor">
        <a href="../" class='logo'><img src="media/lcenidet.png" alt=""></a>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="index.php" >Inicio</a>
          <a href="genericidad.php">Gen</a>
          <a href="flexibilidad.php" class="active">Flex</a>
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
  <input type="hidden" id="categoria" value="Flexibilidad">

  <div class="checks">
    <label id="labfa" for="cfa" class="selfcheck">FA<input class="hidden" type="checkbox" name="fa"  id="cfa" oninput="Visible(this)"></label>
    <label id="labfp" for="cfp" class="selfcheck">FP<input class="hidden" type="checkbox" name="fp"  id="cfp" oninput="Visible(this)"></label>
    <button id="EXE" class="selfcheck" type="button" onclick="Calcular()">Calcular</button>
  </div>

  <div class="forms">

    <div class="hidden form" id="FA">
      <h1>FA</h1>
      <i>Factor de Abstracción</i>
      <div class="formContainer">
          <div>
            <form id="formFA">
              <div class="inputs">
                  <p>Total de clases abstractas e interfaces:</p>
                  <input type="number" min="0" step="1" placeholder="TCA" name="FATCA" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p for="">Total de Clases:</p>
                <input type="number" min="0" step="1" placeholder="TC" name="FATC" oninput="Data(this)">
              </div>

            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respFA"></h1>
        </div>
      </div>
      <br>
    </div>

    <div class="hidden form" id="FP">
      <h1>FP</h1>
      <i>Factor de Polimorfismo</i>
      <div class="formContainer">
          <div>
            <form id="formFP">
              <div class="inputs">
                <p>Total de Clases:</p>
                <input type="number" min="0" step="1" placeholder="TC" name="FPTC" oninput="Data(this); AddFP(this);">
              </div>
              <br>
              <div class='output' id="outputFP">

              </div>
            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respFP"></h1>
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

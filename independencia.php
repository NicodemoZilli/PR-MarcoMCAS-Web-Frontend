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
          <a href="procomp.php">PC</a>
          <a href="independencia.php" class="active">Ind</a>
          <a href="uresponsabilidad.php">UR</a>
          <a href="aislamiento.php">Ais</a>
        </nav>
      </div>
</header>

<div class="content">

  <!-- Indicador de la categoria de las metricas -->
  <input type="hidden" id="categoria" value="Independencia">

  <div class="checks">
    <label id="labcof" for="ccof" class="selfcheck">COF<input class="hidden" type="checkbox" name="cof"  id="ccof" oninput="Visible(this)"></label>
    <button id="EXE" class="selfcheck" type="button" onclick="Calcular()">Calcular</button>
  </div>

  <div class="forms">

    <div class="hidden form" id="COF">
      <h1>COF</h1>
      <i>Factor de Acoplamiento</i>
      <div class="formContainer">
          <div>
            <form id="formCOF">
              <div class="inputs">
                <p>Sumatoria Total de C:</p>
                <input type="number" min="0" step="1" placeholder="ST" name="COFST" oninput="Data(this)">
              </div>
              <div class="inputs">
                <p>Total de Clases:</p>
                <input type="number" min="0" step="1" placeholder="TC" name="COFTC" oninput="Data(this)">
              </div>
            </form>
          </div>
        <div class="result">
          <p>Resultado: </p>
          <h1 id="respCOF"></h1>
        </div>
      </div>
      <br>
    </div>


  </div>

  <!-- <h1 style=" width: 100vw; margin-top: 30vh; color: #fff; text-align: center;">Una disculpa, esta p&aacute;gina a&uacute;n se encuentra en construcci&oacute;n</h1> -->

</div>

  <?php
    include_once 'html/console.html';
    include_once 'html/footer.html';
  ?>

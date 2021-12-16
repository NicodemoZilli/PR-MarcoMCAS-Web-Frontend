<?php
  include_once 'html/head.html';
?>

<link rel="stylesheet" href="css/index.css?v=4">

<header>
      <div class="contenedor">
        <a href="index.php" class='logo'><img src="media/lcenidet.png" alt=""></a>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="index.php" class="active">Inicio</a>
          <a href="genericidad.php">Gen</a>
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

    <div class="title">
      <h1>Bienvenido al Marco de Servicios de Cálculo de Calidad de Arquitecturas de Software</h1>
      <h1>CENIDET 2021</h1>
      <br><br>
    </div>

    <div class="diagramas">
      <h2>Diagrama de Ishikawa Metricas de Calidad</h2>
      <br>
      <a href="media/diagramas/ishikawa.png" target="_blank">
        <img src="media/diagramas/ishikawa.png" alt="">
      </a>
      <br><br>
      <h2>Diagrama de Clases</h2>
      <br>
      <h3>Servidor en Consola</h3>
      <a href="media/diagramas/DCM-Composite-Completo.png" target="_blank">
        <img src="media/diagramas/DCM-Composite-Completo.png" alt="">
      </a>
      <br>
      <h3>Servidor con GUI</h3>
      <a href="media/diagramas/DCM-Composite-GUI-Completo.png" target="_blank">
        <img src="media/diagramas/DCM-Composite-GUI-Completo.png" alt="">
      </a>
      <br><br>
      <h2>Diagramas de Casos de Uso</h2>
      <br>
      <a href="media/diagramas/DCUReuso.png" target="_blank">
        <img src="media/diagramas/DCUReuso.png" alt="">
      </a>
      <a href="media/diagramas/DCUModularidad.png" target="_blank">
        <img src="media/diagramas/DCUModularidad.png" alt="">
      </a>
      <a href="media/diagramas/DCUEncapsulamiento.png" target="_blank">
        <img src="media/diagramas/DCUEncapsulamiento.png" alt="">
      </a>
      <a href="media/diagramas/DCUAutonomia.png" target="_blank">
        <img src="media/diagramas/DCUAutonomia.png" alt="">
      </a>

    </div>

<br><br>
<?php
      include_once 'html/footer.html';
?>

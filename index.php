<?php
  include_once 'html/head.html';
?>

<link rel="stylesheet" href="css/index.css?v=2">

<header>
      <div class="contenedor">
        <a href="../" class='logo'><img src="media/lcenidet.png" alt=""></a>
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
      <h1>Bienvenido al Marco de Metricas de Calidad de Arquitecturas de Software</h1>
      <h1>CENIDET 2021</h1>
      <br><br>
      <h2>Diagrama de Ishikawa Metricas de Calidad</h2>
      <br>
      <img src="media/ishikawa.png" alt="">
    </div>


<?php
      include_once 'html/footer.html';
?>

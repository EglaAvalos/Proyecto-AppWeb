<!DOCTYPE html>
<html>
  <head>
    <title>Segunda aplicacion web</title>
    <meta
      name="Descripcion"
      content="Este es un sitio para practicar CSS y otros elementos"
    />

    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>

  <body>
    <div class="navbar">
      <div class="container">
        <ul class="nav navbar-nav">
          <li><a href="index.html"> Inicio</a></li>
          <li><a href="index.html"> Agregar</a></li>
        </ul>
      </div>
    </div>

    <div>
      <h1>Registro de animales</h1>
      <h2>Ingrese los datos solicitados</h2>

      <form action="">

        <label for="">Nombre:</label>
        <input type="text" maxlength="100" id="nombre">

        <label for="">Especie</label>
        <input type="text" maxlength="100" id="especie">

        <label for="">Color</label>
       <input type="text" maxlength="100" id="color">

    </form>
    </div>
  </body>
</html>

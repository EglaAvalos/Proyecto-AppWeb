<?php include("header.php")?>
    <div>
      <h1>Registro de animales</h1>
      <h2>Consulte e ingrese los registros de animales existentes</h2>

      <table class="table">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Color</th>
          </tr>
        </thead>

        <tbody>
          <?php
          include("php/entities/Animal.php");
          $registros=getAll();
          if(count($registros)>0){
            foreach($registros as $row){
              echo "<tr>".
                  "<td> ". $row->nombre . "</td>".
                  "<td> ". $row->especie . "</td>".
                  "<td> ". $row->color . "</td>".
                  "</tr>";
            }
          }
          ?>
        </tbody>
        </table>
        
      <table class="tabla">
         <thead>
          <tr>
           <th>nombre</th>
           <th>artista</th>
            <th>genero</th>
           <th>duración</th>
          </tr>
        </thead>
        <tbody>
          <?php
         include("php/entities/Musica.php");
         $registros = getAllMusica();
         if (count($registros) > 0) {
          foreach ($registros as $row) {
           echo "<tr>".
            "<td> ". $row->nombre . "</td>".
            "<td> ". $row->artista . "</td>".
           "<td> ". $row->genero . "</td>".
           "<td> ". $row->duracion . "</td>".
               "</tr>";
        }
      }
      ?>
    </tbody>
  </table>
</table>

<?php include("footer.php")?>

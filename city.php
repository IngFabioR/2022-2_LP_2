
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


  <!-- DATATABLE -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.12.1/af-2.4.0/b-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.12.1/af-2.4.0/b-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.js"></script>
 
 
<!-- links de bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<!-- modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
NUEVO</button>



<!-- tabla de datos -->
 <table  id="ciudad" class="table table-hover">
   
    <thead> 
        <tr>
            <th>Codigo del Pais</th>
            <th>Nombre</th>
            <th>Distritos</th>
            <th>Poblacion</th>
        </tr>
     </head>
    <tbody>

         <?php
            include "conexion.php";

            $sql="SELECT * FROM city";
            $datos=$cone->query($sql);
               foreach ($datos as $pais)
                {
                  echo "<tr>";
                  echo "<td>" . $pais['CountryCode'] . "</td>";
                  echo "<td>" . $pais['Name'] . "</td>";
                  echo "<td>" . $pais['District'] . "</td>";
                  echo "<td>" . $pais['Population'] . "</td>";
                  echo "</tr>"; 
                }
         ?>
    
</tbody>
 
</table>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ciudad</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- FORMULARIO -->
        <form method="POST" action="city_grabar.php">
        <div class="mb-3"> 
          <lablel for="exampleFormControlImput1" class="form-label">Codigo del Pais</label>
          <select name="codigopais" class="form-control">
                <?php
                $sql="SELECT * FROM country";
                $datos=$cone->query($sql);
                  foreach ($datos as $pais)
                    {
                      echo "<option value='" . 
                      $pais['Code'] . "'>" . $pais['Name'] ."</option>";
                    }
                ?>
          </select>
        </div>
        <div class="mb-3"> 
          <lablel for="exampleFormControlImput1" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre_ciudad" placeholder="Nombre Ciudad" required>
        </div>
        <div class="mb-3"> 
          <lablel for="exampleFormControlImput1" class="form-label">Distritos</label>
          <input type="text" class="form-control" name="nombre_distrito" placeholder="Nombre Distrito" required>
        </div>
        <div class="mb-3"> 
          <lablel for="exampleFormControlImput1" class="form-label">Poblacion</label>
          <input type="text" class="form-control" name="poblacion" placeholder="Población" required>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" value="Guardar"></input>
      </div>
       </form>
    </div>
  </div>
</div>

<script>
$(document).ready( function (){
    $('#ciudad').DataTable();
});
</script>


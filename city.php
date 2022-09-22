
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


  <!-- DATATABLE -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.12.1/af-2.4.0/b-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.12.1/af-2.4.0/b-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.4/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/sr-1.1.1/datatables.min.js"></script>
 
 


<!-- tabla de datos -->
 <table  id="ciudad" class="table table-hover">
     <?php
      include "modal.php";
     ?>
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


<script>
$(document).ready( function (){
    $('#ciudad').DataTable();
});
</script>


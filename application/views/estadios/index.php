<h1 class=" text-center" >
    <i class="fa-brands fa-dribbble"></i>
    Estadios
    <br><br><br>
</h1>
<!--<div class=" row">
    <div class="col-md-12 text-end">
      <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="fa fa-eye"></i>  Ver Estadio
      </button>
       Button trigger modal   <a href=" <?php echo site_url('estadios/nuevo') ?> " class=" btn btn-outline-success">
        <i class="fa fa-plus-circle fa-1x " ></i>
            Agregar Estadios
        </a>
        <br><br>

    </div>
</div>-->
<?php if ($listadoEstadios): ?>
    <table class=" table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CAPACIDAD</th>
                <th>LONGITUD</th>
                <th>LATIDUD</th>
                <th>ACCIONES</th>

            </tr>
        </thead>


    <tbody >
        <?php foreach ($listadoEstadios as $estadio): ?>
            <tr >
                <td><?php echo $estadio->idEstadioTU; ?></td>
                <td><?php echo $estadio->nombreEstadioTU; ?></td>
                <td><?php echo $estadio->capacidadEstadioTU; ?></td>
                <td><?php echo $estadio->latitudEstadioTU; ?></td>
                <td><?php echo $estadio->longitudEstadioTU; ?></td>

                <td>
                <a href="<?php echo site_url('estadios/borrar/').$estadio->idEstadioTU; ?>">
                <i class="fa-solid fa-trash"></i>
                    Eliminar</a>
                </td>

            </tr>

         <?php endforeach; ?>

    </tbody>
    </table>
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <i class="fa fa-eye"></i>Mapa de Estadios
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ..
        <div id="reporteMapa" style="height: 300px; width: 100%; border:2px solid black;" class="">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php else: ?>
    <div class=" alert alert-danger">
        No se encontro Estadios
    </div>

<?php endif; ?>

<script type="text/javascript">
  function initMap() {
    var coordenadaCentral = new google.maps.LatLng(-0.152948869329262, -78.4868431364856);
    var miMapa = new google.maps.Map(
      document.getElementById('reporteMapa'),
      {
        center: coordenadaCentral,
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
    );

    <?php foreach ($listadoEstadios as $estadio): ?>
      var coordenadaTemporal = new google.maps.LatLng(
        <?php echo $estadio->latitudEstadioTU; ?>,
        <?php echo $estadio->longitudEstadioTU; ?>
      );
      var marcador = new google.maps.Marker({
        position: coordenadaTemporal,
        map: miMapa,
        title: '<?php echo $estadio->nombreEstadioTU; ?>',
      });
    <?php endforeach; ?>
  }
</script>

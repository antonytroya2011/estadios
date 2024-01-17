<h1 class=" text-center" >
<i class="fa-brands fa-dribbble"></i>
    Estadios
    <br><br><br>
</h1>


<div id="reporteMapa" style="height: 750px; width: 1050px; border:2px solid black;" class="">



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

<h1>
    <br>
    
    <b>
        <i class="fa fa-plus-circle"></i>
        NUEVO ESTADIO
    </b>
    </h1>
    <br>
    <form class="" action="<?php echo site_url('estadios/guardarEstadio')?>" method="post">
        <label for=""> <b>Nombre:</b> </label>
        <input type="text" name="nombreEstadioTU" id="nombreEstadioTU" value="" class="form-control" placeholder="Ingrese el nombre" required>
        <br>
        <label for=""> <b>Capacidad:</b> </label>
        <input type="number" name="capacidadEstadioTU" id="capacidadEstadioTU" value="" class="form-control" placeholder="Ingrese el telefono" required>
        <div class="row">
            <div class="col-md-6">
                <label for=""> <b>Latitud:</b> </label>
                <input type="number" step="any" name="latitudEstadioTU" id="latitudEstadioTU" value="" class="form-control" placeholder="Ingrese la latitud" required readonly>
            </div>
            
            <div class="col-md-6">
                <label for=""> <b>Longitud:</b> </label>
                <input type="number " name="longitudEstadioTU" id="longitudEstadioTU" value="" class="form-control" placeholder="Ingrese la longuitud" required readonly>
            </div>
        </div><br>
        <div class="row">
                <div class="col-md-12">
                <h1>MAPA</h1>
                    <div id="mapa" style="height: 500px; width: 100%; border: 1px solid black;"></div>
                </div>
            </div>
        
        <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" name="button" class="btn btn-primary" >
                    <i class="fa-solid fa-floppy-disk fa-bounce" ></i>
                     Guardar
                </button> &nbsp; &nbsp; &nbsp; &nbsp;
                <a href=" <?php echo site_url('estadios/index') ?> " class="btn btn-danger" >
                <i class="fa-solid fa-xmark fa-bounce"></i>
                    Cancelar
                </a>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var inputNombre = document.getElementById('nombreEstadioTU');

            inputNombre.addEventListener('input', function () {
                var regex = /^[a-zA-Z\s]*$/;
                if (!regex.test(inputNombre.value)) {
                    inputNombre.setCustomValidity('Por favor, ingrese solo letras.');
                } else {
                    inputNombre.setCustomValidity('');
                }
            });
        });
    </script>



    <script type="text/javascript">
        function initMap(){
            var coordenadaCentral= new google.maps.LatLng(-0.10067961937266641, -78.48344709605202);

            var miMapa=new google.maps.Map(document.getElementById('mapa'),
            {
                center:coordenadaCentral,
                zoom:12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var marcadorCondado= new google.maps.Marker({
                position: new google.maps.LatLng(-0.10218217140133136, -78.48737875226824),
                map:miMapa,
                title:'Condado',
                draggable: true
            });
            
            google.maps.event.addListener(marcadorCondado,'dragend',
                function (event){
                    var latitud=this.getPosition().lat();
                    var longitud=this.getPosition().lng();
                    document.getElementById('latitudEstadioTU').value = latitud;
                    document.getElementById('longitudEstadioTU').value = longitud;
                }
            );
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var inputCapacidad = document.getElementById('capacidadEstadioTU');

            inputCapacidad.addEventListener('input', function () {
                var valor = parseInt(inputCapacidad.value, 10);

                if (isNaN(valor) || valor < 0 || valor > 10000000) {
                    inputCapacidad.setCustomValidity('Ingrese un número positivo y menor o igual a 10,000,000.');
                } else {
                    inputCapacidad.setCustomValidity('');
                }
            });
        });
    </script>

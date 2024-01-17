<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  
    <!-- Importacion de sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.3/dist/sweetalert2.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<!-- Bootstrap JS y dependencias Popper.js y jQuery -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Importacion de API GOOGLE MAPS -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrOGrQxzzJqybtHgkVG2tuZxiV_1w-fNU&libraries=places&callback=initMap"></script>

    <!-- Importacion de fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        #sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            padding-top: 20px;
            padding-left: 10px;
            color: white;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
        }

    </style>
</head>
<body>

<div id="sidebar" style="padding:10px;">
    <a href="<?php echo site_url();  ?> " class="btn btn-outline-light btn-block">Inicio</a>
		<br>
    <a href="<?php echo site_url('estadios/index'); ?>" class="btn btn-outline-light btn-block">Listado de estadios</a>
		<br>
    <a href="<?php echo site_url('estadios/nuevo') ?> " class="btn btn-outline-light btn-block">Agregar nuevo</a>
		<br>
    <a href="<?php echo site_url('estadios/mapas') ?>" class="btn btn-outline-light btn-block">Reporte mapa</a>
		<br>
</div>

<div id="content">

<div class="container">
      <?php if ($this->session->flashdata('confirmacion')):?>
        <script type="text/javascript">
            Swal.fire({
                icon: "success",
                title: "CONFIRMACION",
                text: "<?php echo $this->session->flashdata('confirmacion');  ?>"
              });
        </script>
        <?php $this->session->set_flashdata('confirmacion',''); ?>
      <?php endif; ?>


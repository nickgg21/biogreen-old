<!DOCTYPE html>
<html lang="es">

<?php
include_once "partials/head.php";
?>

  <body id="page-top">

<?php
include_once "partials/header.php";
?>

    <section id="contacto" class="page-section cta">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Dirección</h4>
                <hr class="my-4">
                <div class="small text-black-50">Santiago de Cali - Colombia - Carrera 24A # 3-100 Barrio Miraflores</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Correo electrónico</h4>
                <hr class="my-4">
                <div class="small text-black-50">atencionalcliente@biogreensasesp.com</div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-phone text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Teléfono</h4>
                <hr class="my-4">
                <div class="small text-black-50">+ 57 (2) 558 3464</div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>

<?php
include_once "partials/footer.php";
?>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>

<!DOCTYPE html>
<html lang="es">

<?php
include_once "partials/head.php";
?>

  <body id="page-top">

<?php
include_once "partials/header.php";
?>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/write-593333_1920.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Estamos para escucharte, Selecciona la opcion que desees.</span>
                </h2>
                <p>Los PQRs (Peticiones, quejas y reclamos) son un derecho que se encuentran consagrados en el Artículo 23 de la Constitución Política de 1991 y en el Artículo 152 de la Ley 142 de 1994. Este recurso es un acto del suscriptor o usuario que obliga a la empresa a revisar ciertas decisiones que afectan la prestación del servicio o la ejecución del contrato. Estos recursos no requieren de la presentación personal ni de abogado, y para la facilidad del suscriptor o usuario cuentan con un formulario para su diligenciamiento. </p>
                <p class="mb-0"><b>Petición: </b>Solicitud de carácter verbal o escrito, presentada a la Entidad para requerir y/o acceder a documentación o información de la Entidad.Se pueden realizar consultas acerca de las actividades y funciones. También se pueden presentar sugerencias, para el mejoramiento de los servicios ofrecidos por la Entidad.</p>
                <p class="mb-0"><b>Quejas: </b>Inconformidad respecto de la actuación o conducta de un funcionario de la Entidad.</p>
                <p class="mb-0"><b>Reclamo: </b>Inconformidad de un usuario con relación a la no prestación o prestación deficiente de un servicio.</p>
                <p class="mb-0"><b>Tiempos de respuesta: General: </b>Hasta 15 días hábiles. <b>Facturación: </b>Hasta 5 días hábiles.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="pqr" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <i class="far fa-paper-plane fa-2x mb-2 text-black"></i>
            <h2 class="text-black mb-5">Atención al cliente & PQR</h2>

            <form name="contactform" method="post" action="send_form_email.php">
              <input id="variable" name="variable" type="hidden">
              <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="nom" name="nom" placeholder="Diligencie el nombre de la empresa..." required="required">
              <br>
              <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="per" name="per" placeholder="Diligencie nombre persona de contacto..." required="required">
              <br>
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="email" name="email" placeholder="Diligencie correo electrónico..." required="required">
              <br>
              <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="tel" name="tel" placeholder="Diligencie teléfono de contacto..." required="required">
              <br>
              <textarea class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="con" name="con" placeholder="Escriba su consulta..." required="required"></textarea>
              <br>
              <button type="submit" class="btn btn-primary mx-auto">Enviar</button>
            </form>

          </div>
        </div>
      </div>
    </section>

    <br>

<?php
include_once "partials/footer.php";
?>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>

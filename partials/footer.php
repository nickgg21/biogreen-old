    <footer class="footer text-faded" id="footer">
      <div class="container  py-5">
          <div class="row">
            <div class="col-sm text-center">
              <img src="img/1.png" width="300" height="90"/>
              <br>
              <a href="https://www.superservicios.gov.co/servicios-vigilados/tramites-servicios/distintivo-vigilado-superservicios/es//" target="_blank"><img  src="img/vigilado_ssp.png" width="170" height="70"/>
              <br>
             <a href="http://anla.gov.co/index.php/es//" target="_blank"><img  src="img/miniam.png" width="340" height="80"/>
             
            </div>

            <div class="col-sm text-center" style="column-count:2; column-rule: 1px solid #343132; padding-top: 1em; margin:auto;">
              <div style="padding-top: 1em;">
                <a href="blog.php"><b>Blog</b></a>
              </div>
              <div style="padding-top: 1em;">
                <a href="index.php"><b>Inicio</b></a>
              </div>
              <div style="padding-top: 1em;">
                <a href="nosotros.php"><b>Nosotros</b></a>
              </div>
              <div style="padding-top: 1em;">
                <a href="servicios.php"><b>Servicios</b></a>
              </div>
              <div style="padding-top: 1em;">
                <a href="pqr.php"><b>PQR</b></a>
              </div>
              <div style="padding-top: 1em;">
                <a href="contacto.php"><b>Contacto</b></a>
              </div>
            </div>

            <div class="col-sm"  background:radial-gradient(200px top, ellipse, white, #1162ac, black);  style="margin:auto;">
              
              <br>
              <p class="m-0" align="left"><i class="fas fa-envelope mb-2" style="color:black;"></i> atencionalcliente@biogreensasesp.com</p>
              <p class="m-0" align="left"><i class="fas fa-map-marked-alt mb-2" style="color:black;"></i> Carrera 24A # 3-100 | Barrio Miraflores</p>
              <p class="m-0" align="left"><i class="fas fa-phone mb-2" style="color:black;"></i> + 57 (2) 558 3464</p>
              <!--<b><p class="m-0" style="font-size: 10px;">Diseñado por Nicolás Guzmán</p></b>-->
              <br>
              <a style="text-align:left;" href="https://www.facebook.com/Bio-Green-SAS-ESP-2318027234906262/" target="_blank" class="mx-2" data-toggle="tooltip" data-placement="bottom" title="Facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a style="text-align:left;" align="left" href="https://www.instagram.com/biogreensasesp/?hl=es-la" target="_blank" class="mx-2" data-toggle="tooltip" data-placement="bottom" title="Instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
      </div>
      <div class="copyright py-3">
        <p class="m-0 text-center">Todos los Derechos Reservados por <b>&copy; Bio Green S.A.S. E.S.P.</b></p>
      </div>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/galeria.js"></script>

    <script type="text/javascript">
      if(mensaje == 1 ){
        alert('Correo enviado satisfactoriamente.');
      }
      if(mensaje == 2 ){
        alert('No se pudo enviar el correo.');
      }

      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
      });
    </script>
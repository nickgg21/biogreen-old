<?php
if(isset($_POST['email'])) {
    // Edita las dos líneas siguientes con tu dirección de correo y asunto personalizados
    $email_to = "atencionalcliente@biogreensasesp.com";
    $email_subject = utf8_decode("Atención al cliente & PQR");

    function died($error) {
        // si hay algún error, el formulario puede desplegar su mensaje de aviso
        echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
        echo "Detalle de los errores.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor corrija estos errores e inténtelo de nuevo.<br /><br />";
        die();
    }

    // Se valida que los campos del formulairo estén llenos
    if(!isset($_POST['nom']) ||
        !isset($_POST['per']) ||
        !isset($_POST['email']) ||
        !isset($_POST['tel']) ||
        !isset($_POST['con'])) {
        died('Lo sentimos pero parece haber un problema con los datos enviados.');       
    }

    //En esta parte el valor "name" nos sirve para crear las variables que recolectaran la información de cada campo
    $nom = utf8_decode($_POST['nom']); // requerido
    $per = utf8_decode($_POST['per']); // requerido
    $email_from = $_POST['email']; // requerido
    $tel = $_POST['tel']; // no requerido 
    $con = utf8_decode($_POST['con']); // requerido
    $error_message = "Error";

    //En esta parte se verifica que la dirección de correo sea válida 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if(!preg_match($email_exp,$email_from)) {
      $error_message .= 'La dirección de correo proporcionada no es válida.<br />';
    }

    //En esta parte se validan las cadenas de texto
    $string_exp = "/^[A-Za-z .'-]+$/";
    if(!preg_match($string_exp,$nom)) {
      $error_message .= 'El formato del nombre de la empresa no es válido.<br />';
    }
    if(!preg_match($string_exp,$per)) {
      $error_message .= 'El formato de la persona de contacto no es válido.<br />';
    }
    if(strlen($con) < 2) {
      $error_message .= 'El formato del texto de la consulta no es válido.<br />';
    }
    if(strlen($error_message) < 0) {
      died($error_message);    
    }

    //A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo
    $email_message = "Contenido de la consulta:\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Nombre empresa: ".clean_string($nom)."\n";
    $email_message .= "Persona contacto: ".clean_string($per)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= utf8_decode("Teléfono: ").clean_string($tel)."\n";
    $email_message .= "Consulta: ".clean_string($con)."\n";
  
    //Se crean los encabezados del correo
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if(@mail($email_to, $email_subject, $email_message, $headers)){
      header("Location: pqr.php?mensaje=1");
    }else{
      header("Location: pqr.php?mensaje=2");
    }
    
    ?>
<?php 
}
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Grodel | Contacto</title>
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="icofont/icofont.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/logo%20img.png"/>

    
</head>

<body style="background:#f4f4f4">
<?php include ('./layouts/header.php'); ?>
<?php include ('./layouts/reload.php'); ?>
<?php include ('./layouts/up.php'); ?>

<div class="contact">
    <div>
        <h1>Contacto</h1>
        <h2><a href="index">Inicio</a> / Contacto</h2>
    </div> 
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d60255.88179451947!2d-99.69068500668479!3d19.282687481570427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1604671887026!5m2!1ses!2smx" width="90%" height="600" frameborder="0" style="border:0;margin-left:5%;margin-right:auto;margin-top:4em" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<div class="contact-forms">
    <div class="contact-form-sub">
        <div>
          <span> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
              </svg></span>
            <h1>Teléfono</h1>
            <h2>Número gratuito: 0803 - 080 - 3081<br>
Fax: 0803 - 080 - 3082</h2>
        </div>
        <div>
          <span> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg></span>
            <h1>Correo electrónico</h1>
            <h2>buddha@example.com<br>
support@example.com</h2>
        </div>
        <div>
            <span><i class="icofont-paper-plane"></i></span>
            <h1>Dirección</h1>
            <h2>No: 58 A, East Madison Street,<br>
Baltimore, MD, EE. UU. 4508</h2>
        </div>
    </div>
</div>

<form action="#" method="post">
<div class="form-contact">
   <h1>Formulario de contacto</h1>
    <div class="form-contact-sub">
    <input type="text" placeholder="Nombre" name="fname" required>
    <input type="text" placeholder="Correo Electrónico" name="email" required>
    <input type="text" placeholder="Teléfono" name="phone" required>
        <textarea placeholder="Mensaje" name="message" required></textarea>
        <button class="button" type="submit" name="enviar">Enviar</button>
        </div>
    </div>
</form>

<?php include ('./layouts/footer.php'); ?>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/reload.js"></script>
<script src="js/up.js"></script>
<script src="js/menu.js"></script>
 <script>
      $(document).ready(function(){
		$("#cerrar").on( "click", function() {
			$('.modali').fadeOut(); //muestro mediante clase
		});
	});</script>
</body>
</html>
<?php
include("./php/conexion.php");
if(isset($_POST["enviar"])){
       $conexion->query("insert into mensajes(nombre,correo,telefono,mensaje) values(
        
        '".$_POST['fname']."',
        '".$_POST['email']."',
        ".$_POST['phone'].",
        '".$_POST['message']."'
        )")or die($conexion->error);
        echo "<div class='modali'><div class='modali2'>Tu mensaje se ha enviado correctamente, nos pondremos en contacto contigo lo antes posible. ¡Gracias!<br><button id='cerrar'>Cerrar</button></div></div>";
    }
    
?>
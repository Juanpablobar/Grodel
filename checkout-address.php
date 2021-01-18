<?php
session_start();
include "./php/conexion.php";
if(isset($_SESSION["carrito"])){
    //si existe buscamos si ya estaba agregado ese producto 
    if(isset($_GET["id"])){
        $arreglo =$_SESSION["carrito"];
        $encontro=false;
        $numero = 0;
        for($i=0;$i<count($arreglo);$i++){
            if($arreglo[$i]["Id"] == $_GET["id"]){
                $encontro=true;
                $numero=$i;
            }
        }
        if($encontro == true){
            $arreglo[$numero]["Cantidad"]=$arreglo[$numero]["Cantidad"]+1;
            $_SESSION["carrito"]=$arreglo;
            header("Location: ./cart");
        }else{
            /// no estaba el registro
        $nombre ="";
        $imagen ="";
        $tamano ="";
        $material ="";
        $precio ="";
        $res    = $conexion->query("select * from productos where id=".$_GET["id"])or die($conexion->error);
        $fila = mysqli_fetch_row($res);
        $nombre = $fila[1];
        $imagen = $fila[2];
        $tamano = $fila[8];
        $material = $fila[10];
        $precio = $fila[7];
        $arregloNuevo = array(
                    "Id" => $_GET["id"],
                    "Nombre" => $nombre,
                    "Imagen" => $imagen,
                    "Tamaño" => $tamano,
                    "Material" => $material,
                    "Precio" => $precio,
                    "Cantidad" => 1
        );
        
            array_push($arreglo, $arregloNuevo);
            $_SESSION["carrito"]=$arreglo;
            header("Location: ./cart");
        }
    }
    }else{
    //creamos la variable de sesión
    if (isset($_GET["id"])){
        $nombre ="";
        $imagen ="";
        $tamano ="";
        $material ="";
        $precio ="";
        $res    = $conexion->query("select * from productos where id=".$_GET["id"])or die($conexion->error);
        $fila = mysqli_fetch_row($res);
        $nombre = $fila[1];
        $imagen = $fila[2];
        $tamano = $fila[8];
        $material = $fila[10];
        $precio = $fila[7];
        $arreglo[] = array(
                    "Id" => $_GET["id"],
                    "Nombre" => $nombre,
                    "Imagen" => $imagen,
                    "Tamaño" => $tamano,
                    "Material" => $material,
                    "Precio" => $precio,
                    "Cantidad" => 1
        );
        $_SESSION["carrito"]=$arreglo;
        header("Location: ./cart");
    }else{
        header("Location: ./cart");
    }
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Grodel | Detalles de compra - Dirección</title>
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="icofont/icofont.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/logo%20img.png"/>

    
</head>

<body>

<div class="address">
    <form action="./checkout-shipping.php" method="post">
    <div>
        <img src="img/logo.png">
        <div class="dropdownproducts">
        
		<div class="dropdownclick">
            <p><a href="#" class="mostrar" id="mostrar"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg> </a><i class="icofont-rounded-down" id="icofont"></i> <?php 
                    $total = 0;
                   $envio = 235;
                    if(isset($_SESSION["carrito"])){
                        $arreglocarrito =$_SESSION["carrito"];
                        for($i=0;$i<count($arreglocarrito);$i++){
                            $total= $total + ($arreglocarrito[$i]["Precio"] * $arreglocarrito[$i]["Cantidad"]);
                ?><h8>$<?php echo $total + $envio ?>.00MX</h8><?php }} ?> </p>
		</div>
		<div class="dropdownfinal">
		    <div>
                <?php 
                    $total = 0;
                   $envio = 235;
                    if(isset($_SESSION["carrito"])){
                        $arreglocarrito =$_SESSION["carrito"];
                        for($i=0;$i<count($arreglocarrito);$i++){
                            $total= $total + ($arreglocarrito[$i]["Precio"] * $arreglocarrito[$i]["Cantidad"]);
                    ?>
                    <div class="address-desc">
                        <div class="address-img">
                            <img src="img/<?php echo $arreglocarrito[$i]["Imagen"]; ?>" title="<?php echo $arreglocarrito[$i]["Nombre"]; ?>" alt="<?php echo $arreglocarrito[$i]["Nombre"]; ?>">
                            <span><?php echo $arreglocarrito[$i]["Cantidad"]; ?></span>
                        </div>
                        <div class="address-text">
                            <h2><?php echo $arreglocarrito[$i]["Nombre"]; ?></h2>
                            <h3><?php echo $arreglocarrito[$i]["Tamaño"]; ?> / <?php echo $arreglocarrito[$i]["Material"]; ?></h3>
                            <h4>$<?php echo $arreglocarrito[$i]['Precio'] * $arreglocarrito[$i]['Cantidad']; ?>.00MX</h4>
                            
                        </div>
                    </div>
                    <?php } } ?>
                    <div class="address-total">
                            <div class="address-total-pre">
                                <p>Subtotal</p>
                                <p>Envío</p>
                            </div>
                            <div class="address-total-sub">
                                <p>$<?php echo $total ?>.00MX</p>
                                <p>$<?php echo $envio ?>.00MX</p>
                            </div>
                            </div>
                            <div class="address-total-final">
                                <p>Total</p>
                                <p>$<?php echo $total + $envio ?>.00MX</p>
                            </div>
                 </div>
		</div>
	</div>
        <div class="address-breadcrumb">
            <a href="cart">Carro</a> <i class="icofont-simple-right"></i><strong>Información </strong><i class="icofont-simple-right"></i>Envío <i class="icofont-simple-right"></i>Pago
        </div>
        <div class="address-info">
            <div>Información del contacto</div>
            <div>¿Ya tienes una cuenta? <a href="#">Iniciar Sesión</a></div>
        </div>
        <input type="text" placeholder="Correo electrónico o número de teléfono móvil" name="email" required class="input">
        <div class="address-act">
            <input type="checkbox">
            <p>	Mantenerme actualizado sobre novedades y ofertas exclusivas</p>
        </div>
        <h1>Dirección de Envío</h1>
        <div class="address-inputs">
            <input type="text" placeholder="Nombre (opcional)" name="fname">
            <input type="text" placeholder="Apellido" name="lname" required>
            <input type="text" placeholder="Calle y número de casa" name="number" required>
            <input type="text" placeholder="Apartamentto, suite, etc. (opcional)" name="apartment" >
            <input type="text" placeholder="Código postal" name="zip" required>
            <input type="text" placeholder="Ciudad" name="city" required>
             <select name="estado" required>
      <option value="Ciudad o Estado...">Ciudad o Estado</option>
      <option value="Aguascalientes">Aguascalientes</option>
      <option value="Baja California">Baja California</option>
      <option value="Baja California Sur">Baja California Sur</option>
      <option value="Campeche">Campeche</option>
      <option value="Chiapas">Chiapas</option>
      <option value="Chihuahua">Chihuahua</option>
      <option value="CDMX">Ciudad de México</option>
      <option value="Coahuila">Coahuila</option>
      <option value="Colima">Colima</option>
      <option value="Durango">Durango</option>
      <option value="Estado de México">Estado de México</option>
      <option value="Guanajuato">Guanajuato</option>
      <option value="Guerrero">Guerrero</option>
      <option value="Hidalgo">Hidalgo</option>
      <option value="Jalisco">Jalisco</option>
      <option value="Michoacán">Michoacán</option>
      <option value="Morelos">Morelos</option>
      <option value="Nayarit">Nayarit</option>
      <option value="Nuevo León">Nuevo León</option>
      <option value="Oaxaca">Oaxaca</option>
      <option value="Puebla">Puebla</option>
      <option value="Querétaro">Querétaro</option>
      <option value="Quintana Roo">Quintana Roo</option>
      <option value="San Luis Potosí">San Luis Potosí</option>
      <option value="Sinaloa">Sinaloa</option>
      <option value="Sonora">Sonora</option>
      <option value="Tabasco">Tabasco</option>
      <option value="Tamaulipas">Tamaulipas</option>
      <option value="Tlaxcala">Tlaxcala</option>
      <option value="Veracruz">Veracruz</option>
      <option value="Yucatán">Yucatán</option>
      <option value="Zacatecas">Zacatecas</option>
  </select>
           <input type="text" name="country" value="México" readonly required>
           </div>
           <div class="address-act" style="margin-top:-1.5em">
            <input type="checkbox">
            <p>Guarde esta información para la próxima vez</p>
        </div>
        <div class="address-final">
            <div><a href="cart"> <i class="icofont-simple-left"></i> Volver al carrito</a></div>
            <div><a href="checkout-shipping"><button class="button" name="button" type="submit">Continuar con envío</button></a></div>
        </div>
        <h4>Todos los derechos reservados Grodel&reg; | Expertos en plomería</h4>
        
            </div></form>
             <div>
               <div class="address-count">
                <?php 
                    $total = 0;
                   $envio = 235;
                    if(isset($_SESSION["carrito"])){
                        $arreglocarrito =$_SESSION["carrito"];
                        for($i=0;$i<count($arreglocarrito);$i++){
                            $total= $total + ($arreglocarrito[$i]["Precio"] * $arreglocarrito[$i]["Cantidad"]);
                    ?>
                    <div class="address-desc">
                        <div class="address-img">
                            <img src="img/<?php echo $arreglocarrito[$i]["Imagen"]; ?>" title="<?php echo $arreglocarrito[$i]["Nombre"]; ?>" alt="<?php echo $arreglocarrito[$i]["Nombre"]; ?>">
                            <span><?php echo $arreglocarrito[$i]["Cantidad"]; ?></span>
                        </div>
                        <div class="address-text">
                            <h2><?php echo $arreglocarrito[$i]["Nombre"]; ?></h2>
                            <h3><?php echo $arreglocarrito[$i]["Tamaño"]; ?> / <?php echo $arreglocarrito[$i]["Material"]; ?></h3>
                            <h4>$<?php echo $arreglocarrito[$i]['Precio'] * $arreglocarrito[$i]['Cantidad']; ?>.00MX</h4>
                            
                        </div>
                    </div>
                    <?php } } ?>
                    <div class="address-total">
                            <div class="address-total-pre">
                                <p>Subtotal</p>
                                <p>Envío</p>
                            </div>
                            <div class="address-total-sub">
                                <p>$<?php echo $total ?>.00MX</p>
                                <p>$<?php echo $envio ?>.00MX</p>
                            </div>
                            </div>
                            <div class="address-total-final">
                                <p>Total</p>
                                <p>$<?php echo $total + $envio ?>.00MX</p>
                            </div>
                 </div>
             </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/reload.js"></script>
<script src="js/up.js"></script>
<script src="js/menu.js"></script>
<script>
$(document).ready(function() {

	//Botón de acción del acordeón
	$('.dropdownclick').click(function() {

		//Elimina la clase on de todos los botones
		$('#mostrar').toggleClass('mostrar');
        
		$('#mostrar').toggleClass('ocultar');

        $('#icofont').toggleClass('icofont-rounded-down');
        
		$('#icofont').toggleClass('icofont-rounded-up');
		
        //Plegamos todo el contenido que esta abierto
	 	$('.dropdownfinal').slideUp('slow');
        
		//Si el siguiente slide no esta abierto lo abrimos
		if($(this).next().is(':hidden') == true) {

			//Añade la clase on en el botón
			$(this).addClass('on');

			//Abre el slide
			$(this).next().slideDown('slow');
		 }

	 });

	// Cerramos todo el contenido al cargar la página
	$('.dropdownfinal').hide();

});
</script>
</body>
</html>
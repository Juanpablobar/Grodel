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
    }
}
if(isset($_POST["button"])){
$email = $_POST['email'];
$text = $_POST['text'];
}else{
    header('Location: ./cart');
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Grodel | Detalles de Compra - Método de Pago</title>
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="icofont/icofont.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/logo%20img.png"/>

    
</head>

<body>

<div class="address">
   <form action="#" method="post">
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
        <div class="direccion">
            <div class="direccion-first">
                <p>Contacto</p>
                <p><?php echo $email ?></p>
                <p><a href="javascript: history.go(-1)">Cambiar</a></p>
            </div>
            <h6></h6>
            <div class="direccion-second">
                <p>Enviar a</p>
                <p><?php echo $text ?></p>
                <p><a href="javascript: history.go(-1)">Cambiar</a></p>
            </div>
            <h6></h6>
            <div class="direccion-third">
                <p>Método</p>
                <p>Estándar &nbsp;&nbsp;&nbsp;· <strong>$235.00MX</strong></p>
            </div>
        </div>
        <h1 style="margin-top:2.5em">Pago</h1>
        <h3>Todas las transacciones son seguras y encriptadas.</h3>
        <div class="warning">
<svg width="1.0625em" height="1em" viewBox="0 0 17 16" class="bi bi-exclamation-triangle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M7.938 2.016a.146.146 0 0 0-.054.057L1.027 13.74a.176.176 0 0 0-.002.183c.016.03.037.05.054.06.015.01.034.017.066.017h13.713a.12.12 0 0 0 .066-.017.163.163 0 0 0 .055-.06.176.176 0 0 0-.003-.183L8.12 2.073a.146.146 0 0 0-.054-.057A.13.13 0 0 0 8.002 2a.13.13 0 0 0-.064.016zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
  <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
</svg>            <p>Esta tienda no puede aceptar pedidos ni pagos reales.</p>
        </div>
        <div class="card">
        <div class="card-sub">
            <h1>Tarjeta de crédito</h1>
            <h2>B</h2>
        </div>
        <div class="credit-card">
        <input type="text" placeholder="Número de tarjeta" class="input">
          
          <span> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg>
           <p>Todas las transacciones son seguras y encriptadas.</p>
            </span>
            </div>
            <input type="text" placeholder="A nombre de" class="input">
                        <div class="codigo-seg">

            <input type="text" placeholder="Fecha de expiración (MM/YY)" class="input">
                <input type="text" placeholder="Código de seguridad" class="input">
                <span>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
</svg>
<p>Código de seguridad de 3 dígitos en el reverso de su tarjeta</p>
                </span>
            </div>
        </div>
        <div class="address-final">
            <div><a href="javascript: history.go(-1)"> <i class="icofont-simple-left"></i> Volver al envío</a></div>
            <div><a href="#"><button class="button">Pagar ahora</button></a></div>
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
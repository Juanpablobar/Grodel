<?php
session_start();
include("./php/conexion.php");
if( isset($_GET["id"])){
    $resultado = $conexion ->query("select * from productos where id=".$_GET["id"])or die($conexion->error);
    if(mysqli_num_rows($resultado) > 0){
        $fila = mysqli_fetch_row($resultado);    
    
}else{
    header("Location: ./products");
    }
}else{
    //redireccionar
    header("Location: ./products");
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Comprar <?php echo $fila[1] ?> | Grodel - Expertos en Plomería</title>
    
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="icofont/icofont.css">
    <link rel="stylesheet" href="fancybox-master/dist/jquery.fancybox.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/logo%20img.png"/>

    
</head>

<body style="background:#f4f4f4">
<?php include ('./layouts/header.php'); ?>
<?php include ('./layouts/reload.php'); ?>
<?php include ('./layouts/up.php'); ?>

<div class="contact">
    <div>
        <h1><?php echo $fila[1] ?></h1>
        <h2><a href="index">Todos</a> / <?php echo $fila[1];?></h2>
    </div> 
</div>

<div class="shop-single">
  <div class="shop-single-img">
   <div class="owl-carousel owl-theme">
    <div class="item" data-hash="one">
    <a data-fancybox="gallery" data-type="image" href="img/<?php echo $fila[2] ?>" data-caption="<?php echo $fila[1] ?>"><img src="img/<?php echo $fila[2];?>"></a>
    </div>
    <div class="item" data-hash="two">
<a data-fancybox="gallery" data-type="image" href="img/<?php echo $fila[3] ?>" data-caption="<?php echo $fila[1] ?>"><img src="img/<?php echo $fila[3];?>"></a>    </div>
</div>
   <div class="shop-img">
       <div class="shop-img-sub"><a href="#one"><img src="img/<?php echo $fila[2] ?>"></a></div>
       <div class="shop-img-sub"><a href="#two"><img src="img/<?php echo $fila[3] ?>"></a></div>
</div>
    </div>
<div class="shop-single-details">
    <h1><?php echo $fila[1]; ?></h1>
    <div><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
    </div>
    <div>
        <i class="icofont-tinder"></i> <?php echo $fila[4] ?> vendidos en las últimas <?php echo $fila[5] ?> horas
    </div>
    <h3><?php echo $fila[6]; ?></h3>
    <div><span>Precio:</span><span>$<?php echo number_format($fila[7],2,'.',''); ?>MX</span></div>
    <h4>Date Prisa, solo quedan <?php echo $fila[14] ?> en stock</h4>
    <div><span>Tamaño*</span><span><label><?php echo $fila[8]; ?></label><label><?php echo $fila[9]; ?></label></span></div>
    <div><span>Material*</span><span><label><?php echo $fila[10]; ?></label><label><?php echo $fila[11]; ?></label></span></div>
    <div><span>Marca:</span><span><?php echo $fila[12]; ?></span></div>
    <div><span>Tipo de producto:</span><span><?php echo $fila[13]; ?></span></div>
    <div><span>Disponibilidad:</span><span><?php echo $fila[14]; ?> en stock</span></div>
    <div><span>Cantidad:</span><span>
        <div class="shop-input">
           <div class="sub-minus" id='disminuir' onclick="disminuir()">
            <div class="minus">
                -
            </div>
               </div>
            <input type="text" value="1" id="cantidad" name="cantidad" id="cantidad">
            <div class="sub-plus" id='aumentar' onclick="aumentar()">
               <div class="plus">
                +
            </div>
            </div>
        </div>
    </span></div>
   <a href="cart?id=<?php echo $fila[0] ?>"><button class="button"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-plus-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
       </svg> Añadir al Carrito</button> </a>
       <div class="redes">
           <h5>Comparte este producto en:</h5>
           <a href="https://www.facebook.com/sharer.php?u=https://grodel.000webhostapp.com/shop-single?id=<?php echo $fila[1]; ?>" target="_blank"><i class="icofont-facebook"></i></a>
           <a href="https://twitter.com/intent/tweet?text=<?php echo $fila[1]; ?>&url=https://grodel.000webhostapp.com/shop-single?id=<?php echo $fila[0]; ?>" target="_blank"><i class="icofont-twitter"></i></a>
           <a href="https://www.pinterest.com.mx/pin/create/button/?url=https://grodel.000webhostapp.com/shop-sin?id=<?php echo $fila[0]; ?>&media=https://grodel.000webhostapp.com/img/<?php echo $fila[3]; ?>" target="_blank"><i class="icofont-pinterest"></i></a>
           
           <a href="https://plus.google.com/up/?continue=https://plus.google.com/share?url%3Dhttps://grodel.000webhostapp.com/shop-single?id=<?php echo $fila[0] ?>"><i class="icofont-google-plus"></i></a>
       </div>
</div>
</div>

<div class="description">
    <div class="sub-description">
        <h1>Descripción del producto</h1>
        <p><?php echo $fila[6]; ?></p>
    </div>
    <button class="button" id="expert"><i class="icofont-question-circle"></i> ¿Tiene Preguntas? Pregunte A Un Experto</button>
    <h2>Productos relacionados</h2>
    <h3>De esta colección</h3>
</div>



<div class="owl-carousel owl-carousel2 owl-theme">
                 <?php
                include("./php/conexion.php");
                   $resultado = $conexion ->query("select * from productos order by rand() limit 7"); 
                
                while($fila = mysqli_fetch_array($resultado)){
                    
                
                ?>
                
                    <div class="single">
                   
                    <a href="shop-single?id=<?php echo $fila[0]; ?>"><figure>
                    <img src="img/<?php echo $fila[2] ?>" title="<?php echo $fila[1] ?>" alt="<?php echo $fila[1] ?>">
                    <img class="img2" src="img/<?php echo $fila[3] ?>" title="<?php echo $fila[1] ?>" alt="<?php echo $fila[1] ?>">
                     <div class="single-icons">
                         <a href="shop-single?id=<?php echo $fila[0]; ?>"><span><i class="icofont-search"></i></span></a>
                            <a href="shop-single?id=<?php echo $fila[0]; ?>"><span><i class="icofont-link"></i></span></a>
                    </div>
                    </figure></a>
                    <div class="single-text">
                        <a href="shop-single?id=<?php echo $fila[0]; ?>"><h1><?php echo $fila[1]; ?></h1></a>
                        <h2>$<?php echo number_format($fila[7],2,'.',''); ?>MX</h2>
                    </div>
                   
                        </div>
                
                <?php } ?>
    </div>

<div class='modali modali-form' style="display:none">
<div class='modali2'>
<button id='cerrar'><i class="icofont-close"></i></button>
<h1>¿TIENE PREGUNTAS?</h1>
    <h2>PREGUNTE A NUESTRO EXPERTO.</h2>
    <h3>Nos pondremos en contacto contigo por correo electrónico en un plazo de 24 a 36 horas.</h3>
<div class="formulario">
    <p>Complete el formulario que se proporciona a continuación,</p>
    <input placeholder="Nombre">
    <input placeholder="Correo Electrónico">
    <input placeholder="Teléfono">
</div>
<div class="sub-formulario">
    <div class="form-item">
        <p>¿Qué Necesitas?</p>
        <span><input type="checkbox">Precios</span>
        <span><input type="checkbox">Ambos</span>
        <span><input type="checkbox">Respuestas</span>
    </div>
    <div class="form-item">
        <p>¿Cómo puedo contactarte?</p>
        <span><input type="checkbox">Teléfono</span>
        <span><input type="checkbox">correo Electrónico</span>
        <span><input type="checkbox">Ambos</span>
    </div>
</div>
    <p>¿Con que puedo ayudarte hoy?</p>
<textarea></textarea>
<button class="button" id="enviar">Enviar Pregunta</button>
</div>
</div>

<div class='modali ready' style="display:none">
<div class='modali2'>Tu mensaje se ha enviado correctamente, nos pondremos en contacto contigo lo antes posible. ¡Gracias!<br>
<button id='cerrar' class="fuera">Cerrar</button>
</div>
</div>
<?php include ('./layouts/footer.php'); ?>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/reload.js"></script>
<script src="js/up.js"></script>
<script src="js/menu.js"></script>
<script src="fancybox-master/dist/jquery.fancybox.min.js"></script>
<script>
    $('.owl-carousel2').owlCarousel({
        items:4,
        loop:false,
        center:false,
        margin:0,    
        nav:true,
        mouseDrag: true,
        navText:["<i class='icofont-simple-left'></i>","<i class='icofont-simple-right'></i>"],
        responsive:{
        0:{
            items:2
        },
        600:{
          items:3  
        },
            
        800:{
            items: 4
        }
    }
    });
    </script>
<script>
    $('.owl-carousel').owlCarousel({
        items:1,
        loop:false,
        center:true,
        margin:1000,    
        animateOut: 'fadeOut',
        URLhashListener:true,
        startPosition: 'URLHash',
        nav:false,
        mouseDrag:false,
        responsive:{
        0:{
        items:1
        },
            750:{
                items:1
            }
    }
    });
    </script>
    
    <script>
    var inicio = 0; 

function aumentar(){ 

var cantidad = document.getElementById('cantidad').value = ++inicio; 
}
function disminuir(){ 

var cantidad = document.getElementById('cantidad').value = --inicio;  
}
    </script>
    <script>
      $(document).ready(function(){
		$("#expert").on( "click", function() {
			$('.modali-form').fadeIn(); 
        })
            $("#cerrar").on( "click", function() {
			$('.modali').fadeOut(); 
		});
          $("#enviar").on( "click", function() {
			$('.modali-form').fadeOut(); 
		});
          $("#enviar").on( "click", function() {
			$('.ready').fadeIn(); 
		});
        $(".fuera").on( "click", function() {
			$('.ready').fadeOut(); 
		});
	});</script>
</body>
</html>
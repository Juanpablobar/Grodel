<?php
session_start();
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Grodel | Tienda</title>
    
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
        <h1>Productos</h1>
        <h2><a href="index">Inicio</a> / Productos</h2>
    </div> 
</div>
   <button class="button button-products"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-filter" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg> Filtrar Por</button>

<div class="products">
    <div class="category">
          <h1>Categoría</h1>
           <div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton1 dropdownButtonwow">
            <p><a href="products-search?text=Morder">Herramientas de fontanero</a> <i class="minus"></i><i class="plus" id="plus1"></i></p>
		</div>
		<div class="dropdownContent">
		    <ul>
			<li><a href="http://localhost/Grodel/shop-single?id=1">Llave ajustable</a></li>
			<li><a href="http://localhost/Grodel/shop-single?id=6">Alicates de bloqueo</a></li>
		    </ul>
		</div>
	</div>

	<div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton2 dropdownButtonwow">
            <p><a href="products-search?text=ExBorders">Equipo de fontanero</a> <i class="minus"></i><i class="plus2" id="plus2"></i></p>
		</div>
		<div class="dropdownContent">
		    <ul>
			<li><a href="http://localhost/Grodel/shop-single?id=13">Alicates rojos</a></li>
			<li><a href="http://localhost/Grodel/shop-single?id=9">Llave de tubo</a></li>
		    </ul>
		</div>
	</div>
	<div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton3 dropdownButtonwow">
            <p><a href="products-search?text=Sintong">Accesorios de fontanería</a> <i class="minus"></i><i class="plus3" id="plus3"></i></p>
		</div>
		<div class="dropdownContent">
		    <ul>
			<li><a href="http://localhost/Grodel/shop-single?id=4">Válvula de compuerta</a></li>
			<li><a href="http://localhost/Grodel/shop-single?id=2">Conector hidráulico</a></li>
		    </ul>
		</div>
	</div>
       <div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton4">
            <h1>Comprar por tamaño</h1><i class="flecha-abajo" id="icofont"></i>
		</div>
		<div class="dropdownContent2">
		    <ul>
			<a href="products-search?text=L"><li>L</li></a>
			<a href="products-search?text=M"><li>M</li></a>
			<a href="products-search?text=S"><li>S</li></a>
		    </ul>
		</div>
	</div>
	<div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton5">
            <h1>Comprar por precio</h1>
            <i class="flecha-abajo" id="icofont2"></i>
		</div>
		<div class="dropdownContent3 dropdown1">
		    <ul>
			<a href="#"><li><span></span><p>$100 - $200</p></li></a>
			<a href="#"><li><span></span><p>$200 - $300</p></li></a>
			<a href="#"><li><span></span><p>$300 - $400</p></li></a>
			<a href="#"><li><span></span><p>$400 - $500</p></li></a>
			<a href="#"><li><span></span><p>$500 - $700</p></li></a>
		    </ul>
		</div>
	</div>
	<div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton6">
            <h1>Comprar por marca</h1>
            <i class="flecha-abajo" id="icofont3"></i>
		</div>
		<div class="dropdownContent3 dropdown2">
		    <ul>
			<a href="products-search?text=Morder"><li><span></span><p>Morder</p></li></a>
			<a href="products-search?text=Sintong"><li><span></span><p>Sintong</p></li></a>
			<a href="products-search?text=ExBorders"><li><span></span><p>ExBoaders</p></li></a>
		    </ul>
		</div>
	</div>
	<div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton7">
            <h1>Comprar por tipo</h1>
            <i class="flecha-abajo" id="icofont4"></i>
		</div>
		<div class="dropdownContent3 dropdown3">
		    <ul>
			<a href="products-search?text=Tubo"><li><span></span><p>Tubo</p></li></a>
			<a href="products-search?text=Llave inglesa"><li><span></span><p>Llave inglesa</p></li></a>
			<a href="products-search?text=Conector"><li><span></span><p>Conector</p></li></a>
			<a href="products-search?text=Cortador"><li><span></span><p>Cortador</p></li></a>
			<a href="products-search?text=Manguera"><li><span></span><p>Manguera</p></li></a>
			<a href="products-search?text=Cinta"><li><span></span><p>Cinta</p></li></a>
			<a href="products-search?text=Válvula"><li><span></span><p>Válvula</p></li></a>
		    </ul>
		</div>
	</div>
    </div>

    <div class="shop">
         <?php
                include("./php/conexion.php");
                   $resultado = $conexion ->query("select * from productos order by id"); 
                
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
</div>
<div class="category-total" id="category-total">
<div class="category2">
         <span class="close-products"><i class="icofont-close-line"></i></span>
          <h1>Categoría</h1>
           <div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton1 dropdownButtonwow">
            <p><a href="products-search?text=Morder">Herramientas de fontanero</a> <i class="minus"></i><i class="plus" id="plus1"></i></p>
		</div>
		<div class="dropdownContent">
		    <ul>
			<li><a href="http://localhost/Grodel/shop-single?id=1">Llave ajustable</a></li>
			<li><a href="http://localhost/Grodel/shop-single?id=6">Alicates de bloqueo</a></li>
		    </ul>
		</div>
	</div>

	<div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton2 dropdownButtonwow">
            <p><a href="products-search?text=ExBorders">Equipo de fontanero</a> <i class="minus"></i><i class="plus2" id="plus2"></i></p>
		</div>
		<div class="dropdownContent">
		    <ul>
			<li><a href="http://localhost/Grodel/shop-single?id=13">Alicates rojos</a></li>
			<li><a href="http://localhost/Grodel/shop-single?id=9">Llave de tubo</a></li>
		    </ul>
		</div>
	</div>
	<div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton3 dropdownButtonwow">
            <p><a href="products-search?text=Sintong">Accesorios de fontanería</a> <i class="minus"></i><i class="plus3" id="plus3"></i></p>
		</div>
		<div class="dropdownContent">
		    <ul>
			<li><a href="http://localhost/Grodel/shop-single?id=4">Válvula de compuerta</a></li>
			<li><a href="http://localhost/Grodel/shop-single?id=2">Conector hidráulico</a></li>
		    </ul>
		</div>
	</div>
       <div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton4">
            <h1>Comprar por tamaño</h1><i class="flecha-abajo" id="icofont"></i>
		</div>
		<div class="dropdownContent2">
		    <ul>
			<a href="products-search?text=L"><li>L</li></a>
			<a href="products-search?text=M"><li>M</li></a>
			<a href="products-search?text=S"><li>S</li></a>
		    </ul>
		</div>
	</div>
	<div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton5">
            <h1>Comprar por precio</h1>
            <i class="flecha-abajo" id="icofont2"></i>
		</div>
		<div class="dropdownContent3 dropdown1">
		    <ul>
			<a href="#"><li><span></span><p>$100 - $200</p></li></a>
			<a href="#"><li><span></span><p>$200 - $300</p></li></a>
			<a href="#"><li><span></span><p>$300 - $400</p></li></a>
			<a href="#"><li><span></span><p>$400 - $500</p></li></a>
			<a href="#"><li><span></span><p>$500 - $700</p></li></a>
		    </ul>
		</div>
	</div>
	<div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton6">
            <h1>Comprar por marca</h1>
            <i class="flecha-abajo" id="icofont3"></i>
		</div>
		<div class="dropdownContent3 dropdown2">
		    <ul>
			<a href="products-search?text=Morder"><li><span></span><p>Morder</p></li></a>
			<a href="products-search?text=Sintong"><li><span></span><p>Sintong</p></li></a>
			<a href="products-search?text=ExBorders"><li><span></span><p>ExBoaders</p></li></a>
		    </ul>
		</div>
	</div>
	<div class="dropdownMenu">
		<div class="title dropdownButton dropdownButton7">
            <h1>Comprar por tipo</h1>
            <i class="flecha-abajo" id="icofont4"></i>
		</div>
		<div class="dropdownContent3 dropdown3">
		    <ul>
			<a href="products-search?text=Tubo"><li><span></span><p>Tubo</p></li></a>
			<a href="products-search?text=Llave inglesa"><li><span></span><p>Llave inglesa</p></li></a>
			<a href="products-search?text=Conector"><li><span></span><p>Conector</p></li></a>
			<a href="products-search?text=Cortador"><li><span></span><p>Cortador</p></li></a>
			<a href="products-search?text=Manguera"><li><span></span><p>Manguera</p></li></a>
			<a href="products-search?text=Cinta"><li><span></span><p>Cinta</p></li></a>
			<a href="products-search?text=Válvula"><li><span></span><p>Válvula</p></li></a>
		    </ul>
		</div>
	</div>
    </div>
    </div>

<?php include ('./layouts/footer.php'); ?>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/reload.js"></script>
<script src="js/up.js"></script>
<script src="js/menu.js"></script>
<script>
$(document).ready(function() {

	//Botón de acción del acordeón
	$('.dropdownButtonwow').click(function() {

		//Elimina la clase on de todos los botones
		$('.dropdownButton').removeClass('on');
		
        //Plegamos todo el contenido que esta abierto
	 	$('.dropdownContent').slideUp('slow');
        
		//Si el siguiente slide no esta abierto lo abrimos
		if($(this).next().is(':hidden') == true) {

			//Añade la clase on en el botón
			$(this).addClass('on');

			//Abre el slide
			$(this).next().slideDown('slow');
		 }

	 });
    
    $('.dropdownButton4').click(function() {

		//Elimina la clase on de todos los botones
	 	$('.dropdownContent2').slideUp('slow');
        
		if($(this).next().is(':hidden') == true) {

			//Añade la clase on en el botón
			$(this).addClass('on');

			//Abre el slide
			$(this).next().slideDown('slow');
		 }
	 });
    
    $('.dropdownButton5').click(function() {

		//Elimina la clase on de todos los botones
	 	$('.dropdown1').slideUp('slow');
        
        if($(this).next().is(':hidden') == true) {

			//Añade la clase on en el botón
			$(this).addClass('on');

			//Abre el slide
			$(this).next().slideDown('slow');
		 }

	 });

    $('.dropdownButton6').click(function() {

		//Elimina la clase on de todos los botones
	 	$('.dropdown2').slideUp('slow');
        
        if($(this).next().is(':hidden') == true) {

			//Añade la clase on en el botón
			$(this).addClass('on');

			//Abre el slide
			$(this).next().slideDown('slow');
		 }

	 });
    $('.dropdownButton7').click(function() {

		//Elimina la clase on de todos los botones
	 	$('.dropdown3').slideUp('slow');

        if($(this).next().is(':hidden') == true) {

			//Añade la clase on en el botón
			$(this).addClass('on');

			//Abre el slide
			$(this).next().slideDown('slow');
		 }
	 });

	// Cerramos todo el contenido al cargar la página
	$('.dropdownContent').hide();

});
    $('.dropdownButton1').click(function() {
        $('#plus1').toggleClass('plus');

    });
    
    $('.dropdownButton2').click(function() {
        $('#plus2').toggleClass('plus2');

    });
    
    $('.dropdownButton3').click(function() {
        $('#plus3').toggleClass('plus3');

    });

    $('.dropdownButton4').click(function() {
        $('#icofont').toggleClass('flecha-arriba');

    });
    
    $('.dropdownButton5').click(function() {
        $('#icofont2').toggleClass('flecha-arriba2');

    });
    
    $('.dropdownButton6').click(function() {
        $('#icofont3').toggleClass('flecha-arriba3');

    });

    $('.dropdownButton7').click(function() {
        $('#icofont4').toggleClass('flecha-arriba4');

    });
    
    $('.button-products').click(function() {
        $('#category-total').removeClass('category-total');
        $('#category-total').addClass('category-total2');

    });
    $('.close-products').click(function() {
        $('#category-total').removeClass('category-total2');
        $('#category-total').addClass('category-total');

    });
</script>
</body>
</html>

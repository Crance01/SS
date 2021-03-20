<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SevenSoft</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700,700i|Open+Sans:400,700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estiloINICIO.css">
    <link rel="icon" href="img/icon.png" type="image/png">
    
    <link href="https://steamstore-a.akamaihd.net/public/shared/css/motiva_sans.css?v=FAK4O46_mOLB&amp;l=latam" rel="stylesheet" type="text/css">
    
    <link href="https://steamstore-a.akamaihd.net/public/shared/css/shared_global.css?v=oYq9UFEpk_h-&amp;l=latam" rel="stylesheet" type="text/css">
</head>
<body>

   
	<?php
        include "partials/header.php";
    ?>
    <div class="content"></div>
    
    <div class="page_contendedor">
    <h2 class="pageheader">
        Lo ultimo en . . .
    </h2>
    
    <div class="contentsubtitle">
        Explora nuestros ultimos juegos en . . .
    </div>
    </div>
    <style>
		.contenedor {
			position: relative;
			width: 100%;
			height: 500px;
			background-color: black;
			
		}
		
		.imagen {
			position: absolute;
			width: 100%;
			height: 100%;
			visibility: hidden;
			opacity: 0;
		}
		
		.imagen img {
			height: 100%;
			position: relative;
			left: 50%;
			transform: translateX(-50%);
            
		}.imagen a{
			height: 100%;
			position: relative;
			left: 30%;
			transform: translateX(-50%);
		}
		.texto {
			position: absolute;
			width: 100%;
			text-align: center;
			top: 85%;
			color: white;
			font-weight: bold;
		}
		
		.contenedor a{
			position: absolute;
			text-decoration: none;
			color: white;
			font-size: 36px;
			top : 50%;
			transform: translateY(-50%);
		}
		.siguiente {
			left: 97%;
		}
		
		.boton {
			position: absolute;
			top: 5%;
			left: 95%;
		}
		
		.puntos {
			position: absolute;
			top: 93%;
			width: 100%;
			text-align: center;
		}
		.punto {
			display: inline-block;
			width: 16px;
			height: 16px;
			background-color: white;
			border-radius: 50%;
			margin-right: 5px;
		}
		.punto:hover {
			cursor: pointer;
			background-color: gray;
		}
		.contenedor a:hover {
			color: gray;
		}
		
		.actual {
			visibility: visible;
			opacity: 1;
			transition: visibility 1s, opacity 1s;
		}
		.activo {
			background-color: gray;
		}
	</style>

    <script>			var actual = 0;
			function puntos(n){
				var ptn = document.getElementsByClassName("punto");
				for(i = 0; i<ptn.length; i++){
					if(ptn[i].className.includes("activo")){
						ptn[i].className = ptn[i].className.replace("activo", "");
						break;
					}
				}
				ptn[n].className += " activo";
			}
			function mostrar(n){
				var imagenes = document.getElementsByClassName("imagen");
				for(i = 0; i< imagenes.length; i++){
					if(imagenes[i].className.includes("actual")){
						imagenes[i].className = imagenes[i].className.replace("actual", "");
						break;
					}
				}
				actual = n;
				imagenes[n].className += " actual";
				puntos(n);
			}
			
			function siguiente(){
				actual++;
				if(actual > 3){
					actual = 0;
				}
				mostrar(actual);
			}
			function anterior(){
				actual--;
				if(actual < 0){
					actual = 3;
				}
				mostrar(actual);
			}
			
			var velocidad = 2000;
			var play = setInterval("siguiente()", velocidad);
			
			function playpause(){
				var boton = document.getElementById("btn");
				if(play == null){
					boton.src = "img/pause.png";
					play = setInterval("siguiente()", velocidad);
				} else {
					clearInterval(play);
					play = null;
					boton.src = "img/play.png";
				}
			}
</script> 
            <div class="contenedor">
        
			<div class="imagen actual">
				<a href="juegos/DS8bit.php"> <img src="img/DS8bit.jpg" width="850px" eight="500px" border=0 /></a>
			</div>
			
			<div class="imagen">
               <a href="htn.php"> <img src="img/htn.jpg" width="836px" /></a>
			</div>
			
			<div class="imagen">
                <a href="Kat0.php"> <img src="img/Kat0.jpg" width="836px" /></a>
			</div>
			
			<div class="imagen">
				<a href="moon.php"><img src="img/moon.jpg" width="850px"/></a>
			</div>
			
			<a href="#" class="anterior" onclick="anterior();">&#10094;</a>
			<a href="#" class="siguiente" onclick="siguiente();">&#10095;</a>
			
			<div class="puntos">
				<span class="punto activo" onclick="mostrar(0);"></span>
				<span class="punto" onclick="mostrar(1);"></span>
				<span class="punto" onclick="mostrar(2);"></span>
				<span class="punto" onclick="mostrar(3);"></span>
			</div>
			
			<div class="boton">
				<a href="#">
					<img src="img/pause.png" id="btn" onclick="playpause();" />
				</a>
			</div>
		
	</div> 
	<main class="container">
		
       
	<!-- <div class="row productos">
        <div class="box">
			<article class="col-12 text-center">
				<h2 class="subtitulo"><span>Lo que ofrecemos</span></h2>
				<p class="titulo">¿A donde desea ir?</p>
			</article>

			<div class="col-12">
				<div class="row justify-content-center">
					<article class="col-6 col-lg-3 py-1">
						<a href="usuarios.php"><figure class="producto">
							<img src="img/products/guest.png" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Usuarios</p>
							</figcaption>
						</figure></a>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<a href="registros.php"><figure class="producto">
							<img src="img/products/plantilla.jpg" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Registros</p>
							</figcaption>
						</figure></a>
					</article>

					<article class="col-6 col-lg-3 py-1">
						<a href="notas.php"><figure class="producto">
							<img src="img/products/notas.png" class="img-fluid" alt="">
							<figcaption class="overlay">
								<p class="overlay-texto">Notas</p>
							</figcaption>
						</figure></a>
					</article>
				</div>
			</div>
			</div>
		</div> -->
	</main>

	<div class="separador text-center text-white">
		<p><q>Sobre nosotros</q></p>
	</div>

	<div class="container">
		<div class="row acerca-de justify-content-around">
			<article class="col-10 col-sm-5">
				<figure class="text-center">
					<img src="img/icons/icon-team.png" alt="">
					<figcaption>
						<p>
							<strong class="mb-2">Los cimientos del futuro</strong>
							<div class="w-100"></div>
							Somos una pequeña empresa independiente de juegos que busca alcanzar sus metas.
                    </figcaption>
                </figure>
            </article>

			<article class="col-10 col-sm-5">
				<figure class="text-center">
					<img src="img/icons/icon-services.png" alt="">
					<figcaption>
						<p>
							<strong class="mb-2">Una historia de servicio</strong>
							<div class="w-100"></div>
							. . .
                    </figcaption>
                </figure>
            </article>
		</div>
	</div>

	
	<div class="container-fluid">
		<section class="contacto row justify-content-center">
			<div class="col-12 col-md-9 text-center">
				<h2 class="subtitulo"><span>Contactanos</span></h2>
			</div>

			
			<div class="w-100 mb-4"></div>
			<div>
				<p class="border-bottom border-top">
					<img src="img/icons/icon-cellphone.png" alt="">Tel: 1109 c me para y se  me *****.
				</p>
			</div>
		</section>

		<footer class="row justify-content-center redes-sociales">

            <div>© 2019 SevenSoft Corporation. Todos los derechos reservados. Todas las marcas registradas pertenecen a sus respectivos dueños en Argentina.</div>
            <br>
            <div class="col-auto">
				<a href="#"><img src="img/icons/facebook.png" alt=""></a>
				<a href="#"><img src="img/icons/twitter.png" alt=""></a>
				<a href="#"><img src="img/icons/instagram-new.png" alt=""></a>
			</div>
		</footer>
	</div>

	  <script src="js/main.js"></script>
	
</body>
</html>
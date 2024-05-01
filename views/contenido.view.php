<?php

session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: ../index.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/estiloss.css">
	<link rel="stylesheet" href="../css/style.css">
	<title>Facultad de Ingenieria de Sistemas| UNICA</title>
<style type="text/css">
	#logo img{
		margin-top: 20px;
	}

</style>

</head>
<body>
	<header>
		<figure id="logo">
			<img src="../img/unica.png" alt="logo de la Unica">
		</figure>
		<h1>
			Biblioteca de la Facultad de Ingeniería de Sistemas
		</h1>
		<figure id="fis">
			<img src="../img/fis.png" alt="">
		</figure>
	</header>
	<li><a href="salir.php">Cerrar sesion</a></li>
	<footer>
		<div class="contenedor">
			<div class="footer-main">
				<div class="footer-columna">
					<h3>Dirección</h4>
					<span id="location"><img src="../img/Location_41047.png" alt=""><p>Panamericana Sur S/N - Ciudad Universitaria Ica</p></span><br>
					<span id="phone"><img src="../img/Phone_31105.png" alt=""><p>(056) 387171</p></span><br>
					<span id="mail"><img src="../img/email.png" alt=""><p>@SistemasUnica</p></span>
				</div>
				<div class="footer-columna">
					<h3>Redes Sociales</h3>
					<span id="facebook"><a href="https://web.facebook.com/SistemasUnica/" target="_blank" title="Facebook"><img src="../img/facebook_soc.png" alt=""></a></span>
					<span id="twitter"><a href="https://twitter.com/sistemasunica?lang=es" target="_blank" title="Twitter"><img src="../img/Twitter con color.png" alt="" ></a></span>
				</div>
				<div class="footer-columna">
					<h3>Mas Información</h3>
					<p>Para mas informacion por favor acercarse a las oficinas de la Facultad</p>
				</div>
			</div>
		</div>
		<div class="copy">
			<p>&copy; Facultad de Ingenieria de Sistemas</p>
		</div>
	</footer>

</body>
</html>
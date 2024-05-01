<?php 
	$alert="";
session_start();

	if (!empty($_SESSION['active'])) {
		header('Location: views/contenido.view.php');
		
	}else{
		if (!empty($_POST)) {
		# code...
		
		if (empty($_POST['usuario']) || empty($_POST['password'])) {
			$alert= "ingrese su usuario y sy password";
		}else{
			require_once "conexion.php";
			$user= mysqli_real_escape_string($conexion,$_POST['usuario']);
			$pass = md5(mysqli_real_escape_string($conexion,$_POST['password']));
			
			$query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE user='$user' AND pass='$pass'");
			$result = mysqli_num_rows($query);
			if ($result>0) {
				$data = mysqli_fetch_array($query);
				$_SESSION['active']= true;
				$_SESSION['id']= $data['id'];
				$_SESSION['usuario']=$data["user"];
				$_SESSION['pass']=$data['pass'];

				header('Location: views/contenido.view.php');
			}else{
				$alert='El usuario o passwod son incorrectos';
				session_destroy();
			}

		}
	}
	}


	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/estilos.css">
	<title>Facultad de Ingeniería de Sistemas | Iniciar sesión</title>
</head>
<body>
	<!--
	<div class="contenedor">
		<h1 class="titulo">Registrate</h1><br>

		<hr class="border">
		
		<form action="<?php //echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class=""formulario" name="login" >
			
			<div class="form-group">
				
				<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
					

				</div>
			</div>

		</form>
	</div>
-->
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Iniciar sesión</h2>
		    <!--formulario-->
<form action="" method="POST" >

	 	<div class="form-group">
    		<label for="exampleInputEmail1" class="text-uppercase">Usuario</label>
    		<input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
    
  		</div>
  		<div class="form-group">
    	<label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
    		<input type="password" class="form-control" placeholder="Contraseña" name="password" required>
  		</div>
  
  		<div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
    	<div class="form-check">
    	<button type="submit" class="btn btn-login float-right" onclick="login.submit()">Iniciar</button>
  		</div>

</form>
<!--*****fin de formulario-->
<div class="copy-text"><i class="fa fa-heart"></i> by <a href="#">Facultad de Ingenieria de Sistemas</a></div>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/laptop.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Bienvenido</h2>
            <p>Bienvenido a la Biblioteca Virtual de la Facultad de Ingenieria de Sistemas</p>
        </div>	
  </div>
    </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>

</body>
</html>
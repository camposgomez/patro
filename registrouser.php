<?php
    require_once 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Loquesea.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<div class="col-md-12">
			<header id="cabecera">
				Loquesea.com		
			</header>
		</div>	
	</div>
    <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse" >
            <ul class="nav navbar-nav" >
                <li><a href="index.php">Principal</a>
                </li>
                <li><a href="registrouser.php">Registrese</a>
                </li>
            </ul>
        </div>
	</div>
    <div class="container">
    	<div class="col-md-9">
            <h1>Registrar Usuarios</h1>
                <article id="registro">
                    <form method="POST" action="registrauser.php">  
                         <p><label>Nombres:&nbsp;&nbsp;</label> <input class="textbox" type="text" name="nombres" class="cajas" />  </p>
                         <p><label>Apellidos:&nbsp;</label> <input class="textbox" type="text" name="apellidos" class="cajas" />  </p>
                         <p><label>E-mail:&nbsp;&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="email" name="email" class="cajas" />  </p>
                         <p><label>Usuario:&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="usuario" class="cajas" />  </p>
                         <p><label>Contrase&ntilde;a:</label> <input class="textbox" type="password" name="contra" class="cajas"/> </p>
                         <button type="submit" class="btn">Crear Cuenta</button>
                     </form>  
                </article>
    	</div>
    </div>

    <div class="container">
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Carlos Campos & Felipe Ruiz </a>
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <script src="js/bootstrap.js"></script> 
</body>
</html>

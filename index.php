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
			<section id="seccion">
		        <h1>Articulos</h1>   
		        <?php
		            $obj_conex=new Conexion();
		            $sql="select * from articulos";
		            $datos=$obj_conex->get_resultados_query($sql);
		            foreach ($datos as $fila){                    
		               echo " 
		                <article>
							<div>
		                        <hgroup>
		                            ";
		                                echo '<img class="imagprin" src="img/'.$fila["imagen"].'">';
		                                echo $fila["nombre"]."<br>";
		                                echo $fila["descripcion"]."<br>";
		                                echo $fila["contacto"]."<br>";
		                                echo $fila["valor"]."<br>";                                                  
		                                
		                            echo " 
		                        </hgroup>	
							</div>
		                    <p><a href='comenta.php?codiarti=".$fila["codiarti"]."'>Comentarios</a></p>
		                 </article>";                                       
		                }
		        ?>
			</section>
    	</div>
    	<div class="col-md-3">
            <form method="POST" action="ingreso.php">
                <p><label>Usuario:&nbsp;</label> <input class="textbox1" type="text" name="codiusua" class="cajas1" />  </p>
                <p><label>Pass:&nbsp;&nbsp;&nbsp;&nbsp;</label> <input class="textbox1" type="password" name="pass" class="cajas1" />  </p>
                <button type="submit" class="btn1">Enviar</button>
            </form> 
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

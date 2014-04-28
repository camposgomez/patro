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
                <li><a href="indexlog.php">Principal</a>
                </li>
                <li><a href="cargar.php">Administraci&oacute;n</a>
                </li>
                <li><a href="contactenos.php">Contacto</a>
                </li>
            </ul>
        </div>
	</div>
    <div class="container">
    	<div class="col-md-9">
            <h1>Cargar Articulos</h1>
            <article id="registro">
                <form action="upload.php" method="post" enctype="multipart/form-data"> 
                    <p><label>Producto:&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="nombre" class="cajas" />  </p>
                    <p><label>Descripci&oacuten: </label> <input class="textbox" type="text" name="descripcion" class="cajas" />  </p>
                    <p><label>Contacto:&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="contacto" class="cajas" />  </p>
                    <p><label>Valor:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input class="textbox" type="text" name="valor" class="cajas" />  </p>
                    <p><label>Imagen:&nbsp;&nbsp;&nbsp;&nbsp;</label> <input type="file" name="imagen" />  </p>
                    <button type="submit" class="btn" name="action" value="upload">Cargar Articulo</button>
                </form> 
            </article>
            <section id="seccion1">
                <div class="CSSTableGenerator" >
                <?php
                    $obj_conex=new Conexion();
                    $sql="select * from articulos";
                    $datos=$obj_conex->get_resultados_query($sql);
                    $control=0;
                    if (! $datos){
                       echo "La consulta SQL contiene errores.";
                       exit();
                    }else {
                        echo "<table><tr><td>CodiArt</td><td>Nombre</td><td>Descripcion</td><td>Imagen</td><td>Contacto</td><td>Valor</td><td></td>
                             </tr><tr>";
                    //obtenemos los datos resultado de la consulta
                        foreach ($datos as $fila){
                                    $control=$control+1;
                                    echo "<td>".$fila["codiarti"]."</td><td>".$fila["nombre"]."</td>
                                  <td>".$fila["descripcion"]."</td><td>".$fila["imagen"]."</td><td>".$fila["contacto"]."</td><td>".$fila["valor"]."</td><td><a href='borraarticulos.php?codiarti=".$fila["codiarti"]."'>Borrar</a></td>";
                                       echo "</tr><tr>"; 
                                       $control=1;
                                 }
                                echo "</tr></table>";
                            }
                ?>
            </section>
        </div>
    	<div class="col-md-3">
	        <div class="list-group" >
            	<a href="calificaciones.php" class="list-group-item">Calificaciones</a>
            	<a href="estados.php" class="list-group-item">Estados</a>
            	<a href="registro.php" class="list-group-item">Usuarios</a>
            	<a href="cargar.php" class="list-group-item">Articulos</a>
        	</div>
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

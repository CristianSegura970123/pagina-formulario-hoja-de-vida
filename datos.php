<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />  <!--Sirve para que la pagina hacepte cualquier caracter -->
    <title>Hoja de vida</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="agrupar">  <!--div sirve para agregar un nuevo atributo a nuestro codigo html-->
		<header class="cabecera"> <!--cabecera-->
			<h1>HOJA DE VIDA</h1>
    	</header>
	    <section class="seccion">
	    	<article >
	    		<hgroup>
	            <!--Comando class sirve para seleccionar diferentes tipos de elementos, como encabezados, parafos etc-->
					<h1><i>DATOS PERSONALES</i>  </h1>
				</hgroup>
				<p>
					<img src="IMAGENES/hoja_de_vida.jpeg" />
					<ul class="lista_datos">
						<?php
							$Nombre = $_POST["Nombre"];
							$Apellido = $_POST["Apellido"];
							$Tipo_id = $_POST["Tipo_id"];
							$id = $_POST["id"];
							$sexo = $_POST["sexo"];
							$email = $_POST["email"];
							$direccion = $_POST["direccion"];
							$Telefono = $_POST["Telefono"];
							$Formal = $_POST["Formal"];
							$Informal = $_POST["Informal"];
							$Trabajos = $_POST["Trabajos"];
							$Personal = $_POST["Personal"];
							$Personal_2 = $_POST["Personal_2"];
							$Laboral = $_POST["Laboral"];
							$Laboral_2 = $_POST["Laboral_2"];
							$Familiar = $_POST["Familiar"];
							$Familiar_2 = $_POST["Familiar_2"];

							echo "<h2>$Nombre</h2>";
							echo "<h2>$Apellido</h2>";
							echo "<h2>$Tipo_id</h2>";
							echo "<h2>$id</h2>";
							echo "<h2>$sexo</h2>";
							echo "<h2>$email</h2>";
							echo "<h2>$direccion</h2>";
							echo "<h2>$Telefono</h2>";
							echo "<h2>$Formal</h2>";
							echo "<h2>$Informal</h2>";
							echo "<h2>$Trabajos</h2>";
							echo "<h2>$Personal</h2>";
							echo "<h2>$Personal_2</h2>";
							echo "<h2>$Laboral</h2>";
							echo "<h2>$Laboral_2</h2>";
							echo "<h2>$Familiar</h2>";
							echo "<h2>$Familiar_2</h2>";
						?>
					</ul>
				</p>
	    	</article>
	    </section>
	    	<footer class="pie">
                    Derechos reservados 2020
                    <br><time datetime="12-JUN-2020">Publicado 12-JUN-2020</time>
            </footer>
	</div>
</body>
</html>
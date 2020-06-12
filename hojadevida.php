<!doctype html>
<html>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<head>
	<link rel="stylesheet" href="estilo.css">
	<title>Datos Personales</title>
</head>
	<body>
		<div class="agrupar1">
		<header class="cabecera1"><h1>HOJA DE VIDA</h1></header>	
		<section class="seccion1">
			<article>
				<hgroup>
					<h2>DATOS PERSONALES</h2>
				</hgroup>
				<p>
					<ul class="datos1">
						<ul class="lista-datos">
							<?php
								$nombre = $_POST["nombre"];
								$apellido = $_POST["apellido"];
								$tipo_id = $_POST["tipo_id"];
								$id = $_POST["id"];
								$sexo = $_POST["sexo"];
								$mail = $_POST["mail"];
								$telefono = $_POST["telefono"];
								$Direccion = $_POST["Direccion"];
								$telefono = $_POST["telefono"];
								$formal = $_POST["formal"];
								$informal = $_POST["informal"];
								$desempeñados = $_POST["desempeñados"];
								$personal = $_POST["personal"];
								$personal2 =$_POST["personal2"];
								$laboral = $_POST["laboral"];
								$laboral2 = $_POST["laboral2"];
								$familiar = $_POST["familiar"];
								$familiar2 = $_POST["familiar2"];

								echo "<h2>$nombre</h2>";
								echo "<h2>$apellido</h2>";
								echo "<h2>$tipo_id</h2>";
								echo "<h2>$id</h2>";
								echo "<h2>$sexo</h2>";
								echo "<h2>$mail</h2>";
								echo "<h2>$Direccion</h2>";
								echo "<h2>$telefono</h2>";
								echo "<h2>$formal</h2>";
								echo "<h2>$informal</h2>";
								echo "<h2>$desempeñados</h2>";
								echo "<h2>$personal</h2>";
								echo "<h2>$personal2</h2>";
								echo "<h2>$laboral</h2>";
								echo "<h2>$laboral2</h2>";
								echo "<h2>$familiar</h2>";
								echo "<h2>$familiar2</h2>";
							?>
						</ul>
					</ul>
			</article>
		</section>
		<footer class="pie">
                Derechos reservados 2020
                <br><time datetime="09-MAY-2020">Publicado 07-JUN-2020</time>
        </footer>
		</div>
	</body>
</html>
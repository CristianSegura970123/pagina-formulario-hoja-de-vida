<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
<head>
	<link rel="stylesheet" href="estilo.css">
	<title>Formulario para ingresar datos personales</title>
</head>
<body>
	<div class="agrupar">
		<header class="cabecera">
			<h1>HOJA DE VIDA</h1>
		</header>
		<section class="seccion">
			<article>
				<hgroup>
        		<h2><i>DATOS PERSONALES</i></h2>
        	</hgroup>
        	<img src="imagen/hoja_de_vida.jpeg" /> 
        	<p> 

	
			<form action="hojadevida.php" method="post" class="datos"> 
				<ul class="lista_datos">
					<table ><!--border="0" align="left" -->
						<tr ><!--align="left"-->

							Nombre  <input type="text" name="nombre" size="20">
							<br>
							Apellido  <input type="text" name="apellido" size="20">	
							<br>
							 Tipo de identificación 
								<select id="Tipo_id" name="tipo_id">
									<option value="cedula">Cedula</option>
									<option value="tarjeta">Tarjeta de identificación</option>
									<option value="otra">Otra</option>
								</select>	
							<br>
						No. Identificación <input type="text" name="id" size="20">
						<br>
						Sexo
							<select id="sexo" name="sexo">
								<option value="femenino">Femenino</option>						
								<option value="masculino">Masculino</option>
								<option value="otro">Otro</option>
							</select>
							<br>
						Correo Electronico <input type="text" name="mail" size="20">
						<br>
						Direccion Residencia <input type="text" name="Direccion" size="20">
						<br>
						Teléfono <input type="text" name="telefono" size="20">
						<br>
						Estudios formales <input type="text" name="formal" size="20">
						<br>
						Estudios informales <input type="text" name="informal" size="20">
						<br>
						Trabajos desempeñados <input type="text" name="desempeñados" size="20">
						<br>
						 Referecias: 
						 <br>
						 Personales 
							<input type="text" name="personal" size="20">
							<input type="text" name="personal2" size="20">
							<br> <!--salto de linea-->
						Laborales 
							<input type="text" name="laboral" size="20">
							<input type="text" name="laboral2" size="20">
							<br>
						Familiares 
							<input type="text" name="familiar" size="20">	
							<input type="text" name="familiar2" size="20">

						<tr><td><input type="submit" class="button" name="b1" value="Guardar Informacion"></td></tr>
					</table>		
				</ul>
			</form>
			</p>
			</article>
		</section>
		<footer class="pie">
                Derechos reservados 2020
                <br><time datetime="09-MAY-2020">Publicado 07-JUN-2020</time>
        </footer>
	</div>
	
</body>
</html>
<!--Fuente de la imagen: https://www.portafolio.co/economia/empleo/pasos-para-armar-una-hoja-de-vida-500205 -->

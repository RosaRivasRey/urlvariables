<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Ejercicio arrays</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="styles.css" />
	</head>
	
	<body>
	<div class="container">
		<h2>Estamos en la pagina de idioma</h2>
		<?php
			$idioma=$_GET['idioma'];
			switch($idioma){
				case 'es':echo 'españolito';
				break;
				case 'en':echo 'inglesito';
				break;
				case 'fr':echo 'francesito';
				break;
				case 'ge':echo 'alemanito';
				break;
			}
		?>
		</div>
	</body>
</html>

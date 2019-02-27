<?php
require_once 'connect/conexion.php';

$consulta = "SELECT * FROM menu WHERE estado = 1 ";
$res = mysql_query($consulta.$conn);
$cant = mysql_num_rows($res);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Herbolaria</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<div id="contenedor">
		<<header id="header" class="">
			<h1>Herbolaria :v</h1>
		</header>
		<<nav>
			<ul>
				<?php
					while ($fila= mysql_fetch_array($res)){
					echo  <li><a href="#">	$fila['users']		</a></li>;
					}

				?>
			</ul>
		</nav>
	</div>
	
</body>
</html>
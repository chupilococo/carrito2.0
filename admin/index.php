<?php
    include_once ('logic/getContentent.php');
?>
<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta lang="es">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/hero.css">
    <link rel="stylesheet" type="text/css" href="css/productos.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/footer.css">
	<title>Carrito de Compras</title>
</head>
<body>
	<header>
		<h1><a href="?s=index" >Carrito de Compras <i class="fas fa-shopping-basket"></i></a></h1>
		<input type="checkbox" id="nav-toggle" class="nav-toggle">
		<nav>
			<ul>
				<li><a href="?s=productos">Productos</a></li>
				<li><a href="?s=contacto">Contacto</a></li>
			</ul>
		</nav>
		<label for="nav-toggle" class="nav-toggle-label">
			<span></span>
		</label>
	</header>
	<div class="content">
        <?=(isset($content))?$content:'no hay nada que mostrar'?>
	</div>
    <footer>
        <p>&copy;</p>
    </footer>
</body>
</html>
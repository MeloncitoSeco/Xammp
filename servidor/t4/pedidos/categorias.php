<?php 
	/*comprueba que el usuario haya abierto sesión o redirige*/
	require 'sesiones.php';
	require_once 'bd.php';
	comprobar_sesion();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Lista de categorías</title>
	</head>
	<body>
		
		<h1>Lista de categorías</h1>		
		<!--lista de vínculos con la forma 
		productos.php?categoria=1-->
		<?php
		 $categorias = cargar_categorias();
         if ($categorias === false) {
             echo "<p class='error'>Error al conectar con la base de datos</p>";
         } else {
             echo "<ul>"; // Abrir la lista
             foreach ($categorias as $cat) {
                 $url = "productos.php?categoria=" . $cat['codCat'];
                 echo "<li><a href='$url'>" . $cat['nombre'] . "</a></li>";
             }
             echo "</ul>";
         }
		?>



        <footer>
    <?php require 'cabecera.php';?>
    </footer>
	</body>
    
</html>
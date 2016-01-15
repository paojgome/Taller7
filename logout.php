<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset = "utf-8">
<title> Formulario JC </title>
</head>
<body>
<header></header>
<section id="sidebar">
</section>
<section id="main">
<?php
if (isset($_SESSION['nombre'])){
session_destroy();
echo "Se ha destruido session exitosamente <br/>";
echo "<a href='index.php'>Volver</a>";
}
else {
echo "ERROR... <br/>";
echo "<a href='index.php'>Volver</a>";
}
?>
</section>
</body>
</html>

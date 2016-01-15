<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset = "utf-8">
<title> Login JC </title>
</head>
<body>
<header></header>
<section id="sidebar">
</section>
<section id="main">
<?php
$_SESSION['nombre'] = $_POST['nombre'];
echo "variable:" . $_SESSION['nombre'];
echo "<a href='index.php'>Volver</a>";
?>
<a href="index.php">Volver</a>;
</section>
</body>
</html>

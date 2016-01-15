<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset = "utf-8">
<title> Formulario  </title>
</head>
<body>
<aside>
<?php
if (isset($_SESSION['nombre'])){
echo "<p> Hola Usuario:(" . $_SESSION['nombre']. ") [<a
href='logout.php'>Salir</a>]</p>";
}
else {
?>
<form action = "login.php" method = "post">
<fieldset>
<p>Nombre: <input type="text" name="nombre" /></p>
<p><input type="submit" value="Enviar" /></p>
</fieldset>
</form>
<?php }
?>
</aside>
</body>
</html>

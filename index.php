<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href= "fondo.css">
    <link rel="stylesheet" href= "texto2.css">
    <link rel="stylesheet" href= "hola.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post" action="">

    <h1>Hola...</h1>
    <p>Es un placer conocerte, rellena los campos del formularios para registrarte y descarga material unico<p>
    	
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="text" name="surname" placeholder="apellidos">
        <input type="email" name="email" placeholder="Email">
        <input type="contraseña" name="password" placeholder="contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>

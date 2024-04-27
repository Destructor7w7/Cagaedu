<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href= "fondo.css">
    <link rel="stylesheet" href= "texto2.css">
    <link rel="stylesheet" href= "hola.">
    
</head>

<body>
<form method="post">

<h1>Hola...</h1>
<p>Es un placer conocerte,Rellena el formulario y unete para descargar material unico<p>

<div class="form-group">
    <label>Nombre *</label>
    <input type="text" name="nombre" placeholder="Introduce tu nombre...">
</div>
<div class="form-group">
    <label>Apellidos *</label>
    <input type="text" name="apellidos" placeholder="Introduce tus apellidos...">
</div>
<div class="form-group">
    <label>Email *</label>
    <input type="mail" name="email" placeholder="Introduce tu email...">
</div>
<div class="form-group">
    <label>Contraseña *</label>
    <input type="password" name="contraseña" placeholder="Introduce tu contraseña...">
</div>
<div class="form-group">
    <input type="submit" name="resgister">
</div>
<div>
<a href="index.html"><button type="button">VOLVER</button></a>
</div>
</form>
<?php 
        include("registro.php");
        ?>



</body>


</html>




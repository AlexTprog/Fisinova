<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="encuesta.css">
  <title>Formulario Registro</title>
</head>
<body>
  <form class="form-register" method="post">
    <h4>Formulario Registro</h4>
    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del capitan">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su Correo">
    <input class="controls" type="text" name="ciclo" id="ciclo" placeholder="Ingrese su ciclo de estudio">
    <input class="controls" type="text" name="curso" id="curso" placeholder="Ingresa el curso a concursar">
    <input class="controls" type="text" name="celular" id="celular" placeholder="numero de celular">
    <input class="controls" type="text" name="equipo" id="equipo" placeholder="Nombre del equipo">

    <p>Colocar los siguientes archivos en drive</p>
   <p>Codigo , docx y pptx</p>
    <input class="botons" type="submit" name="registrar" value="Registrar">
    <a href="https://drive.google.com/drive/folders/1UkapUvrGa-6kNMiGVlrdh_9YI_sXp-Ms" class="enlace">Sube tus archivos aqui</a>
</form>
  <?php
  include("registrar.php");
  ?>
</body>
</html>
<?php session_start(); /* Inicia sesión */

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<HTML>
<HEAD>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <title>SUV: Back-End</title>
</HEAD>

<BODY>
 <DIV class="cont">
  <DIV class="APP">
   <h1>Lenguajes de programación Back End</h1>

   
   <!-- MENÚ DE NAVEGACIÓN -->
   <DIV class="menu">
    <ul>
     <li><a href="index.php">Inicio</a></li>
     <li><a href="upload.php">Subir archivo</a></li>
     <li><a href="gallery.php">Galería</a></li>
     <li><a href="logout.php">Salir</a></li>
    </ul>
  </DIV>

 <DIV class="actividad">
   
  <h4>Actividad Integradora. Documentos creados en PHP</h4>
  
  <p>Ingresa un texto
  <form action="filepng.php" method="POST">
	<input type="text" name="texto" class="form"><br>
	<input type="submit" value="Crear imagen" class="button">
  </form></p>

  <br>
  
 <!-- Termina div "actividad" -->
 </DIV>

 <p><b>Alumno: </b>Bárbara R. Solórzano R.<br/>
 <b>Código: </b>394485606<br/>
 <b>Asesor: </b>José Francisco Jafet Pérez López<br/>
 <b>Última modificación: </b>13 de junio 2021</p>

 <!-- Termina div "APP" -->
 </DIV>

<!-- Termina div "cont" -->
</DIV>

</BODY>
</HTML>
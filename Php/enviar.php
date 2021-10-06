<?php
	$destino= "fabrizioimanol12@gmail.com";
	$nombre= $_POST["nombre"];
	$correo= $_POST["correo"];
	$telefono= $_POST["telefono"];
	$mensaje= $_POST["mensaje"];
	$contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
	mail($destino,"Contacto", $contenido);
	/*
	echo $destino."<br>";
	echo $nombre."<br>";
	echo $correo."<br>";
	echo $telefono."<br>";
	echo $mensaje."<br>";
	echo $contenido."<br>";
	*/
	
	header("Status: 301 Moved Permanently");
	header("Location: ../contactenos.html");
	exit;
	
?>
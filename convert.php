<?php
	/*
		Marc Garcia Torrent
		garciatorrent96@gmail.com
		https://github.com/mgarcia96

		### Convertir texto PDF a HTML ###

	*/
	$file_name="nombre.pdf"; // Seleccionamos el archivo que queremos convertir a texto.
	$file_path=$_SERVER['DOCUMENT_ROOT'].'/pdf2html/Convertir-texto-PDF-a-HTML/pdftohtml.exe -c -i '.$file_name; // Vamos a la ruta donde esta ubicado el ejecutable del pdftohtml y escribimos el comando que ejecutaremos en consola en la siguiente línia.
	// Los parámetros -c y -i, significan respectivamente: crear un archivo complejo y ignorar imagenes.
	// Asegurad que la ruta del archivo pdftohtml.exe esta correcta!
	$output=shell_exec($file_path); // Ejecutamos el script a la consola de nuestro sistema.
	header("Location:nombre-1.html"); // Nos redirige al documento html con el texto del pdf convertido.
?>
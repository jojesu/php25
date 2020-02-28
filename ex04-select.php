<?php
//vrea una conexión con la bdd biblioteca
$conexion=@new mysqli('localhost','alumne','','biblioteca');

//si no se pudo conectar...
if ($conexion->connect_errno)
    throw new Exception('ERROr: no se pudo conectar con la bdd');

//establece el conjunto de caracteres a utf-8
$conexion->set_charset('utf8');

echo "Conexión establecida correctamente";

//preparamos la consulta de inserción
$consulta="SELECT titulo, autor FROM libros ORDER BY titulo ASC";

//lanza la consulta contra la bdd
$resultado=$conexion->query($consulta);

echo "<ul>";
//convierte cada fila del resultado en un array
while($libro=$resultado->fetch_object())
    echo "<li><b>$libro->titulo</b>, de $libro->autor</li>";
echo "</ul>";

$resultado->free(); //libera memoria
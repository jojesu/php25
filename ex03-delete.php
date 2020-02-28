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
$consulta="DELETE FROM libros WHERE id=26";

//lanza la consulta contra la bdd
if(!$conexion->query($consulta))
    throw new Exception("ERROR al borrar los datos ".$conexion->error);

    echo "<p>Borrado de $conexion->affected_rows fila/s</p>";
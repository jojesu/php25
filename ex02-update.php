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
$consulta="UPDATE libros
           SET titulo='La historia interminable'
           WHERE titulo='Neverending Story'";

//lanza la consulta contra la bdd
if(!$conexion->query($consulta))
    throw new Exception("ERROR al actualizar los datos ".$conexion->error);

    echo "<p>Actualización de $conexion->affected_rows filas</p>";
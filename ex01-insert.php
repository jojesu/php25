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
$consulta="INSERT INTO libros(isbn, titulo, editorial, idioma, autor, ediciones, edadrecomendada)
    VALUES('123456', 'Neverending Story', 'Alfaguara', 'English',
        'Michael Ende', 20, 3)";

//lanza la consulta contra la bdd
if(!$conexion->query($consulta))
    throw new Exception("ERROR al guardar los datos ".$conexion->error);

    echo "<p>Todo ok, el id del registro es $conexion->insert_id</p>";
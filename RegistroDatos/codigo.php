<?php


$conn_string = "host=localhost port=5432 dbname=empresa user=postgres password=123456 ";

// establecemos una conexion con el servidor postgresSQL
$dbconn = pg_connect($conn_string);

$query=("INSERT INTO clientes(nombre,correo,telefono,direccion)
	VALUES('$_REQUEST[nombre]','$_REQUEST[correo]',
	'$_REQUEST[tel]','$_REQUEST[direccion]')");

$consulta=pg_query($conexion,$query);
pg_close();
echo 'El cliente fue dado de alta';


?>
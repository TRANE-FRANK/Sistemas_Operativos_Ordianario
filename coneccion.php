<?php
$Email = $_POST['FormCorreo'];
echo $Email . "\n";

$User = $_POST['FormUser'];
echo $User . "\n";

$Name = $_POST['FormNombre'];
echo $Name . "\n";

$Pass = $_POST['FormContraseña'];
echo $Pass . "\n";


$mysqli = new mysqli("localhost", "root", "", "registro");

if ($mysqli->connect_errno) {

    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}
else
{

    echo $mysqli->host_info . "\n";

    echo "conexion exitosa";

    $mysqli->query("insert into usuarios (".$palabra.") values ();")
}
?>
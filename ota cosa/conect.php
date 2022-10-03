<?php
$Server = 'localhost';
$UserBD = 'root';
$PasswordBD = '';
$BaseDatos = 'coopac';
 
$link =new mysqli($Server, $UserBD, $PasswordBD , $BaseDatos);

if ($link->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
	exit(); 
}
?>

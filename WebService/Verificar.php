<?php
if(isset($_REQUEST['usu']))
    $usu = $_REQUEST['usu'];
if(isset($_REQUEST['pas']))
    $pas = $_REQUEST['pas'];
$cnx = new PDO("mysql:host=localhost;dbname=id9631414_bd_route360","id9631414_flopezs","Snoopy301297");
$res = $cnx->query("select * from administrador where email_adm='$usu' and password_adm='$pas'");
$datos = array();
foreach($res as $row)
{
    $datos[] = $row;
}
echo 
    json_encode($datos);
?>
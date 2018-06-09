<?php 
$server="localhost";
$usuario="adm_fixture";
$clave="catarojo1";
$base="fixture";

$link=mysqli_connect($server,$usuario,$clave,$base); 
mysqli_set_charset($link,"utf8");
?>
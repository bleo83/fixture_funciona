<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "USUARIO CREADO";
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
$lastname = isset($_REQUEST['lastname']) ? $_REQUEST['lastname'] : null;
$country = isset($_REQUEST['country']) ? $_REQUEST['country'] : null;
$company = isset($_REQUEST['company']) ? $_REQUEST['company'] : null;

$conn = mysql_connect("localhost", "admzonarg", "catarojo1") or die ("que no hay conexion");

$q = mysql_db_query("fixture", "INSERT INTO user (email,password,name,lastname,country,company) VALUES ('$email','$password','$name','$lastname','$country','$company')");
// mysql_db_query("fixture", "INSERT INTO prode (user,pass,email,name,lastname,country,company) VALUES ('".$user."')");
// mysql_db_query("fixture", "INSERT INTO prode (user,pass,email,name,lastname,country,company) VALUES ('{$user}')");

/*
var_dump( mysql_affected_rows() );




var_dump( mysql_insert_id() );
*/
<?php
$user = 'postgres';
$passwd = '29041999';
$db = 'workshop5';
$port = 5432;
$host = 'localhost';
$strconnection = "host=$host port=$port dbname=$db user=$user password=$passwd";
$connection = pg_Connect($strconnection) or 
die ("Error de conexion. ". pg_last_error());
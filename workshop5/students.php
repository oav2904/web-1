<?php
require_once  __DIR__.'/functions.php'; 
$freno = pg_query($connection, "SELECT COUNT(id) FROM students");
$val = pg_fetch_result($freno, 0, 0);
$top = $argv[1];
if($top != null){
if($val < $top){
 echo "Digite otro número, el máximo de valores es de ". $val . "\n";
}
else{
$datos = pg_query($connection, "SELECT * FROM students Limit $top");
while ($fila =pg_fetch_array($datos)){
    echo $fila [0]. ",".$fila [1]. ",".$fila [2]. ",".$fila [3]. 
    ",".$fila [4]. "\n"; 
}
}
}
else{
    echo "Por favor digite un argumento \n";
}
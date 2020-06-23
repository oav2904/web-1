<?php

$tempeture = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 
73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average = array_sum($tempeture) / count($tempeture);
sort($tempeture);
$short = array_unique(array_slice($tempeture, 0, 7));
rsort($tempeture);
$large = array_unique(array_slice($tempeture, 0, 7));

echo $average ."\n";

foreach($short as $value){
echo  $value ."\n";

}
foreach($large as $value){
echo  $value ."\n";

}
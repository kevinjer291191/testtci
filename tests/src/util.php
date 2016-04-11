<?php

//you can use this to generate array 
$string = file_get_contents("D:/xampp/htdocs/hellobill/fnb-services/tests/src/json-to-array.json");
$array = json_decode($string, true);
print_r($array);




?>
<?php 
$data["Attr1"] = 1;
$data2["Attr2"] = 2;
$data2["Name"] = "Success";
$data["Dtl"] = $data2;

header("Content-Type: application/json");
echo json_encode($data);






?>
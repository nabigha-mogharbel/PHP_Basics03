<?php
$personal_details=array("name" => "Rajesh Rao", "occupation" => "Engineer", "age" => 39, "country" => "India");
function looper($array){
foreach ( $array as $key => $value )
{
echo "$key=$value\n";
}}
looper($personal_details);
?>
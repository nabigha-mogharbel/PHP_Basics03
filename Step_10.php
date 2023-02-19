<?php

$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);
foreach($transactions as $array){
foreach($array as $key => $value){
    echo "$key:$value ";
}
echo PHP_EOL;}
?>
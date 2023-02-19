<?php

$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);
foreach ( $transactions as $value )
{
    $net=$value["debit"]-$value["credit"];  
    $id=$value["id"];
    echo "ID $id => amount $net ";
    echo PHP_EOL;
    
}

?>
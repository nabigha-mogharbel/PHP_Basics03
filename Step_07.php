<?php
    function z($int){
        for($i=1; $i<=$int; $i++){
            if($i===1||$i===$int){
                for($j=1;$j<=$int;$j++){
                    echo "*";
                }
            }
            else{
                for($j=1;$j<=$int;$j++){
                    if($i===$j){echo "*";}
                    else{echo " ";}
                }
            }
            echo PHP_EOL;
        }
    }
    z(10)
?>
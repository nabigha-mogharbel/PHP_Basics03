<?php
    function star($int){
        $mid=$int/2;
        for($i=1; $i<=$int; $i++){
            if($i<=$mid){
                for($j=1; $j<=$i; $j++){
                    echo "*";
                }
            }
            if($i>$mid){
                for($j=$int-$i; $j>0; $j--){
                    echo "*";
                }
            }
            echo PHP_EOL;
        }
    }
    star(10)
?>
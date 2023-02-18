<?php
    function fctrl($int){
        $rslt=1;
        $i=1;
        while ($i<=$int){
            $rslt=$rslt*$i;
            $i++;
        };
        echo "factorial of $int is $rslt";
    }
    fctrl(6)
?>
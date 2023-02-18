<?php
    function starts($int){
        $i=1;
        $j=1;
        while ($i<=$int){
            while($j<=$i){
                echo "*";
                $j++;
            }
            echo "<br/>";
            $i++;
            $j=1;
        };
    }
    starts(6)
?>
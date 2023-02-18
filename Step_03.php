<?php
    function srch($text, $word){
        $splitted=explode(" ", $text);
        $length=sizeof($splitted);
        $i=0;
        $counter=0;
        while ($i<=$length){
            if($splitted[$i]===$word){$counter++;}
            $i++;
        };
        echo "$word is repeated $counter times";
    }
    srch("batata is very delicious, that's why we should love batata kitr", "batata")
?>
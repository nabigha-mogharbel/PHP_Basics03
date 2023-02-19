<?php
    function reverser($text){
        $array=explode(" ", $text);
        $length=sizeof($array);
        $newTxt="";
        for($i=$length-1; $i>=0; $i--){
            $newTxt=$newTxt.$array[$i];
            $newTxt=$newTxt." ";
        }
        echo $newTxt;
    }
    reverser("what is zis")
?>
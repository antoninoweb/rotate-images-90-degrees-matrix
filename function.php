<?php
function rotateImage($a) {


    $myarray = array_reverse($a);

            foreach($myarray as $key => $value){
        $k = 0;
                foreach($value as $key2 => $value2){
                    
                    $finish[$key2][$key] = $value2;
                   
                    $k++; 
                }
            }
    
    return $finish;
    
}
?>

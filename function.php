<?php
function rotateImage($a) {


    $myarray = array_reverse($a);

            foreach($myarray as $key => $value){
      
                foreach($value as $key2 => $value2){
                    
                    $finish[$key2][$key] = $value2;
                  
                }
            }
    
    return $finish;
    
}
?>

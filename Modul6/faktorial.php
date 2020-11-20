<?php
function faktorial ($b){
    for($i=1; $i<$b; $i++){
        $b=$b*$i;
    }
    return $b;
}
echo faktorial(6);
?>
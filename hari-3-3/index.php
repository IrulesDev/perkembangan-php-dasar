<?php

$s = 10;
for($se = 1;$se <= $s;$se++){
    for($seg = $se;$seg < $s;$seg++){
        echo " ";
    }
    for($segi = 1;$segi <=(2*$se-1);$segi++){
        echo "*";
    }
    echo "\n";
}


echo "\n";
//membuat x
$n = 10 ; 
 for ($i = 1; $i <= $n; $i++) {
    for($j=1; $j <= $n; $j++) {
        if ($j == $i || $j == ($n - $i +1)) {echo "*";} else {echo " ";} }
    echo "\n";
 }

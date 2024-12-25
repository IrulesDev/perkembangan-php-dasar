<?php
$a = 10;
for($b = 1;$b <= $a; $b++){
    for($c = $b;$c < $a; $c++){
        echo " ";
    }
    for($d = 1; $d <=(2*$b-1);$d++){
        echo "|";
    }
    echo"\n";
}
?>
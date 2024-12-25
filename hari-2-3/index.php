<?php
//while loop
//1. perulsngsn dasar
$i = 1;
while($i < 7){
    echo $i;
    $i++;   //<---incremen
}


echo "\n";
//2. pernyataaan "break" istirahat
$b = 1;
while($b < 7){
    if($b ==5)break;
    echo $b;
    $b++;   //<---incremen
}

echo "\n";
//3. pernyataan di lompati dengan keyword "continue"
$c = 1;
while ($c < 8){
    $c++;       //<---incremen
    if ($c == 4)continue;
    echo $c;
}


echo "\n";
//4.cetak selama kurang dari "endwhile"
$e = 1;
while ($e < 8):
    echo $e;
    $e++;
endwhile;

//do while loop
echo "\n";
//5.mengeksekusi dulu baru melihat benar atau salahnya dengan keyword "do"
$d = 1;
do {
    echo $d;
    $d++;
}while($d < 9);

echo "\n";
//for loop 
//6. memproes hasil di dalam tanda kurung "()" dengan keyword "for"
for($f = 0; $f <= 10;$f++){
    echo "hasilnya $f \n" ;
}

echo "\n";
//eksekusi membuat kotak
$fo = 10;
for ($o = 1; $o < $fo;$o++){
    for($f = 1; $f <= $fo; $f++){
        echo "*";
    }
    echo "\n";
}
echo "\n";
//eksekusi membuat segi tiga
$s = 10;
for($se = 1;$se <= $s;$se++){
    for($seg = $se;$seg <= $s;$seg++){
        echo " ";
    }
    for($segi = 1;$segi <= (2*$se-1);$segi++){
        echo "*";
    }
    echo "\n";
}

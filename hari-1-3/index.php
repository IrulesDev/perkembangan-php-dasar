<?php
//array

function myFunction(){
    echo "ini fungsi ynga akan di masukkan array";
}
$myArray = array ("string" , 20 , ["apple" , "banana"] , myFunction()); //ini yang di maksud dengan buldInFunction
// $myArray[3]();
echo "\n";
//cara melihat yang dilalamnya ada berapa dengan keyword
echo count($myArray);
//output : 4
echo "\n";
//cara mengubah velue di dalam array
$myArray[3] = 2005;
var_dump($myArray);
echo "\n";
//car menampilkan semua value di dalam array

$z = ["volvo" , "bmw" , "toyota"];
// foreach($z as $a){
//     echo $a . "\n";
// }


echo "\n";
//untuk menambah item
array_push($z , "wuling");
var_dump($z);
        //dengan satu2
$z[10] = "ferrari";
echo "\n";
var_dump($z);


echo "\n";
//asusiatif array
$asosiatif = [   //<---ini array keys
    "nama" => "irul",
    "nomer" => "0842",
    "tahun" => "2005",
];

//cara memanggilnya yaitu dengan key nya
echo $asosiatif["nama"];

echo "\n";
//cara menggati value di dalam key
$asosiatif['tahun'] = 2010; //akan terganti dengan yang baru di bawahnya
var_dump($asosiatif);


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


echo "\n";
//cara menghapus sebuah array 
//1.
//menggunakan array_spice
$cars = ["BMW", "ferrari", "toyota","mistsubisi"];
array_splice($cars,1,1); //output yang terhapus adalah ferrari urutan ke 1
var_dump($cars);

echo "\n";
//2.
//dengan unset
$unst = ["BMW" , "Ferrari" , "Toyota" , "mitsubisi"];
unset($unst[3]);
var_dump($unst);


echo "\n";
//3.
//jika array asosiatif
$aso = [
    'merk'=>'xiaomi',
    'seri'=>'redmi',
    'nomer'=>'note 11'
];
unset($aso['nomer']);
var_dump($aso);

echo "\n";
//4. 
//membuat array baru tanpa salah satu yang di deklarasikan
$dif = [
    'merk'=>'xiaomi',
    'seri'=>'redmi',
    'nomer'=>'note 11'
]; 
$cln_dif = array_diff($dif,["note 11"]);
var_dump($cln_dif);

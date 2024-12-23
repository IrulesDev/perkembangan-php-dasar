<?php
// if(condition){
//     //execute
// }
// $b = 2;

// if ($b > 3){  //fals
//     echo "main yuk";
// }
// $b = 5;

// echo "\n";
// if ($b > 3){  //true
//     echo "main yuk";
// }

// // == Equal
// // === Identic

// $x =90;


$listBook = [];

array_push($listBook, "si kancil" , "alqur'an" , "hadist" , "shiroh");

// var_dump($listBook);



print_r($listBook);


$key = "si kancil";

if($key !== false){
    unset($listBook,$key);
    
    global $listBook;

    $listBook = array_values($listBook);   
    echo "$nameToDelete berhasil di hapus";
    print_r($listBook);
}else{
    echo "nama tidak tersedia";
}
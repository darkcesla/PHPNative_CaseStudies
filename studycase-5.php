<?php
//kelima dan terakhir

function getMostFrequentChar($str){
    //di sini kita akan membuat array untuk menghitung frekuensi kemunculan dari karakter
    $charCount = array();
    for($i = 0; $i < strlen($str); $i++){ // di sini kita menghituung kemunculan setiap karakter dalam string
        $char = $str[$i];
        if(array_key_exists($char, $charCount)){
            $charCount[$char]++;
        }else{
            $charCount[$char] = 1;
        }
    }
 $maxChar = '';
 $maxCount = 0;
 // di sini kita mencari karakter dengan frekuensi kemunculan terbanyak
foreach($charCount as $char => $count){
    if($count > $maxCount){
        $maxChar = $char;
        $maxCount = $count;
    }
}
// mengembalikan karakter dengan kemunculan terbanyak dan jumlah kemunculannya
return $maxChar . ' ' . $maxCount . 'x';
}
// di sini saya akan membuat contoh keluarannya untuk pengujian function

echo getMostFrequentChar('welcome') . PHP_EOL;
echo getMostFrequentChar('strawberry') . PHP_EOL;
// terlihat di sini bahwa e 2 kali dan r 3 kali 
?>


// sekian dari saya Marianne Wensesla, terima kasih....
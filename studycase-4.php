<?php
$randomIntegers = [];

for($i = 0; $i < 5; $i++){
    $randomIntegers[] = rand(1, 100);// menghasilkan angka random 1-100
}

function getSecondLargest($array){
    rsort($array);

    return $array[1];
}


print_r($randomIntegers);
echo "Nilai terbesar kedua: ". getSecondLargest($randomIntegers). PHP_EOL;
?>

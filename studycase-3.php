<?php
$trafficLights = ['merah', 'kuning', 'hijau'];
$currentIndex = 0; //variable index untuk melacak posisi saat ini dalam array

function getNextTrafficLight(){
    global $trafficLights, $currentIndex;

    $currentValue = $trafficLights[$currentIndex];
    $currentIndex = ($currentIndex + 1) % count($trafficLights);
    //nahh ini untuk memperbaharui index untuk pemanggilan yang berikutnya
    return $currentValue;
}
// di sini saya akan membuat pengujian function
echo getNextTrafficLight(). PHP_EOL; // merah
echo getNextTrafficLight(). PHP_EOL; // kuning
echo getNextTrafficLight(). PHP_EOL; // hijau
echo getNextTrafficLight(). PHP_EOL; // merah
echo getNextTrafficLight(). PHP_EOL; // kuning

?>

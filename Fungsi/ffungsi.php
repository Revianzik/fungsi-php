<?php

function psgPanjang($panjang, $lebar){
    $luas = $panjang * $lebar;
    return $luas;
}

function soal($soal){
    echo "pertanyaan no ". $soal. ".\n \n";
    echo "Berapakah luas persegi panjang dengan panjang 20cm dan lebar 15cm? \n \n";
    echo "Jawaban: Luas persegi panjang tersebut adalah ". psgPanjang(20, 15) ." cm2";
}

soal(1);

?>
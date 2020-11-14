<?php

function hari ( $jumlah, $indeks = 1) {

    echo "Hari ini hari ke-". $indeks ."\n";
  
    if ($indeks < $jumlah) {
    hari($jumlah, $indeks + 1);
  }

}

hari(10)

?>
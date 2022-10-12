<?php
function hitungLuasLingkaran($jari){
    $phi = 3.14;
    $luasLingkaran = $phi * $jari * $jari;
    return $luasLingkaran;
}
// Mencetak hasil hitungan 
echo hitungLuasLingkaran(5);
?>
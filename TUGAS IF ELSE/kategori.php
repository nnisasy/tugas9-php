<?php

// input variabel
$nama = 'Annisa Sumayyah';
$tb = 162;                  // tinggi badan (cm)
$bb = 55;                   // berat badan (kg)

// konversi cm ke m
$tb_m = $tb / 100;

// menghitung bmi
$bmi = $bb / ($tb_m * $tb_m);

// output yang dihasilkan 
echo "Halo, nama " . $nama . " nilai BMI anda adalah " . $bmi . ", anda termasuk ";

// menentukan kategori berat badan berdasarkan BMI
if ($bmi < 18.5) {
    echo "Kurus";
} elseif ($bmi >= 18.5 && $bmi < 25) {
    echo "Normal";
} elseif ($bmi >= 25 && $bmi <= 27) {
    echo "Gemuk";
} else {
    echo "Obesitas ";
}

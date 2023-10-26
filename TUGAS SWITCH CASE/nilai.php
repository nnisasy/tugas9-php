<?php
// input variabel
$nilai = 88;

// menampilkan output 
echo "Nilai Anda  " . $nilai . ", kategori nilai Anda adalah ";

// menentukan kategori nilai
switch (true) {
    case ($nilai >= 90 && $nilai <= 100):
        echo "A";
        break;
    case ($nilai >= 80 && $nilai < 90):
        echo "B";
        break;
    case ($nilai >= 70 && $nilai < 80):
        echo "C";
        break;
    default:
        echo "D";
        break;
}

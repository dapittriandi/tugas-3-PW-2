<?php

function tambah($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "Nilai 10 + 2 = " . tambah(10, 2)."<br>";
echo "Nilai 1 + 4 = " . tambah(1, 4)."<br>";

echo "<br>";

//percobaan function kedua
function kurang($angka1, $angka2) {
    return $angka1 - $angka2;
}

echo "Nilai 8 - 5 = " . kurang(8, 5)."<br>";
echo "Nilai 12 - 3 = " . kurang(12, 3)."<br>";

?>
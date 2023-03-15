<?php
function tambah($a, $b, $c) {
  return $a + $b + $c;
}

function kurang($a, $b, $c) {
  return $a - $b - $c;
}

function kali($a, $b, $c) {
  return $a * $b *$c;
}

function bagi($a, $b, $c) {
  if ($b == 0) {
    return "Tidak bisa dibagi dengan nol";
  } else {
    return $a / $b / $c;
  }
}

// Contoh penggunaan fungsi
$angka1 = 10;
$angka2 = 5;
$angka3 = 15;

echo "Hasil penjumlahan dari $angka1 dan $angka2 , $angka3 adalah " . tambah($angka1, $angka2, $angka3) . "<br>";
echo "Hasil pengurangan dari $angka1 dan $angka2 , $angka3 adalah " . kurang($angka1, $angka2, $angka3) . "<br>";
echo "Hasil perkalian dari $angka1 dan $angka2 , $angka3 adalah " . kali($angka1, $angka2, $angka3) . "<br>";
echo "Hasil pembagian dari $angka1 dan $angka2 , $angka3 adalah " . bagi($angka1, $angka2, $angka3) . "<br>";
?>

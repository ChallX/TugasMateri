<?php
$nilai  = 80;

if ($nilai>=90 && $nilai <=100) {
    echo "Grade A";
} elseif ($nilai >= 80 && $nilai <= 90) {
    echo "B";
}elseif ($nilai > 70 && $nilai < 80) {
    echo "C";
} else {
    echo "D";
}

?>

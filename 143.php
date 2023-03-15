<?php
if ($_SERVER ['REQUEST_METHOD'] == "POST") {
    $nama = $_POST ['nama'];
    $nis = $_POST ['nis'];
    $ray = $_POST ['rayon'];
    echo $nama;
    echo "</br>";
    echo $nis;
    echo "</br>";
    echo $ray;
}

?>
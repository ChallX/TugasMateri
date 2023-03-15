<?php
    $barang = $_GET['Barang'];
    $server = mysqli_connect("localhost","root","","deq2eq2e2q");
 
    $sql = "DELETE FROM barang WHERE Barang = '$barang'";

    $query = mysqli_query($server, $sql);
     if ($query) {
        echo "Data berhasil dihapus!";
        echo "<a href='tugas18.php'> Tampilkan Data</a>";
    } else {
        echo "Penghapusan gagal sebab : <br>".mysqli_error($server);
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>
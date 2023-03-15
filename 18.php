

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$server = mysqli_connect("localhost", "root", "","deq2eq2e2q");
?>
<?php
$sql = "SELECT * FROM barang";
$result = mysqli_query($server,$sql);
?><?php
if (mysqli_num_rows($result) > 0) {
    while ($tampil = mysqli_fetch_assoc($result)) {
        ?>
        
       <?php echo "Barang : " . $tampil ["Barang"]; 
        echo "</br>";?>
        <a href="hapus.php?Barang=<?php echo $tampil['Barang']?>">hapus</a>

  <?php  } ?>
<?php}?>

</body>
</html>
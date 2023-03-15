<?php
$server = mysqli_connect("localhost", "root", "", "projekbesar");


$User = $_POST["email"];
$Pass = $_POST["password"];

session_start();
if(isset($_SESSION['email'])) {
      header('location: 131.php');

} else {
    $sql = "SELECT * FROM `userlogin` WHERE Username = '$User' AND Passwordd = '$Pass'";
    $query = mysqli_query($server, $sql);
    $hasil = mysqli_num_rows($query);
    if ($hasil > 0) {
        $barisdata = mysqli_fetch_assoc($query);
        $_SESSION['Username'] = $barisdata['Username'];

        if ($User == $barisdata['Username']) {
          if ($Pass == $barisdata['Passwordd']) {
            echo "Set session berhasil";
          header('location: 131.php');
          }else {
            echo "Password Tidak Ditemukan!";
          }
        }else {
          echo "Username Tidak Ditemukan!";
        }
        
    }else{
      echo"<script>
      alert('Username atau Password salah input');
      location.assign('index.php?page=login');
          </script>";
    }
    

}
?>
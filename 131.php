<?php
session_start();

if(!isset($_SESSION['submit'])){
    header ("location: 20.php");
}


$email = $_POST['email'];
$pass = $_POST['pass'];

echo "Bang $email dan $pass";

?>
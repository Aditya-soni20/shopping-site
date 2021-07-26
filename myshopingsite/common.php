<?php
$username ="root";
$password ="";
$server ='localhost';
$db ='store';
    $conn = mysqli_connect($server, $username,$password,$db) or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
       
    }
?>


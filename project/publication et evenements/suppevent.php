<?php

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lrdsi";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_GET['suppid'])) {
    $num=$_GET['suppid'];

$sql="DELETE FROM `evenements` WHERE Num=$num";
$result=mysqli_query($conn,$sql);

if ($result) {
    header('location:indexadmin.php');
}else{
    die(mysqli_error($conn));
}
}
?>
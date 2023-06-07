<?php
include("connect.php");
$id = $_GET['id'];
mysqli_query($conn, "delete from `news` where id ='$id'");
header("location:consult.php");
?>
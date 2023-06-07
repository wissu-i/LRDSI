<?php
	$id=$_GET['id'];
	include('connection.php');
	mysqli_query($connexion ,"delete from `membres` where id='$id'");
	header('location:table.php');
?>
<?php
	$id=$_GET['id'];
	include('connexion.php');
	mysqli_query($connexion ,"delete from `equipe` where ide='$id'");
	header('location:table.php');
?>
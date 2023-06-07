<?php
		$responsable=$_GET['responsable'];
	include('connect.php');
	mysqli_query($conn,"delete from `projetcnepru` where responsable='$responsable'");
	header('location:adminajouter.php');
?>
<?php
	$responsable=$_GET['responsable'];
	include('connect.php');
	mysqli_query($conn,"delete from `projetnationauxrecherche` where responsable='$responsable'");
	header('location:adminajouter.php');
?>
<?php
	$responsable=$_GET['responsable'];
	include('connect.php');
	mysqli_query($conn,"delete from `projetcooperationinternationaux` where responsable='$responsable'");
	header('location:adminajouter.php');
?>
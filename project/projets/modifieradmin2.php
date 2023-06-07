<?php

session_start();
  if(!isset($_SESSION['admin']))
  {
   header("location:index.php"); 
  }
	include('connect.php');
  @$oldresponsable=$_GET['responsable'];
	$query=mysqli_query($conn,"SELECT * FROM `projetcnepru` WHERE responsable='$oldresponsable' ");
	$row=mysqli_fetch_array($query);

  @$responsable=$_GET['responsable'];
	@$année=$_POST['année'];
  @$valid = $_POST["submit"];
 
	mysqli_query($conn,"update `projetcnepru` set responsable='$responsable', année='$année' where responsable='$oldresponsable'");


  if(isset($valid3))
  {
    header('location:adminajouter.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>edit</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="modifieradmin2.php?responsable=<?php echo $row['responsable'] ?>">
		<label>responsable:</label><input type="text" value="<?php echo $row['responsable']; ?>" name="responsable">
		<label>année:</label><input type="text" value="<?php echo $row['année']; ?>" name="année">
		<input type="submit" name="submit">
		<a href="adminajouter.php">Back</a>
	</form>
</body>
</html>
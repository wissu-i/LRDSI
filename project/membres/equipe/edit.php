<?php
session_start();
  if(!isset($_SESSION['admin']))
  {
   header("location:index.php"); 
  }

	include("connexion.php");
	$id=$_GET['id'];
	$query=mysqli_query($connexion ,"select * from `equipe` where ide='$id'");
	$row=mysqli_fetch_array($query);

  @$nom=$_POST['nom'];
	@$nomc=$_POST['nomc'];
  @$domaine = $_POST['domaine'];


  @$valid = $_POST["submit"];
 
	mysqli_query($connexion ,"update `equipe` set nomEquipe='$nom', nomChef='$nomc', domaine='$domaine' where ide='$id'");


  if(isset($valid))
  {
    header('location:table.php');
  }

?>
<!DOCTYPE html>
<html>

<head>
    <title>edit</title>
</head>

<body>
    <h2>Edit</h2>
    <form method="POST" action="edit.php?id=<?php echo $id; ?>">
        <label>equipe :</label><input type="text" value="<?php echo $row['nomEquipe']; ?>" name="nom">
        <label>chef d'equipe :</label><input type="text" value="<?php echo $row['nomChef']; ?>" name="nomc">
        <label>domaine :</label><input type="text" value="<?php echo $row['domaine']; ?>"
            name=" domaine">
                
        
        <input type="submit" name="submit">
        <a href="showequip.php">Back</a>
    </form>
</body>

</html>
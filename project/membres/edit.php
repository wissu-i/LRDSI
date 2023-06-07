<?php

session_start();
  if(!isset($_SESSION['admin']))
  {
   header("location:index.php"); 
  }


	include("connection.php");
	$id=$_GET['id'];
	$query=mysqli_query($connexion ,"select * from `membres` where id='$id'");
	$row=mysqli_fetch_array($query);

  @$nom=$_POST['nom'];
	@$prenom=$_POST['prenom'];
  @$grade = $_POST['grade'];
  @$email = $_POST['email'];


  @$valid = $_POST["submit"];
 
	mysqli_query($connexion ,"update `membres` set nom='$nom', prenom='$prenom', grade='$grade',email='$email' where id='$id'");


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
        <label>nom:</label><input type="text" value="<?php echo $row['nom']; ?>" name="nom">
        <label>prenom:</label><input type="text" value="<?php echo $row['prenom']; ?>" name="prenom">
        <label>grade:</label><input type="text" value="<?php echo $row['grade']; ?>"
            name=" grade">
            <label>email:</label><input type="text" value="<?php echo $row['email']; ?>"
            name="email">
                
        
        <input type="submit" name="submit">
        <a href="loginmember.php">Back</a>
    </form>
</body>

</html>
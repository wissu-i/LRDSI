<?php

session_start();
  if(!isset($_SESSION['admin']))
  {
   header("location:index.php"); 
  }


	include("connect.php");
	$id=$_GET['id'];
	$query=mysqli_query($conn ,"select * from `news` where id='$id'");
	$row=mysqli_fetch_array($query);

  @$nom=$_POST['title'];
	@$content=$_POST['content'];
  @$date = $_POST['datep'];


  @$valid = $_POST["submit"];
 
	mysqli_query($conn ,"update `news` set title='$nom', content='$content', datep='$date' where id='$id'");


  if(isset($valid))
  {
    header('location:consult.php');
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
        <label>tile:</label><input type="text" value="<?php echo $row['title']; ?>" name="title">
        <label>content:</label><input type="text" value="<?php echo $row['content']; ?>" name="content">
        <label>date:</label><input type="text" value="<?php echo $row['datep']; ?>"
            name="datep">
                
        
        <input type="submit" name="submit">
        <a href="consult.php">Back</a>
    </form>
</body>

</html>
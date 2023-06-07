<?php
 include('connection.php');
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $grade=$_POST['grade'];
  $email=$_POST['email'];
  $ide=$_POST['ide'];
 
  mysqli_query($connexion,"insert into `membres` (nom,prenom,grade,email,ide) values ('$nom','$prenom','$grade','$email','$ide')");
  header('location:loginmember.php');
 


?>
 

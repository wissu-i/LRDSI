<?php
 include('connexion.php');
  $nom=$_POST['nome'];
  $nomc=$_POST['nomc'];
  $domain=$_POST['domain'];
  
  mysqli_query($connexion,"insert into `equipe` (nomEquipe, nomChef,domaine) values ('$nom','$nomc','$domain')");
  header('location:add.php');
 


?>
<?php
 include('connect.php');
  $titre=$_POST['titre'];
  $content=$_POST['cotent'];
  $date=$_POST['date'];
 
  mysqli_query($conn,"insert into `news` (title,content,datep) values ('$titre','$content','$date')");
  header('location:ajouter.php');
 


?>
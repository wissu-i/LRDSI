<?php

session_start();
  if(!isset($_SESSION['admin']))
  {
   header("location:index.php"); 
  }

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lrdsi";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (isset($_POST['ajout'])) {
    $num=$_POST['num'];
    $titre=$_POST['titre'];
    $date=$_POST['date'];
    $journal=$_POST['journal'];
    $auth=$_POST['auth'];
    $src=$_POST['src'];

$sql="INSERT INTO `publications internationales`(`Num`, `Titre`, `Date`, `Journal`, `Autheurs`, `Source`)
 VALUES ('$num','$titre','$date','$journal','$auth','$src')";
$result=mysqli_query($conn,$sql);

if ($result) {
    header('location:indexadmin.php');
}else{
    die(mysqli_error($conn));
}
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajout</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../homepage/navbar.css">
    <link rel="stylesheet" href="../homepage/searchbar.css">
    <!--BOOTSTRAP-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- MDB -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet"/>
    
  </head>
  <body>
    <!--BOOTSTRAP-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- MDB -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>

    <!--navbar-->
    <div class="nav_bar">
    <img src="../homepage/LOGO2-S.png" alt="logo" class="logo_image"> 
          <input type="checkbox" class="toggler">
           <div class="burger">
            <div></div>
           </div>

            <div class="search-container">
            <input type="text" id="search-input" placeholder="Search...">
            <button type="button" id="search-button"><i class="fas fa-search"></i>Search</button>
            </div>

              <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
              <script>
                 document.getElementById('search-button').addEventListener('click', function() {
                 var searchQuery = document.getElementById('search-input').value;
                 if (searchQuery.trim() !== '') {
                   // Perform search or redirect to search results page
                   // Here, you can add your own logic for performing the search or redirecting to the search results page
                   alert('Performing search for: ' + searchQuery);
               }
                });
              </script>

          <div class="list">
              <ul>
                <li> <a href=""> <div>Accueil </div></a> </li>
                <li> <a href="../projets/miniproject.php"> <div>Projets </div></a> </li>
                <li> <a href="../publication et evenements/index.php"> <div id="exception">Publications et <br> Evènements</div></a> </li>
                <li> <a href="../membres/membre.php"> <div>Membres </div></a></li>
                <li> <a href="#contact"> <div>Contact </div></a> </li>
              </ul>
            </div>
        </div>
<br><br>
<div class="container" style="margin-top:100px">

 <!--Publications internationales-->
<form method="post">
  <!-- num input -->
  <div class="form-outline mb-4">
    <input type="number" id="num" name="num" class="form-control" />
    <label class="form-label" for="num" style="color:#3b074e">Num</label>
  </div>

  <!-- Titre input -->
  <div class="form-outline mb-4">
    <input type="text" id="titre" name="titre" class="form-control" />
    <label class="form-label" for="titre" style="color:#3b074e">Titre</label>
  </div>

  <!-- Date input -->
  <div class="form-outline mb-4">
    <input type="date" id="date" name="date" class="form-control" />
    <label class="form-label" for="date" style="color:#3b074e">Date</label>
  </div>

  <!-- Journal input -->
  <div class="form-outline mb-4">
    <input type="text" id="journal" name="journal" class="form-control" />
    <label class="form-label" for="journal" style="color:#3b074e">Journal</label>
  </div>

  <!-- Autheurs input -->
  <div class="form-outline mb-4">
    <input type="text" id="auth" name="auth" class="form-control" />
    <label class="form-label" for="auth" style="color:#3b074e">Autheurs</label>
  </div>

  <!-- Source input -->
  <div class="form-outline mb-4">
    <input type="url" id="src" name="src" class="form-control" />
    <label class="form-label" for="src" style="color:#3b074e">Source</label>
  </div>

  <!-- Submit button -->
  <button type="submit" name="ajout" class="btn btn-warning btn-block">Ajouter</button>
</form>






  </div>
  </body>
</html>
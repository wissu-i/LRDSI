<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header("location:index.php"); 
}

include ('connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../homepage/navbar.css">
    <link rel="stylesheet" href="../homepage/searchbar.css">
    <title>Admin Page</title>
  </head>
  <body>

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
<div style="margin-top:150px;">
    <div class ="container my-4">
  <table class="table">
  <thead>
    <tr>
      <th >responsable</th>
      <th >année</th>
      
    </tr>
   
  </thead>
  <tbody>
    <?php
    echo"projetnationauxrecherche";
    include ('connect.php');
    $query=mysqli_query($conn,"select * from `projetnationauxrecherche`");
    while($row=mysqli_fetch_array($query)){
      ?>
      <tr>
       <td><?php echo $row['responsable']; ?></td>
        <td><?php echo $row['année']; ?></td>
        <td>
        <button class="btn btn-primary my-5"  ><a href="deleteadmin.php?responsable=<?php echo $row['responsable']; ?>" class="text-light">supprimer</a></button>
        <button class="btn btn-primary my-5"><a href="modifieradmin1.php?responsable=<?php echo $row['responsable']; ?>" class="text-light">modifier</a></button>
        <button class="btn btn-primary my-5"><a href="formadd2.php?responsable=<?php echo $row['responsable']; ?>" class="text-light">ajouter</a></button>
        </td>
  
      </tr>
      
      <?php
    }
  ?>
   
  </tbody>
</table>
<div class ="container my-4">
  <table class="table">
  <thead>
    <tr>
      <th >responsable</th>
      <th >année</th>
    </tr>
   
  </thead>
  <tbody>
    <?php
    echo"projetcnepru";
    include ('connect.php');
    $query=mysqli_query($conn,"select * from `projetcnepru`");
    while($row=mysqli_fetch_array($query)){
      ?>
      <tr>
       <td><?php echo $row['responsable']; ?></td>
        <td><?php echo $row['année']; ?></td>
        <td>
        <button class="btn btn-primary my-5"><a href="deleteadmin.php?responsable=<?php echo $row['responsable']; ?>" class="text-light" >supprimer</a></button>
        <button class="btn btn-primary my-5"><a href="modifieradmin2.php?responsable=<?php echo $row['responsable']; ?>" class="text-light">modifier</a></button>
        <button class="btn btn-primary my-5"><a href="formadd1.php?responsable=<?php echo $row['responsable']; ?>" class="text-light">ajouter</a></button>
  
        </td>
  
      </tr>
      
      <?php
    }
  ?>
   
  </tbody>
</table>
<div class ="container my-4">
  <table class="table">
  <thead>
    <tr>
      <th >responsable</th>
      <th >année</th>
    </tr>
   
  </thead>
  <tbody>
    <?php
    echo"projetcooperationinternationaux";
    include ('connect.php');
    $query=mysqli_query($conn,"select * from `projetcooperationinternationaux`");
    while($row=mysqli_fetch_array($query)){
      ?>
      <tr>
       <td><?php echo $row['responsable']; ?></td>
        <td><?php echo $row['année']; ?></td>
        <td>
        <button class="btn btn-primary my-5"><a href="deleteadmin.php?responsable=<?php echo $row['responsable']; ?>" class="text-light">supprimer</a></button>
        <button class="btn btn-primary my-5"><a href="modifieradmin3.php?responsable=<?php echo $row['responsable']; ?>" class="text-light">modifier</a></button>
        <button class="btn btn-primary my-5"><a href="formadd3.php?responsable=<?php echo $row['responsable']; ?>" class="text-light">ajouter</a></button>
        </td>
  
      </tr>
      
      <?php
    }
  ?>
   
  </tbody>
</table>

    </div>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</div>
  </body>
</html>
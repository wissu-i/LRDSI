<?php
session_start();
  if(!isset($_SESSION['admin']))
  {
   header("location:index.php"); 
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../searchbar.css">
    


</head>
<style>
    /* Pour colorer une colonne */


/* Pour colorer une colonne */
.table th:nth-child(n) {
    background-color: black; /* Couleur de fond de la colonne */
    color: #ffffff; /* Couleur du texte dans la colonne */
}

/* Pour colorer une ligne */
.table tr:nth-child(n) {
    /*background-color: ; /* Couleur de fond de la ligne */
    color: #000000; /* Couleur du texte dans la ligne */
}
td a {
    background-color: blue; /* Couleur de fond de la cellule */
    color: #ffffff; /* Couleur du texte dans la cellule */
    padding: 5px; /* Ajoute un espace autour du contenu de la cellule */
}
</style>


<body>

<div class="nav_bar">
    <img src="../LOGO2-S.png" alt="logo" class="logo_image"> 
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
                <li> <a href="../../projets/miniproject.php"> <div>Projets </div></a> </li>
                <li> <a href="../../publication et evenements/index.php"> <div id="exception">Publications et <br> Evènements</div></a> </li>
                <li> <a href="../../membres/membre.php"> <div>Membres </div></a></li>
                <li> <a href="#contact"> <div>Contact </div></a> </li>
              </ul>
            </div>
<div style="margin-top:150px;">

    <table class="table">
        <thead>
            <tr>

                <th>titre</th>
                <th>content</th>
                <th>date</th>
                <th></th>
            </tr>
        </thead>
        <?php
  include("connect.php");
  $query=mysqli_query($conn,"select * from  `news`");
  while($row=mysqli_fetch_array($query)){
    ?>
        <tr>

            <td><?php echo $row['title'];?></td>
            <td><?php echo $row['content'];?></td>
            <td><?php echo $row['datep'];?></td>

            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php
  }
  ?>
    </table>
</div>
</body>

</html>
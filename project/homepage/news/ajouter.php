<?php
session_start();
  if(!isset($_SESSION['admin']))
  {
   header("location:index.php"); 
  }
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../membres/style.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="../searchbar.css">
    <title>news</title>
</head>

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
    <h1>news</h1>
    <?php if (isset($message)) { echo "<p>$message</p>"; } ?>
    <form method="post" action="ajou.php">
        <label for="titre">titre :</label>
        <input type="text" name="titre" required><br><br>
        <label for="content">content :</label>
        <input type="text" name="content" required><br><br>
        <label for="date">date :</label>
        <input type="date" name="date" required><br><br>
        
        <input type="submit" value="envoyer" nom="submit">
        <button><a href="consult.php">back</a></button>
    </form>
</div>
</body>

</html>
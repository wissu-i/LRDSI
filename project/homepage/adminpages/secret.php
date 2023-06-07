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
  <link rel="stylesheet" href="../navbar.css">
  <link rel="stylesheet" href="../searchbar.css">
  <title>Document</title>
  <style>

    body{
			background-color: #f2ceff;
    }

    .container{
      position: relative;
      background-color: violet;
      border-radius: 10px;
      height: 190vh;
      width: 120vh;
      margin: auto;
      text-align: center;
    }

    h1{
      border-bottom: 3px solid rgb(59, 7, 78);
      margin-bottom: 10px;
    }

    h2{
      margin-bottom: 10px;
      background-color: rgb(59, 7, 78);
      color: white;
      margin-bottom: 20px;
    }

    h3{
      margin-bottom: 10px;
    }

    a{
      color: white;
    }

    button{
      background-color: rgb(59, 7, 78);
      border-radius: 20px;
      padding: 15px;
      border:none;
    }

    button:hover{
      background-color: orange;
    }

    a:hover{
      background-color: #f2ceff;
    }

    li{
      margin-bottom: 40px;
    }

    .disc{
      position: absolute;
      border: none;
      border-radius: 30px;
      float: left;
      left: 60px;
      padding: 20px;
      background-color: rgb(59, 7, 78);
      transition: box-shadow 0.15s;
    }

    .disc:hover{
      box-shadow: 5px 5px 10px rgba(127, 54, 151, 0.981);
    }

    .disc:active{
      margin-top: 3px;
      margin-left: 7px;
      box-shadow: none;
    }
    </style>
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
                <li> <a href="../index.php"> <div>Accueil </div></a> </li>
                <li> <a href="../../projets/miniproject.php"> <div>Projets </div></a> </li>
                <li> <a href="../../publication et evenements/index.php"> <div id="exception">Publications et <br> Evènements</div></a> </li>
                <li> <a href="../../membres/membre.php"> <div>Membres </div></a></li>
                <li> <a href="#contact"> <div>Contact </div></a> </li>
              </ul>
            </div>
        </div>

        <button class="disc"><a href="disconnect.php"> deconnexion</a></button>


        <div class="container" style="margin-top:150px;">
            <h1> Les Pages de consultation:</h1>
            <ul>
              <li><h2>home page:</h2>
                  <ul>
                    <h3>news</h3>
                    <li><button><a href="../news/consult.php">consultaion</a></button> </li>
                    <li><button><a href="../news/ajouter.php">ajouter</a></button> </li>
                  </ul>
            </li>
              <li><h2>equipe:</h2>
              <ul>
                <li><button><a href="../../membres/equipe/table.php"> consultaion </a></button></li>
                <li><button><a href="../../membres/equipe/add.php"> ajouter </a></button></li>
              </ul>
              <li><h2>membres:</h2>
              <ul>
                <li><button><a href="../../membres/table.php"> consultaion </a></button></li>
                <li><button><a href="../../membres/loginmember.php"> ajouter </a></button></li>
              </ul>
            </li>

            <li><h2>projets:</h2>
              <ul>
                <li><button><a href="../../projets/adminajouter.php"> consultaion </a></button></li>
              </ul>
              </li>

              <li><h2>publication et evenements :</h2>
              <ul>
                <li><button><a href="../../publication et evenements/indexadmin.php"> consultation </a></button></li>
                <li><button><a href="../../publication et evenements/ajoutevent.php"> ajouter evenement </a></button></li>
                <li><button><a href="../../publication et evenements/ajoutpub.php"> ajouter publication</a></button></li>
                <li><button><a href="../../publication et evenements/mdf.php"> Moidfier publication internationale</a></button></li>
                <li><button><a href="../../publication et evenements/mdfevent.php"> Modifier evenement scientifique</a></button></li>
              </ul>
            </ul>

            
        </div>
</body>
</html>
<?php

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lrdsi";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql1="SELECT * FROM `publications internationales`";
$result1 = mysqli_query($conn, $sql1);

$sql2="SELECT * FROM `publications nationales`";
$result2 = mysqli_query($conn, $sql2);

$sql3 ="SELECT * FROM `communications internationales`";
$result3 = mysqli_query($conn, $sql3);

$sql4 ="SELECT * FROM `communications nationales`";
$result4 = mysqli_query($conn, $sql4);

$sql5 ="SELECT * FROM `theses`";
$result5 = mysqli_query($conn, $sql5);

$sql6 ="SELECT * FROM `memoires magister`";
$result6 = mysqli_query($conn, $sql6);

$sql7 ="SELECT * FROM `memoires de master`";
$result7 = mysqli_query($conn, $sql7);

$sql8 ="SELECT * FROM `evenements`";
$result8 = mysqli_query($conn, $sql8);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Publications et Evènements</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../homepage/navbar.css">
    <link rel="stylesheet" href="../homepage/searchbar.css">
    <link rel="stylesheet" href="../homepage/searchbar.css">
    <link rel="stylesheet" href="footer.css">
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
                <li> <a href="../homepage/index.php"> <div>Accueil </div></a> </li>
                <li> <a href="../projets/miniproject.php"> <div>Projets </div></a> </li>
                <li> <a href="../publication et evenements/index.php"> <div id="exception">Publications et <br> Evènements</div></a> </li>
                <li> <a href="../membres/membre.php"> <div>Membres </div></a></li>
                <li> <a href="#contact"> <div>Contact </div></a> </li>
              </ul>
            </div>
        </div>
<br><br>
<div class="container">
  <div class="wrapper">
    <div class="fixed-part">
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="Publish article-pana.png" class="card-img-top" alt="article"/>
        <div class="card-body">
          <h4 class="card-title"><a href="#Publications_et_communication" class="card-title">Publications et communication</a></h4>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Thesis-amico.png" class="card-img-top" alt="these"/>
        <div class="card-body">
          <h4 class="card-title"><a href="#Thèses_et_mémoires" class="card-title">Thèses et mémoires</a></h4>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="Seminar-amico.png" class="card-img-top" alt="event"/>
        <div class="card-body">
          <h4 class="card-title"><a href="#Evènements_scientifiques" class="card-title">Evènements scientifiques</a></h4>
        </div>
      </div>
    </div>
  </div>
  </div>


  <br><br><br><br><br><br><br><br><br><br><br>
  <div class="scrollable-part">
<!--Publications-->
  <table class="table caption-top table-hover border-warning table-sm table-responsive" id="Publications_et_communication">
  <caption><a href="#"><h3 style="color:#3b074e"><i class="bi bi-file-earmark-text"></i> Publications internationales</h3></a></caption>
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-chat-square-text"></i> Titre</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-calendar2-week"></i> Date</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-globe2"></i> Journal</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Autheurs</h5></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php while($row1= mysqli_fetch_assoc($result1)) { ?>
  <tbody>
    <tr>
      <th scope="row"><h5 style="color:#3b074e"><?php echo $row1['Num']; ?></h5></th>
      <td><?php echo $row1['Titre']; ?></td>
      <td><?php echo $row1['Date']; ?></td>
      <td><?php echo $row1['Journal']; ?></td>
      <td><?php echo $row1['Autheurs']; ?></td>
      <td>
      <a class="btn btn-warning btn-sm w-30" href="<?php echo $row1['Source']; ?>" role="button" data-ripple-color="#3b074e">Plus d'infos</a></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>

<br>
<!--Publications-->
<table class="table caption-top table-hover border-warning table-sm table-responsive">
  <caption><a href="#"><h3 style="color:#3b074e"><i class="bi bi-file-earmark-text"></i> Publications nationales</h3></a></caption>
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-chat-square-text"></i> Titre</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-calendar2-week"></i> Date</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-globe2"></i> Journal</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Autheurs</h5></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php while($row2= mysqli_fetch_assoc($result2)) { ?>
  <tbody>
    <tr>
      <th scope="row"><h5 style="color:#3b074e"><?php echo $row2['Num']; ?></h5></th>
      <td><?php echo $row2['Titre']; ?></td>
      <td><?php echo $row2['Date']; ?></td>
      <td><?php echo $row2['Journal']; ?></td>
      <td><?php echo $row2['Autheurs']; ?></td>
      <td>
      <a class="btn btn-warning btn-sm w-30" href="<?php echo $row2['Source']; ?>" role="button" data-ripple-color="#3b074e">Plus d'infos</a></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>

<br>
<!--Communications-->
<table class="table caption-top table-hover border-warning table-sm table-responsive">
  <caption><a href="#"><h3 style="color:#3b074e"><i class="bi bi-file-earmark-text"></i> Communications internationales</h3></a></caption>
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-chat-square-text"></i> Titre</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-calendar2-week"></i> Date</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-globe2"></i> Conférence</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Autheurs</h5></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php while($row3= mysqli_fetch_assoc($result3)) { ?>
  <tbody>
    <tr>
      <th scope="row"><h5 style="color:#3b074e"><?php echo $row3['Num']; ?></h5></th>
      <td><?php echo $row3['Titre']; ?></td>
      <td><?php echo $row3['Date']; ?></td>
      <td><?php echo $row3['Conference']; ?></td>
      <td><?php echo $row3['Autheurs']; ?></td>
      <td>
      <a class="btn btn-warning btn-sm w-30" href="<?php echo $row3['Source']; ?>" role="button" data-ripple-color="#3b074e">Plus d'infos</a></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>

<br>
<!--Communications-->
<table class="table caption-top table-hover border-warning table-sm table-responsive">
  <caption><a href="#"><h3 style="color:#3b074e"><i class="bi bi-file-earmark-text"></i> Communications nationales</h3></a></caption>
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-chat-square-text"></i> Titre</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-calendar2-week"></i> Date</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-globe2"></i> Conférence</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Autheurs</h5></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php while($row4= mysqli_fetch_assoc($result4)) { ?>
  <tbody>
    <tr>
      <th scope="row"><h5 style="color:#3b074e"><?php echo $row4['Num']; ?></h5></th>
      <td><?php echo $row4['Titre']; ?></td>
      <td><?php echo $row4['Date']; ?></td>
      <td><?php echo $row4['Conference']; ?></td>
      <td><?php echo $row4['Autheurs']; ?></td>
      <td>
      <a class="btn btn-warning btn-sm w-30" href="<?php echo $row4['Source']; ?>" role="button" data-ripple-color="#3b074e">Plus d'infos</a></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>

<br>
<!--Thèses-->
<table class="table caption-top table-hover border-warning table-sm table-responsive" id="Thèses_et_mémoires">
  <caption><a href="#"><h3 style="color:#3b074e" ><i class="bi bi-file-earmark-text"></i> Thèses de doctorat</h3></a></caption>
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-chat-square-text"></i> Titre</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Nom et Prénom</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Directeur(s) de thèse</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-calendar2-week"></i> Date de soutenance</h5></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php while($row5= mysqli_fetch_assoc($result5)) { ?>
  <tbody>
    <tr>
      <th scope="row"><h5 style="color:#3b074e"><?php echo $row5['Num']; ?></h5></th>
      <td><?php echo $row5['Titre']; ?></td>
      <td><?php echo $row5['Nom et Prenom']; ?></td>
      <td><?php echo $row5['Directeur(s) de these']; ?></td>
      <td><?php echo $row5['Date de soutenance']; ?></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>
<br>
<!--Mémoires magister-->
<table class="table caption-top table-hover border-warning table-sm table-responsive">
  <caption><a href="#"><h3 style="color:#3b074e"><i class="bi bi-file-earmark-text"></i> Mémoires de magister</h3></a></caption>
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-chat-square-text"></i> Titre</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Candidat</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Encadreur(s)</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-calendar2-week"></i> Date de soutenance</h5></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php while($row6= mysqli_fetch_assoc($result6)) { ?>
  <tbody>
    <tr>
      <th scope="row"><h5 style="color:#3b074e"><?php echo $row6['Num']; ?></h5></th>
      <td><?php echo $row6['Titre']; ?></td>
      <td><?php echo $row6['Candidat']; ?></td>
      <td><?php echo $row6['Encadreurs']; ?></td>
      <td><?php echo $row6['Date de soutenance']; ?></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>

<br>
<!--Mémoires master-->
<table class="table caption-top table-hover border-warning table-sm table-responsive">
  <caption><a href="#"><h3 style="color:#3b074e"><i class="bi bi-file-earmark-text"></i> Mémoires de master</h3></a></caption>
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-chat-square-text"></i> Titre</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Candidat</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Encadreur(s)</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-calendar2-week"></i> Date de soutenance</h5></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php while($row7= mysqli_fetch_assoc($result7)) { ?>
  <tbody>
    <tr>
      <th scope="row"><h5 style="color:#3b074e"><?php echo $row7['Num']; ?></h5></th>
      <td><?php echo $row7['Titre']; ?></td>
      <td><?php echo $row7['Candidat']; ?></td>
      <td><?php echo $row7['Encadreurs']; ?></td>
      <td><?php echo $row7['Date de soutenance']; ?></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>

<br>
<!--evenements-->
<table class="table caption-top table-hover border-warning table-sm table-responsive" id="Evènements_scientifiques">
  <caption><a href="#"><h3 style="color:#3b074e" ><i class="bi bi-file-earmark-text"></i> Evènements scientifiques</h3></a></caption>
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-chat-square-text"></i> Titre</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-person-fill"></i> Type</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-geo-alt-fill"></i> Lieu</h5></th>
      <th scope="col"><h5 style="color:#3b074e"><i class="bi bi-calendar2-week"></i> Date</h5></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php while($row8= mysqli_fetch_assoc($result8)) { ?>
  <tbody>
    <tr>
      <th scope="row"><h5 style="color:#3b074e"><?php echo $row8['Num']; ?></h5></th>
      <td><?php echo $row8['Titre']; ?></td>
      <td><?php echo $row8['Type']; ?></td>
      <td><?php echo $row8['Lieu']; ?></td>
      <td><?php echo $row8['Date']; ?></td>
    </tr>
    
    <?php } ?>
  </tbody>
</table>
  </div>
  </div>
  </div>

  </body>
</html>


<?php
mysqli_close($conn); // Fermer la connexion à la base de données
?>
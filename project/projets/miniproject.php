<!doctype html>
<html>
<head>
<title>miniproject</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>exercice1</title>
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="footer.css">
 <link rel="stylesheet" href="../homepage/navbar.css">
 <link rel="stylesheet" href="../homepage/searchbar.css">

 <style>


    .searchbar-container{
        margin-left: -50vh;
    }
    </style>
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
								<li> <a href="../homepage/index.php"> <div>Accueil </div></a> </li>
								<li> <a href="#"> <div>Projets </div></a> </li>
								<li> <a href="../publication et evenements/index.php"> <div id="exception">Publications et <br> Evènements</div></a> </li>
								<li> <a href="../membres/membre.php"> <div>Membres </div></a></li>
								<li> <a href="#contact"> <div>Contact </div></a> </li>
							</ul>
						</div>
				</div>
  <div class ="typewriter-container">
    <div class = "typewriter">
      <p>Welcome To Recherche/Projects</p>
    </div>
  
    </div>
  
    <div class = "select">
<select class="hello" >
    <option  value="ALL">ALL</option>
    <option value ="Projet Nationaux De Recherche (PNR)">Projet Nationaux De Recherche (PNR)</option>
    <option   value="Projet Cenpru">Projet Cenpru</option>
    <option  value="Projet De Coopération National">Projet De Coopération National</option>
  </select>
    </div> 
    <br>
    
    <p class ="To">Le LRDSI est impliqué dans de nombreux projets de recherche sur le plan national et international :</p>
    <br>
    <br>
    <br>
    

    
    <div class ="hi">
      <br>
      <br>
      <br>
      <div class="box1" style="border: 1px solid;" style="color: black;">projet nationale PNR
      <br>
      <br>
      <br>
      
      <br><br>
        <?php
           include "connect.php";
           


           $sql = "SELECT * FROM projetnationauxrecherche";
        $result = mysqli_query($conn, $sql);

        // Display data in div element
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div> " . $row["responsable"] . "</div> <br><br><br>";
                echo "<div> " . $row["année"] . "</div>";
            }
        } else {
            echo "0 results";
        }

        // Close connection
        mysqli_close($conn);
    ?>

     </div>
      <br>
      <br><div class="box2"  style="border: 1px solid;">Projet Cenpru<br><br>
      <?php
           include "connect.php";
           


           $sql = "SELECT * FROM projetcnepru";
           $result = mysqli_query($conn, $sql);

        // Display data in div element
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div> " . $row["responsable"] . "</div> <br>";
                echo "<div> " . $row["année"] . "</div> <br><br>";
            }
        } else {
            echo "0 results";
        }

        // Close connection
        mysqli_close($conn);
    ?>

    
    
    </div>
      <br>
      <br><div class="box3"  style="border: 1px solid;">Projet De Coopération National<br><br>
      <?php
           include "connect.php";
           


           $sql = "SELECT * FROM projetcooperationinternationaux";
           $result = mysqli_query($conn, $sql);

        // Display data in div element
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div> " . $row["responsable"] . "</div> ";
                echo "<div> " . $row["année"] . "</div><br><br> ";
            }
        } else {
            echo "0 results";
        }

        // Close connection
        mysqli_close($conn);
    ?>
    </div>
    </div>
  </div>

  <footer id="contact">
        <div class="footer_content">
            <h1 style="color: #fff;">contact </h1>
        <p style="color: #fff;">tel +213 025 27 24 36</p>
        <p style="color: #fff;"> BP270 Route de soumaa 09100-Blida Algerie</p>
        <p style="color: #fff;">email lrdsi@univ-blida.dz</p>
        <ul class="socials">
            <li><a href="#" ><i class="fa fa-phone" aria-hidden="true" ></i></a></li>
            
            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
            <br><br>
            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true" ></i></a></li>
            

        </ul>
        </div>
        <div class="footer-bottom" >
            <p style="color: #fff;"> LABORATOIRE DE RECHERCHE POUR LE DEVELOPEMENT DES SYSTEMES  <span>Informatique</span>  </p>
        </div>
    </footer>

</body> 

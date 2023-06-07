
<!DOCTYPE html>
<html>
<head>
	<title>Startup Research Laboratory - Members</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../homepage/footer.css" rel="stylesheet">
	<link href="../homepage/navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="../homepage/searchbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="cards.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <script src="https://kit.fontawesome.com/ffc5011055.js" crossorigin="anonymous"></script>

		<script>
    function goToSection() {
      var selectElement = document.getElementById("sectionSelect");
      var selectedOption = selectElement.options[selectElement.selectedIndex];
      var selectedValue = selectedOption.value;

      if (selectedValue) {
        window.location.href = selectedValue;
      }
    }
  </script>

	<style>
		body {
	/*	font-family: 'Open Sans', sans-serif;*/
			margin: 0;
			padding: 0;
			background-color: rgb(236, 231, 238);
		}

		footer{
			bottom: -800vh;
		}

		header {
			background-color: rgb(83, 14, 104);
			color: #fff;
			padding: 10px;
			text-align: center;
			box-shadow: 0 2px 5px rgba(227, 144, 235, 0.5);
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 999;
		}

		h1 {
			margin: 0;
			padding: 10px;
			font-weight: 600;
		}

		.container {
			margin: 80px auto;
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
		}

		.card {
			/*background-color: #fff;*/
			background-color: #f2ceff;
			box-shadow: 0 4px 8px 0 rgba(160, 15, 173, 0.2);
			margin: 20px;
			padding: 15px;
			text-align: center;
			transition: transform 0.3s;
			border-radius: 10px;
			position: relative;
			overflow: hidden;
			border: 1px solid #ccc;
			width: 150px;
		}

		#members{
			float: left;
			width: 200px;
			height: 100px;
		}

		#doctorant{
			float: right;
			clear: left;
			width: 200px;
			height: 100px;
		}

		.card:hover {
			transform: translateY(-10px);
			box-shadow: 0 6px 12px 0 rgba(140, 19, 145, 0.3);
		}
		.card img {
			max-width: 100%;
			height: auto;
			margin-bottom: 20px;
			border-radius: 50%;
			object-fit: cover;
			object-position: center;
		}
		.card h2 {
			margin: 0;
			padding: 0;
			font-size: 22px;
			font-weight: 600;
		}
		.card p {
			margin: 5px 0;
			padding: 0;
			font-size: 16px;
			font-weight: 400;
			color: #666;
		}
		.card:before {
			content: "";
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 1));
			z-index: 2;
			opacity: 0;
			transition: opacity 0.3s;
		}
		.card:hover:before {
			opacity: 1;
		}
		.card:hover .social-links {
			bottom: 20px;
		}
		.card .social-links {
			position: absolute;
			bottom: -100px;
			left: 0;
			right: 0;
			margin: 0 auto;
			z-index: 3;
        }

    .social-links a {       
		display: inline-block;
		width: 30px;
		height: 30px;
		margin: 0 5px;
		background-color: #333;
		color: #fff;
		line-height: 30px;
		border-radius: 50%;
		transition: transform 0.3s;
		text-align: center;
		font-size: 18px;
		text-decoration: none;
		border: 1px solid #fff;
		}
		.social-links a:hover {
		transform: translateY(-10px);
		box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.3);
		}
		.social-links a i {
		display: inline-block;
		transform: translateY(-1px);
		}
		@media screen and (max-width: 768px) {
		.container {
		margin-top: 120px;
		}
		.card {
		width: 90%;
		}
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
												<li> <a href="../projets/miniproject.php"> <div>Projets </div></a> </li>
												<li> <a href="../publication et evenements/index.php"> <div id="exception">Publications et <br> Evènements</div></a> </li>
												<li> <a href="../membres/membre.php"> <div>Membres </div></a></li>
												<li> <a href="#contact"> <div>Contact </div></a> </li>
											</ul>
										</div>
				</div>

				<div class="membre-equipe">
									<script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
					<lord-icon
							src="https://cdn.lordicon.com/uukerzzv.json"
							trigger="hover"
							colors="primary:#ee8f66,secondary:#c69cf4"
							style="width:90px;height:90px;float:left">
					</lord-icon>
					<h1> Equipes/Membres </h1>
				</div>


				<?php
						include('equipe/connexion.php');
								$query=mysqli_query($connexion,"select * from `equipe`");
								while($row=mysqli_fetch_array($query)){
									?>
									<div class="equipe">
									<h1> <?php echo $row['domaine'];?>: <?php echo $row['nomEquipe'];?> </h1>
									<h2>Chef d’équipe:</h2>

											<div class="card">
												<h2><?php echo $row['nomChef'];?></h2>
												<p><?php echo $row['domaine'];?></p>
												<div class="social-links">
													<a href="#" target="_blank"> <i class="fa-brands fa-twitter" style="color: #328fbd;"></i></a>
													<a href="#" target="_blank"><i class="fa-brands fa-facebook" style="color: #0959e1;"></i></a>
													<a href="#" target="_blank"><i class="fa-brands fa-linkedin" style="color: #3ca0d3;"></i></a>
												</div>
											</div>

											<h2> Membres: </h2>

											<?php
													$id = $row['ide']; 
													$query2 = mysqli_query($connexion, "select membres.* from membres where membres.ide = '$id' and grade != 'doctorant'");
											
											while($row2 = mysqli_fetch_array($query2)){
												?>
												<div class="card" id="members">
												<h2><?php echo $row2['nom'];
																	echo " ".$row2['prenom'];?> </h2>
												<p><?php echo $row2['grade'];?></p>
												<p><?php echo $row2['email'];?></p>
												<div class="social-links">
													<a href="#" target="_blank"> <i class="fa-brands fa-twitter" style="color: #328fbd;"></i></a>
													<a href="#" target="_blank"><i class="fa-brands fa-facebook" style="color: #0959e1;"></i></a>
													<a href="#" target="_blank"><i class="fa-brands fa-linkedin" style="color: #3ca0d3;"></i></a>
												</div>
											</div>
											<?php } ?>


										
											<h2 id="docs"> Doctorants: </h2>

											<?php
													$id1 = $row['ide']; 
													$query3 = mysqli_query($connexion, "select membres.* from membres where membres.ide = '$id' and grade = 'doctorant'");
											
											while($row3 = mysqli_fetch_array($query3)){
												?>
												<div class="card" id="doctorant">
												<h2><?php echo $row3['nom'];
																	echo " ".$row3['prenom'];?> </h2>
												<p><?php echo $row3['grade'];?></p>
												<div class="social-links">
													<a href="#" target="_blank"> <i class="fa-brands fa-twitter" style="color: #328fbd;"></i></a>
													<a href="#" target="_blank"><i class="fa-brands fa-facebook" style="color: #0959e1;"></i></a>
													<a href="#" target="_blank"><i class="fa-brands fa-linkedin" style="color: #3ca0d3;"></i></a>
												</div>
											</div>
											<?php } ?>
									</div>


									<?php
								}
							?>

	<footer id="contact">
        <div class="footer_content">
				<h1 style="color: #fff;">contact </h1>
        <p style="color: #fff;">tel +213 025 27 24 36</p>
        <p style="color: #fff;"> BP270 Route de soumaa 09100-Blida Algerie</p>
        <p style="color: #fff;">email lrdsi@univ-blida.dz</p>
        <ul class="socials">
            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
            
            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
            <br><br>
            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true" ></i></a></li>
            

        </ul>
        </div>
        <div class="footer-bottom">
            <p> LABORATOIRE DE RECHERCHE POUR LE DEVELOPEMENT DES SYSTEMES  <span>Informatique</span>  </p>
        </div>
    </footer>

		

</body>
</html>

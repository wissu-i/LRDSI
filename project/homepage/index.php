<!DOCTYPE html>
<html>
  <head>
    <title> Homepage </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="presentation.css">
    <link rel="stylesheet" href="news/news1.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="searchbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta nme="viewport" content="width= device-width, initial-scale = 1">
    <meta charset="utf_8" >
    <meta name= "viewport" content="width=device-width,initial-secale=1,0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>

  <body>
    <div class="nav_bar">
    <img src="LOGO2-S.png" alt="logo" class="logo_image"> 
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
                <li> <a href="#"> <div>Accueil </div></a> </li>
                <li> <a href="../projets/miniproject.php"> <div>Projets </div></a> </li>
                <li> <a href="../publication et evenements/index.php"> <div id="exception">Publications et <br> Evènements</div></a> </li>
                <li> <a href="../membres/membre.php"> <div>Membres </div></a></li>
                <li> <a href="#contact"> <div>Contact </div></a> </li>
              </ul>
            </div>


            <div class="news-bottun"> 
              <input type="checkbox" class="news-click">
              <P class="news-c">Actualités</P>
              <?php
                  include('news/connect.php');
                  $news = mysqli_query($conn, 'select * from news');
                  ?>
          
                  <div class="news" style="overflow-y:auto;">
                  <?php
                  while($row = mysqli_fetch_array($news)) {
                    ?>
                    <div class="one-news">
                    <h1> <?php echo $row['title']; ?></h1>
                    <p> <?php echo $row['content'];?></p>
                    <p id="date"> <?php                     
                    $formattedDate = date('M j, Y', strtotime($row['datep']));
                    echo $formattedDate; ?></p>
                    </div>
                  <?php }?>
                  </div>
            </div>
    </div>

            
        

      <div class="middle-page">
        <div class="dev-img"> <img src="Static assets-pana.png"  alt="developers">  </div>
        <div class="presentation"> 
          <h1>recherche, valorisation - transfert de technologie et formation.</h1>
          <p>Découvrez nos derniers projets, travaux et événements. et restez en contact avec le monde de l'informatique </p>
        </div>
        <a href="#us"><button> A propos de LRDSI</button></a>
      </div>
    </div>


    <section   id="us">
      <div class="container reveal">

        <div class="text">
          <div class="title">
            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/zpxybbhl.json"
                trigger="hover"
                colors="primary:#a866ee,secondary:#eeaa66"
                style="width:120px;height:120px;margin-top:10px">
            </lord-icon>

              <h1>A propos de LRDSI</h1>
          </div>
        <p>Le laboratoire de Recherche pour le Développement des Systèmes Informatisés (LRDSI) de l’université Saad Dahlab –Blida1, a été agréé en mai 2002 pour accompagner le département d’informatique créé en 1999, dans ses activités pédagogiques et scientifiques. Il est composé de quatre équipes regroupant plus de 30 enseignants chercheurs et 32 doctorants (LMD et classique). </p>
        </div>

        <div class="right">
            <p>
              Les missions du LRDSI s’articulent autour de trois axes principaux : recherche, valorisation - transfert de technologie et formation. Sa vocation est de développer un savoir-faire, au service de la société en liaison étroite avec les disciplines Ingénierie, Sciences Humaines et Sociales, Sciences de l'environnement et Sciences de la Vie. 
              <br>
              
              Les thèmes de recherche du laboratoire couvrent un large spectre des sciences de l’informatique à dominante logicielle et incluent à la fois, des aspects fondamentaux et des aspects appliqués : algorithmique, combinatoire, graphes, programmation, génie logiciel, vérification et preuves, parallélisme, calcul à haute performance, réseaux, bases de données, extraction et représentation des connaissances, apprentissage, fouille de données, interaction homme-machine, aide à la décision, etc.  
              <br>

              Les enseignants-chercheurs du LRDSI participent activement à la formation des étudiants inscrits dans les spécialités informatiques des trois niveaux du L (Licence), M (Master) et D (Doctorat) mis en place à chaque rentrée universitaire. 
               <br>
             <cite> Nadjia Benblidia, </cite>
             <br> 
              <cite>Directrice du Laboratoire</cite>
            </p>
        </div>
        <div class="left"> <img src="Development-cuate.png" alt="stuff" id="prenstation-img"> </div>
      </div>
    </section>
     
    <footer id="contact"   style="bottom: -2500px;">
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
</html>


   <script type="text/javascript">
      window.addEventListener('scroll', reveal);
  
      function reveal(){
        var reveals = document.querySelectorAll('.reveal');
  
        for(var i = 0; i < reveals.length; i++){
  
          var windowheight = window.innerHeight;
          var revealtop = reveals[i].getBoundingClientRect().top;
          var revealpoint = 150;
  
          if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
          }
          else{
            reveals[i].classList.remove('active');
          }
        }
      }
      </script>
    
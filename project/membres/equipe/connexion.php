<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "lrdsi";

$connexion = mysqli_connect($serveur, $utilisateur, "", $base_de_donnees);

if (!$connexion) {
    die("La connexion a échoué : " . mysqli_connect_error());
}
?>
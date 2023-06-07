<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "lrdsi";

$conn = mysqli_connect($serveur, $utilisateur, "", $base_de_donnees);

if (!$conn ) {
    die("La connexion a échoué : " . mysqli_connect_error());
}
?>


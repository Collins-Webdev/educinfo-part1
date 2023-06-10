<!-- fichier contenant les instruction permettant la connexion du fichier insert.php à la base de données -->


<?php


$user="root";
$mdp="";
$db="formulaire_inscription_essf";
$server="localhost";

$link=mysqli_connect($server,$user,$mdp,$db);

if($link) {

    
   //echo "connexion établit";
} 
else{
    die(mysqli_connect_error());
}









?>
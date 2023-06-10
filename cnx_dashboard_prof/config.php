<?php

include "../cnx.php";


if(isset($_POST["email"]) && isset($_POST["mdp"])) 
{
    $mdp=$_POST["mdp"];
    $email=$_POST["email"];

    $req =  mysqli_query($link, "SELECT * FROM inscription_connexion_dashboard_etudiant WHERE email = '$email' AND mot_de_passe = '$mdp' ");
    $num_ligne = mysqli_num_rows($req);
    if($num_ligne > 0) {
        header("location: ../ytr.php");
    }
    else{
        echo "adresse mail ou mot de passe incorrectes !!!";
    }
}
?>
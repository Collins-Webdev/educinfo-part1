<?php

session_start() ;

if(isset($_POST["valider"])) 
{
include "cnx.php";


if(isset($_POST["nom"]) && isset($_POST["mdp"])) 
{
    $nom=$_POST["nom"];
    $mdp=$_POST["mdp"];
    $erreur="";

    $req =  mysqli_query($link, "SELECT * FROM inscription_connexion_dashboard_etudiant WHERE nom = '$nom' AND mot_de_passe = '$mdp' ");
    $num_ligne = mysqli_num_rows($req);
    if($num_ligne > 0) {
        header("location: ./dashboard admin/index admin.php");
        // $_SESSION['email'] = $email ;
        $_SESSION['nom'] = $nom ;
    }
    else{
        $erreur = "Idantifiants incorrects !";
    }
}

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<style>
        label{
            width: 20%;
            display: inline-block;
            text-align: left;
        }
        
        body{
            width: 50%;
            font-family: Arial, Helvetica, sans-serif;
            margin: 5px auto;
            background: #f4f7f8;
            padding: 20px;
            color: #1abc9c;
        }
        fieldset{
            border-radius: 8px;
        }
        legend{
            font-size: 1.4em;
            margin-bottom: 10px;
        }
         input[type="text"], input[type="password"]{
            border-radius: 5px;
            padding: 10px; 
            width: 70%; 
            background-color: #ffff;
            margin: 10px;
        }
        input[type="submit"] {
            position: relative;
            padding: 20px;
            font-size: 18px;
            border: 1px solid #16a085;
            border-radius: 2px;
            margin-top: 8px;
            width: 100%;
            cursor: pointer;
            font-style: bold;
            color:#000 ;
        }
    </style>
</head>
<body>
 
    <!-- <form action="config.php" method="post"> -->
    <form action="" method="post">
    <?php
            
            if(isset($erreur)) {
                echo $erreur ;
            }
            
            ?>
        
        <fieldset>
            <legend>Connexion</legend>   
            <label for="nom">Nom Admin</label>
        <input type="text" placeholder="Votre nom ici" id="nom" name="nom" require> <br>    
        <label for="mdp">Mot de passe</label>
        <input type="password" placeholder="Mot de passe ici" id="mdp" name="mdp" require> <br>
        <input type="submit" value="Valider" name="valider"> <br><br>
        </fieldset>
        
        
    </form>
</body>
</html>
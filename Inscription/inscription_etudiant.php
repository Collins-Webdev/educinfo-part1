<?php 
$Nom_Etudiant = $_POST['Nom_Etudiant'];
$Prenom_Etudiant = $_POST['Prenom_Etudiant'];
$Sexe_Etudiant = $_POST['Sexe_Etudiant'];
$Sit_Matrim_Etudiant = $_POST['Sit_Matrim_Etudiant'];
$Date_Nais_Etudiant = $_POST['Date_Nais_Etudiant'];
$Certificat_Acte_Nais_Etudiant = $_POST['Certificat_Acte_Nais_Etudiant'];
$Filiere_Desiree = $_POST['Filiere_Desiree'];
$Option_Formation_Desiree = $_POST['Option_Formation_Desiree'];
$Num_Phone_Etudiant = $_POST['Num_Phone_Etudiant'];
$Email_Etudiant = $_POST['Email_Etudiant'];
$Adress_Resid_Etudiant = $_POST['Adress_Resid_Etudiant'];
$Last_School_Frequente_Etudiant = $_POST['Last_School_Frequente_Etudiant'];
$Diplome_Atteint_Last_School_Frequente_Etudiant = $_POST['Diplome_Atteint_Last_School_Frequente_Etudiant'];
$Domaine_Etude_Last_School_Frequente_Etudiant = $_POST['Domaine_Etude_Last_School_Frequente_Etudiant'];
$Photo_Diplome_Got_Last_School_Frequente_Etudiant = $_POST['Photo_Diplome_Got_Last_School_Frequente_Etudiant'];
$IDCard_Etudiant = $_POST['IDCard_Etudiant'];
$SpecificationIDCard_Etudiant_Selected = $_POST['SpecificationIDCard_Etudiant_Selected'];
$Nom_Prenom_Tuteur = $_POST['Nom_Prenom_Tuteur'];
$Num_Tel_Tuteur = $_POST['Num_Tel_Tuteur'];
$Email_Tuteur = $_POST['Email_Tuteur'];
$Adress_Resid_Tuteur = $_POST['Adress_Resid_Tuteur'];
$Profession_Tuteur = $_POST['Profession_Tuteur'];
$IDCard_Tuteur = $_POST['IDCard_Tuteur'];


$email_from = 'info@essfgodomey.com';
$email_subject = 'Nouveau formulaire d\'inscription d\'étudiant';
$email_body = "Nom de l'étudiant : $Nom_Etudiant.\n".
              "Prénom de l'étudiant : $Prenom_Etudiant.\n".
              "Sexe de l'étudiant : $Sexe_Etudiant.\n".
              "Situation matrimonial de l'étudiant : $Sit_Matrim_Etudiant.\n".
              "Date de naissance de l'étudiant : $Date_Nais_Etudiant.\n".
              "Acte de naissance de l'étudiant : $Certificat_Acte_Nais_Etudiant.\n".
              "Filière désirée : $Filiere_Desiree.\n".
              "Option de formation désirée : $Option_Formation_Desiree.\n".
              "Numéro de téléphone de l'étudiant : $Num_Phone_Etudiant.\n".
              "Email de l'étudiant : $Email_Etudiant.\n".
              "Adresse de résidence de l'étudiant : $Adress_Resid_Etudiant.\n".
              "Dernier centre de formation fréquenté : $Last_School_Frequente_Etudiant.\n".
              "Dernier diplôme obtenu : $Diplome_Atteint_Last_School_Frequente_Etudiant.\n".
              "Dernier domaine d'étude : $Domaine_Etude_Last_School_Frequente_Etudiant.\n".
              "Photo du dernier diplôme obtenu : $Photo_Diplome_Got_Last_School_Frequente_Etudiant.\n".
              "Documents d'idendité de l'étudiant : $IDCard_Etudiant.\n".
              "Type de documents d'idendité envoyé : $SpecificationIDCard_Etudiant_Selected.\n".
              "Nom et prénom du tuteur/tutrice : $Nom_Prenom_Tuteur.\n";
              "Numéro de téléphone du tuteur/tutrice : $Num_Tel_Tuteur.\n";
              "Email du tuteur/tutrice : $Email_Tuteur.\n";
              "Adresse de résidence du tuteur/tutrice : $Adress_Resid_Tuteur.\n";
              "Profession du tuteur/tutrice : $Profession_Tuteur.\n";
              "Documents d'identité du tuteur/tutrice : $IDCard_Tuteur.\n";
              

$to = 'essaintefelicite@gmail.com';
$headers = "De : $email_from \r\n";

$headers .= "Répondre à: $Email_Etudiant \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: inscription étudiant.html");            

?>

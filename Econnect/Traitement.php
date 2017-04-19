<?php

	$Mail = $_POST['Mail'];
	$Mdp = $_POST['Mdp'];
	$Nom = $_POST['Nom'];
	$Prenom = $_POST['Prenom'];
	$Date_de_naissance = $_POST['Date_de_naissance'];
	$Ville = $_POST['Ville'];
	$Pays = $_POST['Pays'];
	$Sexe = $_POST['Sexe'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO utilisateur(Mail, Mdp, Nom, Prenom, Date_de_naissance, Ville, Pays, Sexe) VALUES(:Mail, :Mdp, :Nom, :Prenom, :Date_de_naissance, :Ville, :Pays, :Sexe)');
$req->execute(array(
	'Mail' => $Mail,
	'Mdp' => $Mdp,
	'Nom' => $Nom,
	'Prenom' => $Prenom,
	'Date_de_naissance' => $Date_de_naissance,
	'Ville' => $Ville,
	'Pays' => $Pays,
	'Sexe' => $Sexe,
	));


echo 'Le profil a bien été créé !';
header ('location: Connexion.php');
?>

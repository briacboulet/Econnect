<?php

$Mail = $_POST['Mail'];
$Mdp = $_POST['Mdp'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM utilisateur WHERE Mail = :Mail AND Mdp = :Mdp');

$req->execute(array(
    'Mail' => $Mail,
    'Mdp' => $Mdp
	));

$resultat = $req->fetch();

if (!$resultat)
{
   
	header ('location: Connexion.php');
	echo 'Mauvais identifiant ou mot de passe !';
}
else
{
	
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['Mail'] = $Mail;
	$_SESSION['Prenom'] = $resultat['Prenom'];
	$_SESSION['Date_de_naissance'] = $resultat['Date_de_naissance'];
	$_SESSION['Nom'] = $resultat['Nom'];
	$_SESSION['Sexe'] = $resultat['Sexe'];
	$_SESSION['photo_profil'] = $resultat['photo_profil'];
    echo 'Vous êtes connecté !';
	header ('location: Econnect.php');
	
}

?>
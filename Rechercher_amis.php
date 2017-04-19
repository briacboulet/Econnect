<?php 

//session_start();

$Nom = $_POST['Nom'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM utilisateur WHERE Nom = :Nom');


$req->execute(array(
    'Nom' => $Nom
	));
	
$resultat = $req->fetch();

if (!$resultat)
{
   
	header ('location: Econnect.php');
	echo 'Personne avec ce nom de famille !';
}
else
{
	session_start();
    $_SESSION['id2'] = $resultat['id'];
    $_SESSION['Mail2'] = $resultat['Mail'];
	$_SESSION['Prenom2'] = $resultat['Prenom'];
	$_SESSION['Date_de_naissance2'] = $resultat['Date_de_naissance'];
	$_SESSION['Nom2'] = $resultat['Nom'];
	$_SESSION['Sexe2'] = $resultat['Sexe'];
	$_SESSION['Photo_profil2'] = $resultat['Photo_profil'];
	//include('Apropos.deUt2.Econnect.php');
	header ('location: Apropos.deUt2.Econnect.php');
	//header('Location: Apropos.deUt2.Econnect.php? nom_amis =' . $amis['Nom'] . '); 
}

?>
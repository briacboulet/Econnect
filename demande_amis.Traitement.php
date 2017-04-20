<?php

session_start();

$id = $_SESSION['id'];
$id2 = $_SESSION['id2'];
$amis = 1;
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//$req = $bdd->prepare("UPDATE utilisateur SET photo_profil ='".$chemin."' WHERE id = ".$id);

echo $id, $id2;
$req = $bdd->prepare("UPDATE amis SET statut =$amis WHERE id_from = $id2 AND id_to = $id");
$req->execute(array(
	'statut' => $amis
	));

//$resultat = $req->fetch();


?>
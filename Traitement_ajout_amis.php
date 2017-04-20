<?php

session_start();

$from = $_SESSION['id'];
$to = $_POST['to'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$statut = 1
$req = $bdd->prepare('UPDATE statut FROM amis WHERE amis.id_from = utilisateur.id'); 
$req->execute(array(
    'statut' => $statut
	));
	$resultat = $req->fetch();

?>
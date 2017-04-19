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


$req = $bdd->prepare('SELECT id FROM utilisateur'); 
$req->execute(array(
    'id' => $_SESSION['id'],
	));
SELECT id_from FROM amis WHERE  IF(a.id_to = :id, id_from, id_to) = a.id
WHERE :id IN (id_to, id_from)


?>
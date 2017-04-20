<?php 
session_start();

// La function qui recupere les invites





//function recup_invitation()

	$id_from = $_SESSION['id'];
	$id_to = $_SESSION['id2'];
	//echo $_SESSION['id'], $_SESSION['id2'];
	//echo $id_from, $id_to;
	try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//$requete = $bdd->execute("SELECT statut FROM amis WHERE $id_from = '".$_SESSION['id']."', $id_to = '".$_SESSION['id2']."'");

	/*if(mysql_num_rows ($requete == '1'))
	{
		echo "Vous êtes deja amis";
	}
	else
	{*/
		$req = $bdd->prepare('INSERT INTO amis (id_from, id_to, statut) VALUES(:id_from, :id_to, :statut)');
		$req->execute(array(
		'id_from' => $id_from,
		'id_to' => $id_to,
		'statut' => 0
		));
		header('location: Apropos.deUt2.Econnect.php');
	// }



	
	
	
	


?>
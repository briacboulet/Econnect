<?php

session_start();
$text = $_POST['Text'];
$Acces = $_POST['Accessibilité'];

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


		$dossier = 'Photo_post/';
		$fichier = basename($_FILES['avatar']['name']);
		$taille_maxi = 100000;
		$taille = filesize($_FILES['avatar']['tmp_name']);
		$extensions = array('.png', '.gif', '.jpg', '.jpeg');
		$extension = strrchr($_FILES['avatar']['name'], '.'); 
 
		//Début des vérifications de sécurité...
		if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
		{
			$erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg...';
		}
		if($taille>$taille_maxi)
		{
			$erreur = 'Le fichier est trop gros...';
		}
		if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
		{
			//formatage du nom (suppression des accents, remplacements des espaces par "-")
			$fichier = strtr($fichier, 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
			$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
			if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //correct si la fonction renvoie TRUE
			{
				echo 'Upload effectué avec succès !';
				$chemin = $dossier . $fichier;
				$id= $_SESSION['id'] ;
				$date = date("Y-m-d");
				$zero=0;
				
				$video = 'pas de video';
					
				
					$mysqli = mysqli_connect('localhost', 'root', '','bdd_econnect'); 

					// on sélectionne la base 

					// on crée la requête SQL 
					$sql = "INSERT INTO activites(id, Texte, Photo, Video, Date, Likes, Hates, Loves, Laughs, Accessibilite, Type) VALUES (".$id.",'".$text."','".$chemin."','".$video."','".$date."',".$zero.",".$zero.",".$zero.",".$zero.",".$Acces.",".$zero.")"; 

					// on envoie la requête 
					$req = mysqli_query($mysqli, $sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
				
				
				echo $id.'<br>'; 
				echo $text.'<br>';
				echo $chemin.'<br>';
				echo $date.'<br>';
				echo $zero.'<br>';
				echo $Acces.'<br>';
				
				header ('location: Photos.Econnect.php');
				
			}
			else //sinon, cas où la fonction renvoie FALSE
			{
				echo 'Echec de l\'upload !';
		    }
		}
		else
		{
			echo $erreur;
		}

	
	
?>
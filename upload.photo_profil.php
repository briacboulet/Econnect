<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

session_start();
		$dossier = 'Photo/';
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
				
				$req = $bdd->prepare("UPDATE utilisateur SET photo_profil ='".$chemin."' WHERE id = ".$id);

				$req->execute(array(
					'photo_profil' => $chemin
					));
				
				$resultat = $req->fetch();
				$_SESSION['Photo_profil'] = $resultat['Photo_profil'];
				
				echo $id;
				echo $chemin;
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
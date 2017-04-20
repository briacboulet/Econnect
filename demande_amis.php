<!DOCTYPE html>
<html>

<?php
session_start();
?>
	
   	<head>
		<title> Econnect </title>
		<meta charset="utf-8"/>
		<link href="CSS.css" rel="stylesheet" type="text/css" />
		<link rel="Logo" type="image/png" href="Logo.png" />
	</head>
	
	
	<header>
	
			<img src="Logo.jpg" name="logo" id="logo"/> 
			
			<a id="rechercher">
			<form action = "Rechercher_amis.php" method ="post"  >
			 <input type="text" placeholder="Cherchez une personne ou un évènement..." name="Nom" id="rechercher" style='float:top; margin-top:1px; margin-left:1px; '>
			 <input type="submit" value="Rechercher" style='position:absolute; float:right; margin-top:9px; margin-left:520px;' >
			</form>
			</a>
			
			<form action = "demande_amis.Traitement.php" method ="post"  >
			 <input type="submit" value="Ajouter" style='position:absolute; float:right; margin-top:9px; margin-left:520px;' >
			</form>
			<?php
				$id = 0;
				$Nom = 0;
				$Prenom = 0;
			
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
				}
				catch (Exception $e)
				{
						die('Erreur : ' . $e->getMessage());
				}
				
				$nbLignes = $bdd->query("SELECT count(*) from amis WHERE id_from = _SESSION['id']");
			
				//$infos = $bdd->query('SELECT id, Nom, Prenom, photo_profil FROM utilisateur u1 LEFT JOIN a1 ON u1.id = a1.id_from');
				//$infos = $bdd ("SELECT * FROM utilisateur WHERE id=('SELECT id_from FROM amis WHERE id_to=$_SESSION['id'] AND prenom='marcel");
				$req = $bdd->prepare("SELECT Nom, Prenom 
				FROM utilisateur AS u, amis AS a 
				WHERE a.id_from = u.id");
				$req->execute(array(
				'a.id_from' => $id
				));
				
				//$resultat = $nbLignes->fetch();
				$resultat2 = $req->fetch();
				echo	$id;
					/*for ($i = 1; $i <= $nbLignes; $i++) {
						echo <p 
					*/
			//}
			?>
			<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
				echo $_SESSION['Prenom'],  $_SESSION['Nom'];
			?> 
			
			
			<?php
				
				//echo "<img src='" . $_SESSION['photo_profil'] . "' id='pdp'>";
			
			?>
			
			<a href=Reglages.php><img  src="parametre.jpg" name="parametre" id="parametre"/></a>
	
	</header>
	
	
	<body>
			
		
		<div id=col1>
			<a href=Econnect.php style = "color: white;">Fil d'actualité</a><br><br><br>
			<a href=Ami.Econnect.php style = "color: white;">Amis</a><br><br><br>
			<a href=Chronologie.Econnect.php style = "color: white;">Chronologie</a><br><br><br>
			<a href=Apropos.Econnect.php style = "color: white;">A propos</a><br><br><br>
			<a href=Photos.Econnect.php style = "color: white;">Photos et Vidéos</a><br><br><br>
		</div>
		
		
		
			
			
		
	</body>
	
	
<footer>
Droit d'auteur &#9400 2017 Econnect  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dernière mise à jour le 16/04/2017   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Briac Boulet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Naïm Khames &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pierre Lala
</footer>

</html>





</html>
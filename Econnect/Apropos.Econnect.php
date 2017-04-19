<!DOCTYPE html>
<html>
<?php
session_start();
?>
	
   	<head>
		<title> Econnect </title>
		<meta charset="utf-8"/>
		<link href="CSS.css" rel="stylesheet" type="text/css" />
		<link rel="icon" type="image/png" href="icon.png" />
	</head>
	
	
	<header>
			<img src="Logo.jpg" name="logo" id="logo"/> 
			
            <input type="search" placeholder="Cherchez une personne ou un évènement..." name="rechercher" id="rechercher"> 
	
			<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
				echo $_SESSION['Prenom'],  $_SESSION['Nom'];
			?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
			<img src="photo de profil.jpg"  name="pdp" id="pdp"/> 
			
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
		
		
		
		<div id=col2>
		
			<p id=center>
				
			Informations:
		
			</p>
			
			
			
			<form method='post' action='upload.photo_profil.php' enctype='multipart/form-data'>
				<input type='file' name='avatar'>
				<input type='hidden' name='MAX_FILE_SIZE' value='250000'>
				<input type='submit' value='Envoyer'>
			</form>
			
			
		</div>
		
	</body>
	
	
<footer>
Droit d'auteur &#9400 2017 Econnect  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dernière mise à jour le 16/04/2017   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Briac Boulet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Naïm Khames &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pierre Lala
</footer>

</html>
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
			
            <input type="search" placeholder="Cherchez une personne ou un évènement..." name="rechercher" id="rechercher"> 
	
			<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
				echo $_SESSION['Prenom'],  $_SESSION['Nom'];
			?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
			<img src="photo de profil.jpg"  name="pdp" id="pdp"/> 
			
			<img src="parametre.jpg" name="parametre" id="parametre"/>
	
	</header>
	
	
	<body>
			
		<nav>
		<div id=col1 style="color: white;">
			<a href=Econnect.html>Fil d'actualité</a><br><br><br>
			<a href=Ami.Econnect.html>Ami</a><br><br><br>
			<a href=Chronologie.Econnect.html>Chronologie</a><br><br><br>
			<a href=Apropos.Econnect.html>A propos</a><br><br><br>
			<a href=Photos.Econnect.html>Photos et Vidéos</a><br><br><br>
		</div>
		</nav>
		
		<div id=col2>
		
		
			<p id=center>
				
				<img src="photo de profil.jpg"  width="50" height="50"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<a id=text>
				
				<a/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="photo.jpg"  name="photo" id="photo"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="video.png"  name="video" id="video"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				
				<input type="text" placeholder="Nouveau Post" name="New">
			</p>
			
			<p id=center>
				
				<img src="photo de profil.jpg"  width="50" height="50"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<a id=text>Nom de l'ami <a/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				
				grosse soirée samedi chez moi
			</p>
			
			<p id=center> 
				
				<img src="photo de profil.jpg"  width="50" height="50"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<a id=text>Nom de l'ami <a/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				
				Y a quoi à faire pour demain en web dynamique ??
			</p>
			
			<p id=center>
				
				<img src="photo de profil.jpg"  width="50" height="50"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<a id=text>Nom de l'ami <a/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
			
				Photo de mon chien
			</p>
		</div>
		
	</body>
	
	
<footer>
Droit d'auteur &#9400 2017 Econnect  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dernière mise à jour le 16/04/2017   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Briac Boulet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Naïm Khames &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pierre Lala
</footer>

</html>
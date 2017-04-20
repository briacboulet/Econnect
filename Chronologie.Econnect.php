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
			
			<a id="rechercher">
            <form action = "Rechercher_amis.php" method ="post"  style="position:absolute;">
			 <input type="text" placeholder="Cherchez une personne par son nom..." name="Nom" style="float:top; margin-top:8px; margin-left:1px;" id="rechercher">
			 <input type="submit" value="Rechercher" id="submit">
			</form>
			<a/>
			
			<a id="rechercher2">
			<form action = "Rechercher_evenements.php" method ="post"  style="position:absolute;">
			 <input type="text" placeholder="Cherchez un évènement..." name="Evenement" style="float:top; margin-top:15px; margin-left:1px;" id="rechercher2">
			 <input type="submit" value="Rechercher" id="submit2">
			</form>
			<a/>
			
			<a style="margin-left: 62.5%; position: absolute; color: white; font-size: 35px; margin-top: 1.1%;">
			<?php 
				$bdd = new PDO('mysql:host=localhost;dbname=bdd_econnect;charset=utf8', 'root', '');
				echo $_SESSION['Prenom'],  $_SESSION['Nom'];
			?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a/>
			
			<?php
		
				echo "<img src='" . $_SESSION['photo_profil'] . "' id='pdp'>";
			
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
		
		
		
		<div id=col2>
		
		
			<p id=center>
				
				<img src="photo de profil.jpg"  width="50" height="50"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<a id=text> Nom de l'utilisateur <a/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<br>
				
				<input type="text" placeholder="Nouvelle Evenement" name="New">  <input type="Date"  name="New">
			</p>
			
			<p id=center>
				
				<img src="photo de profil.jpg"  width="50" height="50"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<a id=text> Nom de l'utilisateur <a/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				
				Mon anniversaire   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   le 01/10/2017
			</p>
			
			<p id=center> 
				
				<img src="photo de profil.jpg"  width="50" height="50"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<a id=text>Nom de l'utilisateur <a/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
				
				Diner avec la famille  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   le 01/05/2017
			</p>
			
			<p id=center>
				
				<img src="photo de profil.jpg"  width="50" height="50"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
				<a id=text>Nom de l'utilisateur <a/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
			
				grosse soirée samedi chez moi  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   le 22/04/2017
			</p>
		</div>
		
	</body>
	
	
<footer>
Droit d'auteur &#9400 2017 Econnect  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dernière mise à jour le 16/04/2017   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Briac Boulet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Naïm Khames &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pierre Lala
</footer>

</html>
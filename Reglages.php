<!DOCTYPE html>

<html>

	
   	<head>
		<title> Econnect </title>
		<meta charset="utf-8"/>
		<link href="CSS.css" rel="stylesheet" type="text/css" />
		<link rel="Logo" type="image/png" href="Logo.png" />
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
		
		<nav>
		<div id=col1>
			<a href=Econnect.php style = "color: white;">Fil d'actualité</a><br><br><br>
			<a href=Ami.Econnect.php style = "color: white;">Amis</a><br><br><br>
			<a href=Chronologie.Econnect.php style = "color: white;">Chronologie</a><br><br><br>
			<a href=Apropos.Econnect.php style = "color: white;">A propos</a><br><br><br>
			<a href=Photos.Econnect.php style = "color: white;">Photos et Vidéos</a><br><br><br>
		</div>
		</nav>
		
		<div id=col2>
		<img src="parametre.jpg" name="reglages" id="reglages"/>
		<p style="color: white; font-size: 80px; margin-left: 320px; margin-top: 45px;"> Paramètres <p/>
		<a style = "color: white; font-size: 30px; margin-left: 250px;">Modifier mon profil</a><br><br><br>
		<a style = "color: white; font-size: 30px; margin-left: 250px;">Changer ma photo de profil</a><br><br><br>
		<a href=Deconnexion.php style = "color: white; font-size: 30px; margin-left: 250px;">Déconnexion</a><br><br><br>	
		</div>
		
	</body>
	
	
<footer>
Droit d'auteur &#9400 2017 Econnect  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Dernière mise à jour le 16/04/2017   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Briac Boulet &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Naïm Khames &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pierre Lala
</footer>

</html>